<?php
//required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// include database and object files
include_once '../config/database.php';
include_once '../objects/nivelul_educatiei.php';



$database = new Database();
$db = $database->getConnection();

// initialize object
$NivelulEducatiei = new NivelulEducatiei($db);

$stmt = $NivelulEducatiei->readOrderJudet();
$num = $stmt->rowCount();

if($num > 0){

    $data_arr = array();
    $data_arr["nivelul_educatiei"] = array();
    $data_arrALL = array();
    $data_arrALL['nivelul_educatiei'] = array();


    if (isset($_GET['page']) && isset($_GET['number'])) {
        $page = $_GET['page'];
        $number = $_GET['number'];
        $index = $number * $page;
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row from
        // $row['name'] -> $name
        // extract($row);

        $data_item = array(
            "JUDET" => $row['JUDET'],
            "TOTAL" => $row['Total_someri_din_care'],
            "fara_studii" => $row['fara_studii'],
            "invatamant_primar" => $row['invatamant_primar'],
            "invatamant_gimnazial" => $row['invatamant_gimnazial'],
            "invatamant_liceal" => $row['invatamant_liceal'],
            "invatamant_postliceal" => $row['invatamant_postliceal'],
            "invatamant_profesional_arte_si_meserii" => $row['invatamant_profesionalarte_si_meserii'],
            "invatamant_universitar" => $row['invatamant_universitar'],
            "luna" => $row['luna'],
            "an" => $row['an']
        );

        array_push($data_arrALL["nivelul_educatiei"], $data_item);
    }

        for ( $index ; $index < $number*$page+$number ; $index++)
        {
            if($index<count($data_arrALL['nivelul_educatiei']) && $data_arrALL['nivelul_educatiei'][$index]['JUDET']!='TOTAL') {

                array_push($data_arr['nivelul_educatiei'], $data_arrALL['nivelul_educatiei'][$index-$number]);
            }
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
        array("message" => "No data found in nivelul_educatiei")
    );
}
}else{
    // set response code - 404 Not found
    http_response_code(404);

    echo json_encode(
        array("message" => "No data found in nivelul_educatiei")
    );
}
?>