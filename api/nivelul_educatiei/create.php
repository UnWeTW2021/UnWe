<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
include_once '../config/database.php';
include_once '../objects/nivelul_educatiei.php';

$database = new Database();
$db = $database->getConnection();

$NivelulEducatiei = new NivelulEducatiei($db);

$data = json_decode(file_get_contents("php://input"));


//TODO de setat parametrii care sunt necesari pentru insert
if(
    !empty($data->judet) &&
    !empty($data->fara_studii) &&
    !empty($data->invatamant_primar) &&
    !empty($data->invatamant_gimnazial) &&
    !empty($data->invatamant_liceal) &&
    !empty($data->invatamant_postliceal) &&
    !empty($data->invatamant_profesional) &&
    !empty($data->invatamant_universitar) &&
    !empty($data->luna) &&
    !empty($data->an)
){
    $NivelulEducatiei->judet = $data->judet;
    $NivelulEducatiei->TOTAL = (int) $data->fara_studii + $data->invatamant_primar + $data->invatamant_gimnazial;
    $NivelulEducatiei->TOTAL += (int) $data->invatamant_liceal + $data->invatamant_postliceal + $data->invatamant_profesional;
    $NivelulEducatiei->TOTAL += (int) $data->invatamant_universitar;
    $NivelulEducatiei->fara_studii = $data->fara_studii;
    $NivelulEducatiei->invatamant_primar = $data->invatamant_primar;
    $NivelulEducatiei->invatamant_gimnazial = $data->invatamant_gimnazial;
    $NivelulEducatiei->invatamant_liceal = $data->invatamant_liceal;
    $NivelulEducatiei->invatamant_postliceal = $data->invatamant_postliceal;
    $NivelulEducatiei->invatamant_profesional_arte_si_meserii = $data->invatamant_profesional;
    $NivelulEducatiei->invatamant_universitar = $data->invatamant_universitar;
    $NivelulEducatiei->luna = $data->luna;
    $NivelulEducatiei->an = $data->an;

    if($NivelulEducatiei->create()){
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