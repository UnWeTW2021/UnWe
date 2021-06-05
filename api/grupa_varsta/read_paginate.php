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

$stmt = $GrupaVarsta->readOrderJudet();
$num = $stmt->rowCount();

if($num > 0){

    $data_arr = array();
    $data_arr["grupa_varsta"] = array();
    $data_arr['results']=$num;

    $data_arrALL=array();
    $data_arrALL['grupa_varsta']=array();
if(isset($_GET['page']) && isset($_GET['number']))
{
    $page =$_GET['page'];
    $number=$_GET['number'];
    $index=$number*$page;

    while(($row = $stmt->fetch(PDO::FETCH_ASSOC))){
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
            "peste_55_ani" =>$row['peste_55_ani'],
            "luna" => $row['luna'],
            "an" => $row['an']
        );
//print_r($data_item);
        array_push($data_arrALL["grupa_varsta"], $data_item);

    }


    for ( $index ; $index < $number*$page+$number ; $index++)
    {
        if($index<count($data_arrALL['grupa_varsta']) ) {

            array_push($data_arr['grupa_varsta'], $data_arrALL['grupa_varsta'][$index-$number]);
        }
    }
    // set response code - 200 OK
    http_response_code(200);
    // show products data in json format
    echo json_encode($data_arr);
}else{
    // set response code - 404 Not found
    http_response_code(404);

    echo json_encode(
        array("message" => "No data found in grupa_varsta")
    );
}


}
else{
    // set response code - 404 Not found
    http_response_code(404);

    echo json_encode(
        array("message" => "No data found in grupa_varsta")
    );
}

?>