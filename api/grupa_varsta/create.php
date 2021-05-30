<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
include_once '../config/database.php';
include_once '../objects/grupa_varsta.php';

$database = new Database();
$db = $database->getConnection();

$GrupaVarsta = new GrupaVarsta($db);

$data = json_decode(file_get_contents("php://input"));


//TODO de setat parametrii care sunt necesari pentru insert
if(
    !empty($data->judet) &&
    !empty($data->TOTAL) && 
    !empty($data->Sub_25_ani) &&
    !empty($data->_25_29_ani) &&
    !empty($data->_30_39_ani) &&
    !empty($data->_40_49_ani) &&
    !empty($data->_50_55_ani) &&
    !empty($data->luna) &&
    !empty($data->an)
){
    $GrupaVarsta->judet = $data->judet;
    $GrupaVarsta->TOTAL = $data->TOTAL;
    $GrupaVarsta->Sub_25_ani = $data->Sub_25_ani;
    $GrupaVarsta->_25_29_ani = $data->_25_29_ani;
    $GrupaVarsta->_30_39_ani = $data->_30_39_ani;
    $GrupaVarsta->_40_49_ani = $data->_40_49_ani;
    $GrupaVarsta->_50_55_ani = $data->_50_55_ani;
    $GrupaVarsta->luna = $data->luna;
    $GrupaVarsta->an = $data->an;

    if($GrupaVarsta->create()){
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