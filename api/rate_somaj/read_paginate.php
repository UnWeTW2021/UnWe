<?php
//required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// include database and object files
include_once '../config/database.php';
include_once '../objects/rate_somaj.php';


$database = new Database();
$db = $database->getConnection();

// initialize object
$RateSomaj = new RateSomaj($db);

$stmt = $RateSomaj->readOrderJudet();
$num = $stmt->rowCount();

if ($num > 0) {

    $data_arr = array();
    $data_arr["rate_somaj"] = array();
    $data_arrALL = array();
    $data_arrALL["rate_somaj"] = array();

    if (isset($_GET['page']) && isset($_GET['number'])) {
        $page = $_GET['page'];
        $number = $_GET['number'];
        $index = $number * $page;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // extract row from
            // $row['name'] -> $name
            // extract($row);

            $data_item = array(
                "judet" => $row['JUDET'],
                "TOTAL" => $row['Numar_total_someri'],
                "total_someri_femei" => $row['Numar_total_someri_femei'],
                "total_someri_barbati" => $row['Numar_total_someri_barbati'],
                "Numar_someri_indemnizati" => $row['Numar_someri_indemnizati'],
                "Numar_someri_neindemnizati" => $row['Numar_someri_neindemnizati'],
                "Rata_somajului_" => $row['Rata_somajului_'],
                "Rata_somajului_Feminina_" => $row['Rata_somajului_Feminina_'],
                "Rata_somajului_Masculina_" => $row['Rata_somajului_Masculina_'],
                "luna" => $row['luna'],
                "an" => $row['an']
            );

            array_push($data_arrALL["rate_somaj"], $data_item);

        }
        for ($index; $index < $number * $page + $number; $index++) {
            if ($index < count($data_arrALL['rate_somaj']) && $data_arrALL['rate_somaj'][$index]['judet'] != 'TOTAL') {

                array_push($data_arr['rate_somaj'], $data_arrALL['rate_somaj'][$index - $number]);
            }
        }
        // set response code - 200 OK
        http_response_code(200);
        // show products data in json format
        echo json_encode($data_arr);
    } else {
        // set response code - 404 Not found
        http_response_code(404);

        echo json_encode(
            array("message" => "No data found in rate_somaj")
        );
    }
} else {
    // set response code - 404 Not found
    http_response_code(404);

    echo json_encode(
        array("message" => "No data found in rate_somaj")
    );
}

?>