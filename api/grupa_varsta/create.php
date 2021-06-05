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
    !empty($data->sub25) &&
    !empty($data->_25_29) &&
    !empty($data->_30_39) &&
    !empty($data->_40_49) &&
    !empty($data->_50_55) &&
    !empty($data->peste55) &&
    !empty($data->luna) &&
    !empty($data->an)
){
    $GrupaVarsta->judet = $data->judet;
    $GrupaVarsta->TOTAL = (int)$data->sub25 + $data->_25_29 + $data->_30_39;
    $GrupaVarsta->TOTAL += (int) $data->_40_49 + $data->_50_55 + $data->peste55;
    $GrupaVarsta->Sub_25_ani = $data->sub25;
    $GrupaVarsta->_25_29_ani = $data->_25_29;
    $GrupaVarsta->_30_39_ani = $data->_30_39;
    $GrupaVarsta->_40_49_ani = $data->_40_49;
    $GrupaVarsta->_50_55_ani = $data->_50_55;
    $GrupaVarsta->Peste_55_ani = $data->peste55;
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