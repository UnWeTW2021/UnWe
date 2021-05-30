<?php
//required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// include database and object files
include_once '../config/database.php';
include_once '../objects/grupa_varsta.php';
  


$database = new Database();
$db = $database->getConnection();
  
// initialize object
$GrupaVarsta = new GrupaVarsta($db);

$stmt = $GrupaVarsta->read();
$num = $stmt->rowCount();

if($num > 0){

    $data_arr = array();
    $data_arr["grupa_varsta"] = array();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row from
        // $row['name'] -> $name
        // extract($row);

        $data_item = array(
            "judet" => $row['judet'],
            "TOTAL" => $row['TOTAL'],
            "Sub_25_ani" => $row['Sub_25_ani'],
            "_25_29_ani" => $row['25_29_ani'],
            "_30_39_ani" => $row['30_39_ani'],
            "_40_49_ani" => $row['40_49_ani'],
            "_50_55_ani" => $row['50_55_ani'],
            "luna" => $row['luna'],
            "an" => $row['an']
        );

        array_push($data_arr["grupa_varsta"], $data_item);
    }

    // set response code - 200 OK
    http_response_code(200);
    // show products data in json format
    echo json_encode($data_arr);
}
else{
        // set response code - 404 Not found
        http_response_code(404);
  
        echo json_encode(
            array("message" => "No data found in grupa_varsta")
        );
}

?>