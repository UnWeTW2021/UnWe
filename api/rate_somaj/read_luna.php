<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include_once '../config/database.php';
include_once '../objects/rate_somaj.php';

$database = new Database();
$db = $database->getConnection();

$RateSomaj = new RateSomaj($db);

$RateSomaj->judet = isset($_GET['judet']) ? $_GET['judet'] : die();
$RateSomaj->luna = isset($_GET['luna1']) ? $_GET['luna1'] : die();
$RateSomaj->luna2 = isset($_GET['luna2']) ? $_GET['luna2'] : die();
$RateSomaj->an = isset($_GET['an1']) ? $_GET['an1'] : die();
$RateSomaj->an2 = isset($_GET['an2']) ? $_GET['an2'] : die();

$RateSomaj->readLuna();

if($RateSomaj->TOTAL != null)
{
    $data_arr = array(
        "judet" => $RateSomaj->judet,
        "total" => $RateSomaj->TOTAL,
        "total_someri_femei" => $RateSomaj->total_someri_femei,
        "total_someri_barbati" => $RateSomaj->total_someri_barbati,
        "someri_indemnizati" => $RateSomaj->someri_indemnizati,
        "someri_neindemnizati" => $RateSomaj->someri_neindemnizati,
        "rata_somajului" => $RateSomaj->rata_somajului,
        "rata_somajului_feminina" => $RateSomaj->rata_somajului_feminina,
        "rata_somajului_masculina" => $RateSomaj->rata_somajului_masculina,
        "luna" => $RateSomaj->luna,
        "an" => $RateSomaj->an,
        "luna2" => $RateSomaj->luna2,
        "an2" => $RateSomaj->an2,
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