<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
include_once '../config/database.php';
include_once '../objects/rate_somaj.php';

$database = new Database();
$db = $database->getConnection();

$RateSomaj = new RateSomaj($db);

$data = json_decode(file_get_contents("php://input"));


//TODO de setat parametrii care sunt necesari pentru insert
if(
    !empty($data->judet) &&
    !empty($data->rata_total_femei) &&
    !empty($data->rata_total_barbati) &&
    !empty($data->indemnizati) &&
    !empty($data->neindemnizati) &&
    !empty($data->rata_somaj) &&
    !empty($data->rata_somaj_feminina) &&
    !empty($data->rata_somaj_masculina) &&
    !empty($data->luna) &&
    !empty($data->an)
){
    $RateSomaj->judet = $data->judet;
    $RateSomaj->TOTAL = (int) $data->rata_total_femei + $data->rata_total_barbati;
    $RateSomaj->rata_total_femei = $data->rata_total_femei;
    $RateSomaj->rata_total_barbati = $data->rata_total_barbati;
    $RateSomaj->someri_indemnizati = $data->indemnizati;
    $RateSomaj->someri_neindemnizati = $data->neindemnizati;
    $RateSomaj->rata_somajului = $data->rata_somaj;
    $RateSomaj->rata_somajului_feminina = $data->rata_somaj_feminina;
    $RateSomaj->rata_somajului_masculina = $data->rata_somaj_masculina;
    $RateSomaj->luna = $data->luna;
    $RateSomaj->an = $data->an;

    if($RateSomaj->create()){
                // set response code - 201 created
                http_response_code(201);
  
                echo json_encode(array("message" => "Inserted successfully"));
    }
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        echo json_encode(array("message" => "Unable to insert."));
    }
}
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    echo json_encode(array("message" => "Unable to insert. Data is incomplete."));
}


?>