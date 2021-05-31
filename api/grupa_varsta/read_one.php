<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

include_once '../config/database.php';
include_once '../objects/grupa_varsta.php';

// get database connection
$database = new Database();
$db = $database->getConnection();


$GrupaVarsta = new GrupaVarsta($db);

$GrupaVarsta->judet = isset($_GET['judet']) ? $_GET['judet'] : die();

$GrupaVarsta->readOne();

if($GrupaVarsta->TOTAL != null){
    $data_arr = array(
        "judet" => $GrupaVarsta->judet,
        "TOTAL" => $GrupaVarsta->TOTAL,
        "Sub_25_ani" => $GrupaVarsta->Sub_25_ani,
        "25_29_ani" => $GrupaVarsta->_25_29_ani,
        "30_39_ani" => $GrupaVarsta->_30_39_ani,
        "40_49_ani" => $GrupaVarsta->_40_49_ani,
        "50_55_ani" => $GrupaVarsta->_50_55_ani,
        "peste_55_ani" => $GrupaVarsta->Peste_55_ani,
        "luna" => $GrupaVarsta->luna,
        "an" => $GrupaVarsta->an
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