<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include_once '../config/database.php';
include_once '../objects/nivelul_educatiei.php';

// get database connection
$database = new Database();
$db = $database->getConnection();


$NivelulEducatiei = new NivelulEducatiei($db);

$NivelulEducatiei->judet = isset($_GET['judet']) ? $_GET['judet'] : die();

$NivelulEducatiei->readOne();

if($NivelulEducatiei->total != null){
    $data_arr = array(
        "judet" => $NivelulEducatiei->judet,
        "total" => $NivelulEducatiei->total, 
        "fara_studii" => $NivelulEducatiei->fara_studii,
        "invatamant_primar" => $NivelulEducatiei->invatamant_primar,
        "invatamant_gimnazial" => $NivelulEducatiei->invatamant_gimnazial,
        "invatamant_liceal" => $NivelulEducatiei->invatamant_liceal,
        "invatamant_postliceal" => $NivelulEducatiei->invatamant_postliceal,
        "invatamant_profesional_arte_si_meserii" => $NivelulEducatiei->invatamant_profesional_arte_si_meserii,
        "invatamant_universitar" => $NivelulEducatiei->invatamant_universitar
    );

    http_response_code(200);

    echo json_encode($data_arr);
}
else{
    http_response_code(404);
  
    // tell the user product does not exist
    echo json_encode(array("message" => "City does not exist."));
}

?>