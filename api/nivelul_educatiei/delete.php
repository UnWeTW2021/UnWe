<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../objects/nivelul_educatiei.php';
  
// get database connection
$database = new Database();
$db = $database->getConnection();
  
$NivelulEducatiei = new NivelulEducatiei($db);
  

$data = json_decode(file_get_contents("php://input"));
  
$NivelulEducatiei->judet = $data->judet;
$NivelulEducatiei->luna = $data->luna;
$NivelulEducatiei->an = $data->an;
  
// delete the product
if($NivelulEducatiei->delete()){
  
    // set response code - 200 ok
    http_response_code(200);
  
    // tell the user
    echo json_encode(array("message" => "Product was deleted."));
}
  
// if unable to delete the product
else{
  
    // set response code - 503 service unavailable
    http_response_code(503);
  
    // tell the user
    echo json_encode(array("message" => "Unable to delete product."));
}
?>