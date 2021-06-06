<?php
class MedieRezidenta{
    
    private $conn;
    private $table_name = "medie_rezidenta";

    public $judet;
    public $TOTAL;
    public $TOTAL_SOMERI_FEMEI;
    public $TOTAL_SOMERI_BARBATI;
    public $TOTAL_SOMERI_DIN_MEDIUL_URBAN;
    public $SOMERI_FEMEI_DIN_MEDIUL_URBAN;
    public $SOMERI_BARBATI_DIN_MEDIUL_URBAN;
    public $TOTAL_SOMERI_DIN_MEDIUL_RURAL;
    public $SOMERI_FEMEI_DIN_MEDIUL_RURAL;
    public $SOMERI_BARBATI_DIN_MEDIUL_RURAL;
    public $luna;
    public $an;
    public $luna2;
    public $an2;

    public function __construct($db){
        $this->conn = $db;
    }

    function read(){
        $query = "SELECT 
                        *
                FROM
                " . $this->table_name . "";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    function readOrderJudet(){
        //Interogarea
        $query = "SELECT 
                        *
                FROM
                " . $this->table_name . " order by judet";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
    function readOne(){
        //in functie de judet
        $query = "SELECT
            *
        FROM
        " . $this->table_name . " 
        WHERE
         judet = UPPER(?)";

        $stmt = $this->conn->prepare( $query );

        $stmt->bindParam(1, $this->judet);

        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $this->TOTAL = $this->TOTAL + $row['NUMAR_TOTAL_SOMERI'];
            $this->TOTAL_SOMERI_FEMEI = $this->TOTAL_SOMERI_FEMEI + $row['NUMAR_TOTAL_SOMERI_FEMEI'];
            $this->TOTAL_SOMERI_BARBATI = $this->TOTAL_SOMERI_BARBATI + $row['NUMAR_TOTAL_SOMERI_BARBATI'];
            $this->TOTAL_SOMERI_DIN_MEDIUL_URBAN = $this->TOTAL_SOMERI_DIN_MEDIUL_URBAN + $row['NUMAR_TOTAL_SOMERI_DIN_MEDIUL_URBAN'];
            $this->SOMERI_FEMEI_DIN_MEDIUL_URBAN = $this->SOMERI_FEMEI_DIN_MEDIUL_URBAN + $row['NUMAR_SOMERI_FEMEI_DIN_MEDIUL_URBAN'];
            $this->SOMERI_BARBATI_DIN_MEDIUL_URBAN = $this->SOMERI_BARBATI_DIN_MEDIUL_URBAN + $row['NUMAR_SOMERI_BARBATI_DIN_MEDIUL_URBAN'];
            $this->TOTAL_SOMERI_DIN_MEDIUL_RURAL = $this->TOTAL_SOMERI_DIN_MEDIUL_RURAL + $row['NUMAR_TOTAL_SOMERI_DIN_MEDIUL_RURAL'];
            $this->SOMERI_FEMEI_DIN_MEDIUL_RURAL = $this->SOMERI_FEMEI_DIN_MEDIUL_RURAL + $row['NUMAR_SOMERI_FEMEI_DIN_MEDIUL_RURAL'];
            $this->SOMERI_BARBATI_DIN_MEDIUL_RURAL = $this->SOMERI_BARBATI_DIN_MEDIUL_RURAL + $row['NUMAR_SOMERI_BARBATI_DIN_MEDIUL_RURAL'];
        }

    }

    function readLuna(){

        if($this->an == $this->an2){
            $query = "SELECT 
        * 
        FROM 
        " . $this->table_name . "
        WHERE
            judet = UPPER(:judet) &&
             luna >= :luna &&
            luna <= :luna2 &&
            an = :an
        ";

        $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":judet", $this->judet);
            $stmt->bindParam(":luna", $this->luna);
            $stmt->bindParam(":luna2", $this->luna2);
            $stmt->bindParam(":an", $this->an);
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $this->TOTAL = $this->TOTAL + $row['NUMAR_TOTAL_SOMERI'];
                $this->TOTAL_SOMERI_FEMEI = $this->TOTAL_SOMERI_FEMEI + $row['NUMAR_TOTAL_SOMERI_FEMEI'];
                $this->TOTAL_SOMERI_BARBATI = $this->TOTAL_SOMERI_BARBATI + $row['NUMAR_TOTAL_SOMERI_BARBATI'];
                $this->TOTAL_SOMERI_DIN_MEDIUL_URBAN = $this->TOTAL_SOMERI_DIN_MEDIUL_URBAN + $row['NUMAR_TOTAL_SOMERI_DIN_MEDIUL_URBAN'];
                $this->SOMERI_FEMEI_DIN_MEDIUL_URBAN = $this->SOMERI_FEMEI_DIN_MEDIUL_URBAN + $row['NUMAR_SOMERI_FEMEI_DIN_MEDIUL_URBAN'];
                $this->SOMERI_BARBATI_DIN_MEDIUL_URBAN = $this->SOMERI_BARBATI_DIN_MEDIUL_URBAN + $row['NUMAR_SOMERI_BARBATI_DIN_MEDIUL_URBAN'];
                $this->TOTAL_SOMERI_DIN_MEDIUL_RURAL = $this->TOTAL_SOMERI_DIN_MEDIUL_RURAL + $row['NUMAR_TOTAL_SOMERI_DIN_MEDIUL_RURAL'];
                $this->SOMERI_FEMEI_DIN_MEDIUL_RURAL = $this->SOMERI_FEMEI_DIN_MEDIUL_RURAL + $row['NUMAR_SOMERI_FEMEI_DIN_MEDIUL_RURAL'];
                $this->SOMERI_BARBATI_DIN_MEDIUL_RURAL = $this->SOMERI_BARBATI_DIN_MEDIUL_RURAL + $row['NUMAR_SOMERI_BARBATI_DIN_MEDIUL_RURAL'];
            }
        
        }
        else{
            $query = "SELECT 
        * 
        FROM 
        " . $this->table_name . "
        WHERE
            judet = UPPER(:judet) &&
             luna >= :luna &&
            an = :an
        ";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":judet", $this->judet);
        $stmt->bindParam(":luna", $this->luna);
        $stmt->bindParam(":an", $this->an);

        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $this->TOTAL = $this->TOTAL + $row['NUMAR_TOTAL_SOMERI'];
            $this->TOTAL_SOMERI_FEMEI = $this->TOTAL_SOMERI_FEMEI + $row['NUMAR_TOTAL_SOMERI_FEMEI'];
            $this->TOTAL_SOMERI_BARBATI = $this->TOTAL_SOMERI_BARBATI + $row['NUMAR_TOTAL_SOMERI_BARBATI'];
            $this->TOTAL_SOMERI_DIN_MEDIUL_URBAN = $this->TOTAL_SOMERI_DIN_MEDIUL_URBAN + $row['NUMAR_TOTAL_SOMERI_DIN_MEDIUL_URBAN'];
            $this->SOMERI_FEMEI_DIN_MEDIUL_URBAN = $this->SOMERI_FEMEI_DIN_MEDIUL_URBAN + $row['NUMAR_SOMERI_FEMEI_DIN_MEDIUL_URBAN'];
            $this->SOMERI_BARBATI_DIN_MEDIUL_URBAN = $this->SOMERI_BARBATI_DIN_MEDIUL_URBAN + $row['NUMAR_SOMERI_BARBATI_DIN_MEDIUL_URBAN'];
            $this->TOTAL_SOMERI_DIN_MEDIUL_RURAL = $this->TOTAL_SOMERI_DIN_MEDIUL_RURAL + $row['NUMAR_TOTAL_SOMERI_DIN_MEDIUL_RURAL'];
            $this->SOMERI_FEMEI_DIN_MEDIUL_RURAL = $this->SOMERI_FEMEI_DIN_MEDIUL_RURAL + $row['NUMAR_SOMERI_FEMEI_DIN_MEDIUL_RURAL'];
            $this->SOMERI_BARBATI_DIN_MEDIUL_RURAL = $this->SOMERI_BARBATI_DIN_MEDIUL_RURAL + $row['NUMAR_SOMERI_BARBATI_DIN_MEDIUL_RURAL'];
        }

        $query = "SELECT 
        * 
        FROM 
        " . $this->table_name . "
        WHERE
            judet = UPPER(:judet) &&
             luna <= :luna &&
            an = :an
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":judet", $this->judet);
        $stmt->bindParam(":luna", $this->luna2);
        $stmt->bindParam(":an", $this->an2);

        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $this->TOTAL = $this->TOTAL + $row['NUMAR_TOTAL_SOMERI'];
            $this->TOTAL_SOMERI_FEMEI = $this->TOTAL_SOMERI_FEMEI + $row['NUMAR_TOTAL_SOMERI_FEMEI'];
            $this->TOTAL_SOMERI_BARBATI = $this->TOTAL_SOMERI_BARBATI + $row['NUMAR_TOTAL_SOMERI_BARBATI'];
            $this->TOTAL_SOMERI_DIN_MEDIUL_URBAN = $this->TOTAL_SOMERI_DIN_MEDIUL_URBAN + $row['NUMAR_TOTAL_SOMERI_DIN_MEDIUL_URBAN'];
            $this->SOMERI_FEMEI_DIN_MEDIUL_URBAN = $this->SOMERI_FEMEI_DIN_MEDIUL_URBAN + $row['NUMAR_SOMERI_FEMEI_DIN_MEDIUL_URBAN'];
            $this->SOMERI_BARBATI_DIN_MEDIUL_URBAN = $this->SOMERI_BARBATI_DIN_MEDIUL_URBAN + $row['NUMAR_SOMERI_BARBATI_DIN_MEDIUL_URBAN'];
            $this->TOTAL_SOMERI_DIN_MEDIUL_RURAL = $this->TOTAL_SOMERI_DIN_MEDIUL_RURAL + $row['NUMAR_TOTAL_SOMERI_DIN_MEDIUL_RURAL'];
            $this->SOMERI_FEMEI_DIN_MEDIUL_RURAL = $this->SOMERI_FEMEI_DIN_MEDIUL_RURAL + $row['NUMAR_SOMERI_FEMEI_DIN_MEDIUL_RURAL'];
            $this->SOMERI_BARBATI_DIN_MEDIUL_RURAL = $this->SOMERI_BARBATI_DIN_MEDIUL_RURAL + $row['NUMAR_SOMERI_BARBATI_DIN_MEDIUL_RURAL'];
        }

        $query = "SELECT 
        * 
        FROM 
        " . $this->table_name . "
        WHERE
            judet = UPPER(:judet) &&
            an > :an1 &&
            an < :an2
        ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":judet", $this->judet);
        $stmt->bindParam(":an1", $this->an);
        $stmt->bindParam(":an2", $this->an2);

        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $this->TOTAL = $this->TOTAL + $row['NUMAR_TOTAL_SOMERI'];
            $this->TOTAL_SOMERI_FEMEI = $this->TOTAL_SOMERI_FEMEI + $row['NUMAR_TOTAL_SOMERI_FEMEI'];
            $this->TOTAL_SOMERI_BARBATI = $this->TOTAL_SOMERI_BARBATI + $row['NUMAR_TOTAL_SOMERI_BARBATI'];
            $this->TOTAL_SOMERI_DIN_MEDIUL_URBAN = $this->TOTAL_SOMERI_DIN_MEDIUL_URBAN + $row['NUMAR_TOTAL_SOMERI_DIN_MEDIUL_URBAN'];
            $this->SOMERI_FEMEI_DIN_MEDIUL_URBAN = $this->SOMERI_FEMEI_DIN_MEDIUL_URBAN + $row['NUMAR_SOMERI_FEMEI_DIN_MEDIUL_URBAN'];
            $this->SOMERI_BARBATI_DIN_MEDIUL_URBAN = $this->SOMERI_BARBATI_DIN_MEDIUL_URBAN + $row['NUMAR_SOMERI_BARBATI_DIN_MEDIUL_URBAN'];
            $this->TOTAL_SOMERI_DIN_MEDIUL_RURAL = $this->TOTAL_SOMERI_DIN_MEDIUL_RURAL + $row['NUMAR_TOTAL_SOMERI_DIN_MEDIUL_RURAL'];
            $this->SOMERI_FEMEI_DIN_MEDIUL_RURAL = $this->SOMERI_FEMEI_DIN_MEDIUL_RURAL + $row['NUMAR_SOMERI_FEMEI_DIN_MEDIUL_RURAL'];
            $this->SOMERI_BARBATI_DIN_MEDIUL_RURAL = $this->SOMERI_BARBATI_DIN_MEDIUL_RURAL + $row['NUMAR_SOMERI_BARBATI_DIN_MEDIUL_RURAL'];
        }



        }
    }

    function create(){
        $query = "INSERT INTO
         " . $this->table_name . "
        (judet, NUMAR_TOTAL_SOMERI, NUMAR_TOTAL_SOMERI_FEMEI, NUMAR_TOTAL_SOMERI_BARBATI, NUMAR_TOTAL_SOMERI_DIN_MEDIUL_URBAN,
        NUMAR_SOMERI_FEMEI_DIN_MEDIUL_URBAN, NUMAR_SOMERI_BARBATI_DIN_MEDIUL_URBAN, NUMAR_TOTAL_SOMERI_DIN_MEDIUL_RURAL, 
        NUMAR_SOMERI_FEMEI_DIN_MEDIUL_RURAL, NUMAR_SOMERI_BARBATI_DIN_MEDIUL_RURAL, luna, an)
     VALUES ( :judet, :TOTAL, :SOMERI_FEMEI, :SOMERI_BARBATI, :TOTAL_URBAN, :FEMEI_URBAN, :BARBATI_URBAN, 
     :TOTAL_RURAL, :FEMEI_RURAL, :BARBATI_RURAL, :luna, :an )";

        $stmt = $this->conn->prepare($query);

        
        //sanitize
        $this->judet = htmlspecialchars(strip_tags($this->judet));
        $this->TOTAL = htmlspecialchars(strip_tags($this->TOTAL));
        $this->TOTAL_SOMERI_FEMEI = htmlspecialchars(strip_tags($this->TOTAL_SOMERI_FEMEI));
        $this->TOTAL_SOMERI_BARBATI = htmlspecialchars(strip_tags($this->TOTAL_SOMERI_BARBATI));
        $this->TOTAL_SOMERI_DIN_MEDIUL_URBAN = htmlspecialchars(strip_tags($this->TOTAL_SOMERI_DIN_MEDIUL_URBAN));
        $this->SOMERI_FEMEI_DIN_MEDIUL_URBAN = htmlspecialchars(strip_tags($this->SOMERI_FEMEI_DIN_MEDIUL_URBAN));
        $this->SOMERI_BARBATI_DIN_MEDIUL_URBAN = htmlspecialchars(strip_tags($this->SOMERI_BARBATI_DIN_MEDIUL_URBAN));
        $this->TOTAL_SOMERI_DIN_MEDIUL_RURAL = htmlspecialchars(strip_tags($this->TOTAL_SOMERI_DIN_MEDIUL_RURAL));
        $this->SOMERI_FEMEI_DIN_MEDIUL_RURAL = htmlspecialchars(strip_tags($this->SOMERI_FEMEI_DIN_MEDIUL_RURAL));
        $this->SOMERI_BARBATI_DIN_MEDIUL_RURAL = htmlspecialchars(strip_tags($this->SOMERI_BARBATI_DIN_MEDIUL_RURAL));
        $this->luna = htmlspecialchars(strip_tags($this->luna));
        $this->an = htmlspecialchars(strip_tags($this->an));

        //bind values
        $stmt->bindParam(":judet", $this->judet);
        $stmt->bindParam(":TOTAL", $this->TOTAL);
        $stmt->bindParam(":SOMERI_FEMEI", $this->TOTAL_SOMERI_FEMEI);
        $stmt->bindParam(":SOMERI_BARBATI", $this->TOTAL_SOMERI_BARBATI);
        $stmt->bindParam(":TOTAL_URBAN", $this->TOTAL_SOMERI_DIN_MEDIUL_URBAN);
        $stmt->bindParam(":FEMEI_URBAN", $this->SOMERI_FEMEI_DIN_MEDIUL_URBAN);
        $stmt->bindParam(":BARBATI_URBAN", $this->SOMERI_BARBATI_DIN_MEDIUL_URBAN);
        $stmt->bindParam(":TOTAL_RURAL", $this->TOTAL_SOMERI_DIN_MEDIUL_RURAL);
        $stmt->bindParam(":FEMEI_RURAL", $this->SOMERI_FEMEI_DIN_MEDIUL_RURAL);
        $stmt->bindParam(":BARBATI_RURAL", $this->SOMERI_BARBATI_DIN_MEDIUL_RURAL);
        $stmt->bindParam(":luna", $this->luna);
        $stmt->bindParam(":an", $this->an);

        // echo json_encode(array("message2" => $query));
        if($stmt->execute())
        {
            return true;
        }
        return false;
    }


    function delete(){
  
        // delete query
        $query = "DELETE FROM " . $this->table_name . " 
        WHERE judet = UPPER(?) AND an = ? AND luna = ?";
      
        // prepare query
        $stmt = $this->conn->prepare($query);
      
        // sanitize
        $this->judet=htmlspecialchars(strip_tags($this->judet));
        $this->luna=htmlspecialchars(strip_tags($this->luna));
        $this->an=htmlspecialchars(strip_tags($this->an));
      
        // bind id of record to delete
        $stmt->bindParam(1, $this->judet);
        $stmt->bindParam(2, $this->an);
        $stmt->bindParam(3, $this->luna);
      
        // echo json_encode($stmt);

        if($stmt->execute()){
            return true;
        }
      
        return false;
    }


}


