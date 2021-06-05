<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
include_once '../config/database.php';
include_once '../objects/medie_rezidenta.php';

$database = new Database();
$db = $database->getConnection();

$MedieRezidenta = new MedieRezidenta($db);

$data = json_decode(file_get_contents("php://input"));


//TODO de setat parametrii care sunt necesari pentru insert
if(
    !empty($data->judet) &&
    !empty($data->total_femei) &&
    !empty($data->total_barbati) &&
    !empty($data->total_urban) &&
    !empty($data->femei_urban) &&
    !empty($data->barbati_urban) &&
    !empty($data->total_rural) &&
    !empty($data->femei_rural) &&
    !empty($data->barbati_rural) &&
    !empty($data->luna) &&
    !empty($data->an)
){
    $MedieRezidenta->judet = $data->judet;
    $MedieRezidenta->TOTAL = $data->total_femei + $data->total_barbati;
    $MedieRezidenta->TOTAL_SOMERI_FEMEI = $data->total_femei;
    $MedieRezidenta->TOTAL_SOMERI_BARBATI = $data->total_barbati;
    $MedieRezidenta->TOTAL_SOMERI_DIN_MEDIUL_URBAN = $data->total_urban;
    $MedieRezidenta->SOMERI_FEMEI_DIN_MEDIUL_URBAN = $data->femei_urban;
    $MedieRezidenta->SOMERI_BARBATI_DIN_MEDIUL_URBAN = $data->barbati_urban;
    $MedieRezidenta->TOTAL_SOMERI_DIN_MEDIUL_RURAL = $data->total_rural;
    $MedieRezidenta->SOMERI_FEMEI_DIN_MEDIUL_RURAL = $data->femei_rural;
    $MedieRezidenta->SOMERI_BARBATI_DIN_MEDIUL_RURAL = $data->barbati_rural;
    $MedieRezidenta->luna = $data->luna;
    $MedieRezidenta->an = $data->an;

    if($MedieRezidenta->create()){
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