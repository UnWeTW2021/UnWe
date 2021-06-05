<?php
class RateSomaj{

    private $conn;
    private $table_name = "rate_somaj";


    public $judet;
    public $TOTAL;
    public $total_someri_femei;
    public $total_someri_barbati;
    public $someri_indemnizati;
    public $someri_neindemnizati;
    public $rata_somajului;
    public $rata_somajului_feminina;
    public $rata_somajului_masculina;
    public $luna;
    public $an;
    public $luna2;
    public $an2;

    public function __construct($db){
        $this->conn = $db;
    }

    function read(){
        //Interogarea
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
            $this->TOTAL += (int)$row['Numar_total_someri'];
            $this->total_someri_femei += (int)$row['Numar_total_someri_femei'];
            $this->total_someri_barbati += (int)$row['Numar_total_someri_barbati'];
            $this->someri_indemnizati += (int)$row['Numar_someri_indemnizati'];
            $this->someri_neindemnizati += (int)$row['Numar_someri_neindemnizati'];
            $this->rata_somajului = $row['Rata_somajului_'];
            $this->rata_somajului_feminina = $row['Rata_somajului_Feminina_'];
            $this->rata_somajului_masculina = $row['Rata_somajului_Masculina_'];
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
            $this->TOTAL += (int)$row['Numar_total_someri'];
            $this->total_someri_femei += (int)$row['Numar_total_someri_femei'];
            $this->total_someri_barbati += (int)$row['Numar_total_someri_barbati'];
            $this->someri_indemnizati += (int)$row['Numar_someri_indemnizati'];
            $this->someri_neindemnizati += (int)$row['Numar_someri_neindemnizati'];
            $this->rata_somajului = $row['Rata_somajului_'];
            $this->rata_somajului_feminina = $row['Rata_somajului_Feminina_'];
            $this->rata_somajului_masculina = $row['Rata_somajului_Masculina_'];
        }
    }else{
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
            $this->TOTAL += (int)$row['Numar_total_someri'];
            $this->total_someri_femei += (int)$row['Numar_total_someri_femei'];
            $this->total_someri_barbati += (int)$row['Numar_total_someri_barbati'];
            $this->someri_indemnizati += (int)$row['Numar_someri_indemnizati'];
            $this->someri_neindemnizati += (int)$row['Numar_someri_neindemnizati'];
            $this->rata_somajului = $row['Rata_somajului_'];
            $this->rata_somajului_feminina = $row['Rata_somajului_Feminina_'];
            $this->rata_somajului_masculina = $row['Rata_somajului_Masculina_'];
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
            $this->TOTAL += (int)$row['Numar_total_someri'];
            $this->total_someri_femei += (int)$row['Numar_total_someri_femei'];
            $this->total_someri_barbati += (int)$row['Numar_total_someri_barbati'];
            $this->someri_indemnizati += (int)$row['Numar_someri_indemnizati'];
            $this->someri_neindemnizati += (int)$row['Numar_someri_neindemnizati'];
            $this->rata_somajului = $row['Rata_somajului_'];
            $this->rata_somajului_feminina = $row['Rata_somajului_Feminina_'];
            $this->rata_somajului_masculina = $row['Rata_somajului_Masculina_'];
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
            $this->TOTAL += (int)$row['Numar_total_someri'];
            $this->total_someri_femei += (int)$row['Numar_total_someri_femei'];
            $this->total_someri_barbati += (int)$row['Numar_total_someri_barbati'];
            $this->someri_indemnizati += (int)$row['Numar_someri_indemnizati'];
            $this->someri_neindemnizati += (int)$row['Numar_someri_neindemnizati'];
            $this->rata_somajului = $row['Rata_somajului_'];
            $this->rata_somajului_feminina = $row['Rata_somajului_Feminina_'];
            $this->rata_somajului_masculina = $row['Rata_somajului_Masculina_'];
        }

    }

    }


    function create(){
        $query = "INSERT INTO
         " . $this->table_name . "
        (judet, Numar_total_someri, Numar_total_someri_femei, Numar_total_someri_barbati, Numar_someri_indemnizati, 
        Numar_someri_neindemnizati, Rata_somajului_, Rata_somajului_Feminina_, Rata_somajului_Masculina_, luna, an)
     VALUES ( :judet, :TOTAL, :total_femei, :total_barbati, :someri_indemnizati, :someri_neindemnizati, 
     :rata_somajului, :rata_feminina, :rata_masculina, :luna, :an )";

        $stmt = $this->conn->prepare($query);

        
        //sanitize
        $this->judet = htmlspecialchars(strip_tags($this->judet));
        $this->TOTAL = htmlspecialchars(strip_tags($this->TOTAL));
        $this->rata_total_femei = htmlspecialchars(strip_tags($this->rata_total_femei));
        $this->rata_total_barbati = htmlspecialchars(strip_tags($this->rata_total_barbati));
        $this->someri_indemnizati = htmlspecialchars(strip_tags($this->someri_indemnizati));
        $this->someri_neindemnizati = htmlspecialchars(strip_tags($this->someri_neindemnizati));
        $this->rata_somajului = htmlspecialchars(strip_tags($this->rata_somajului));
        $this->rata_somajului_feminina = htmlspecialchars(strip_tags($this->rata_somajului_feminina));
        $this->rata_somajului_masculina = htmlspecialchars(strip_tags($this->rata_somajului_masculina));
        $this->luna = htmlspecialchars(strip_tags($this->luna));
        $this->an = htmlspecialchars(strip_tags($this->an));

        //bind values
        $stmt->bindParam(":judet", $this->judet);
        $stmt->bindParam(":TOTAL", $this->TOTAL);
        $stmt->bindParam(":total_femei", $this->rata_total_femei);
        $stmt->bindParam(":total_barbati", $this->rata_total_barbati);
        $stmt->bindParam(":someri_indemnizati", $this->someri_indemnizati);
        $stmt->bindParam(":someri_neindemnizati", $this->someri_neindemnizati);
        $stmt->bindParam(":rata_somajului", $this->rata_somajului);
        $stmt->bindParam(":rata_feminina", $this->rata_somajului_feminina);
        $stmt->bindParam(":rata_masculina", $this->rata_somajului_masculina);
        $stmt->bindParam(":luna", $this->luna);
        $stmt->bindParam(":an", $this->an);

        // echo json_encode(array("message2" => $query));
        if($stmt->execute())
        {
            return true;
        }
        return false;
    }


}

?>