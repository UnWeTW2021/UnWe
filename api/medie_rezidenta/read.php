<?php
//required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// include database and object files
include_once '../config/database.php';
include_once '../objects/medie_rezidenta.php';
  


$database = new Database();
$db = $database->getConnection();
  
// initialize object
$MedieRezidenta = new MedieRezidenta($db);

$stmt = $MedieRezidenta->read();
$num = $stmt->rowCount();

if($num > 0){

    $data_arr = array();
    $data_arr["medie_rezidenta"] = array();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row from
        // $row['name'] -> $name
        // extract($row);

        $data_item = array(
            "JUDET" => $row['JUDET'],
            "NUMAR_TOTAL_SOMERI" => $row['NUMAR_TOTAL_SOMERI'],
            "NUMAR_TOTAL_SOMERI_FEMEI" => $row['NUMAR_TOTAL_SOMERI_FEMEI'],
            "NUMAR_TOTAL_SOMERI_BARBATI" => $row['NUMAR_TOTAL_SOMERI_BARBATI'],
            "NUMAR_TOTAL_SOMERI_DIN_MEDIUL_URBAN" => $row['NUMAR_TOTAL_SOMERI_DIN_MEDIUL_URBAN'],
            "NUMAR_SOMERI_FEMEI_DIN_MEDIUL_URBAN" => $row['NUMAR_SOMERI_FEMEI_DIN_MEDIUL_URBAN'],
            "NUMAR_SOMERI_BARBATI_DIN_MEDIUL_URBAN" => $row['NUMAR_SOMERI_BARBATI_DIN_MEDIUL_URBAN'],
            "NUMAR_TOTAL_SOMERI_DIN_MEDIUL_RURAL" => $row['NUMAR_TOTAL_SOMERI_DIN_MEDIUL_RURAL'],
            "NUMAR_SOMERI_FEMEI_DIN_MEDIUL_RURAL" => $row['NUMAR_SOMERI_FEMEI_DIN_MEDIUL_RURAL'],
            "NUMAR_SOMERI_BARBATI_DIN_MEDIUL_RURAL" => $row['NUMAR_SOMERI_BARBATI_DIN_MEDIUL_RURAL'],
            "luna" => $row['luna'],
            "an" => $row['an']
            
        );

        array_push($data_arr["medie_rezidenta"], $data_item);
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
            array("message" => "No data found in medie_rezidenta")
        );
}

?>