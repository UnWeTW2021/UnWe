<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include_once '../config/database.php';
include_once '../objects/medie_rezidenta.php';

$database = new Database();
$db = $database->getConnection();

$MedieRezidenta = new MedieRezidenta($db);

$MedieRezidenta->judet = isset($_GET['judet']) ? $_GET['judet'] : die();
$MedieRezidenta->luna = isset($_GET['luna1']) ? $_GET['luna1'] : die();
$MedieRezidenta->luna2 = isset($_GET['luna2']) ? $_GET['luna2'] : die();
$MedieRezidenta->an = isset($_GET['an1']) ? $_GET['an1'] : die();
$MedieRezidenta->an2 = isset($_GET['an2']) ? $_GET['an2'] : die();

$MedieRezidenta->readLuna();

if($MedieRezidenta->TOTAL != null)
{
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
        "luna" => $MedieRezidenta->luna,
        "an" => $MedieRezidenta->an,
        "luna2" => $MedieRezidenta->luna2,
        "an2" => $MedieRezidenta->an2
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