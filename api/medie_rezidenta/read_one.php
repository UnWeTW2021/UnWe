<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include_once '../config/database.php';
include_once '../objects/medie_rezidenta.php';

// get database connection
$database = new Database();
$db = $database->getConnection();


$MedieRezidenta = new MedieRezidenta($db);

$MedieRezidenta->judet = isset($_GET['judet']) ? $_GET['judet'] : die();

$MedieRezidenta->readOne();

if($MedieRezidenta->TOTAL != null){
    $data_arr = array(
        "judet" => $MedieRezidenta->judet,
        "TOTAL" => $MedieRezidenta->TOTAL,
        "TOTAL_SOMERI_FEMEI" => $MedieRezidenta->TOTAL_SOMERI_FEMEI,
        "TOTAL_SOMERI_BARBATI" => $MedieRezidenta->TOTAL_SOMERI_BARBATI,
        "TOTAL_SOMERI_DIN_MEDIUL_URBAN" => $MedieRezidenta->TOTAL_SOMERI_DIN_MEDIUL_URBAN,
        "SOMERI_FEMEI_DIN_MEDIUL_URBAN" => $MedieRezidenta->SOMERI_FEMEI_DIN_MEDIUL_URBAN,
        "SOMERI_BARBATI_DIN_MEDIUL_URBAN" => $MedieRezidenta->SOMERI_BARBATI_DIN_MEDIUL_URBAN,
        "TOTAL_SOMERI_DIN_MEDIUL_RURAL" => $MedieRezidenta->TOTAL_SOMERI_DIN_MEDIUL_RURAL,
        "SOMERI_FEMEI_DIN_MEDIUL_RURAL" => $MedieRezidenta->SOMERI_FEMEI_DIN_MEDIUL_RURAL,
        "SOMERI_BARBATI_DIN_MEDIUL_RURAL" => $MedieRezidenta->SOMERI_BARBATI_DIN_MEDIUL_RURAL,
        "luna" => 0,
        "an" => 0
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