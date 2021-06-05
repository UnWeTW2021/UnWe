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
        $query = "INSERT INTO " . $this->table_name . " ";

        $stmt = $this->conn->prepare($query);

    //     $query = "INSERT INTO
    //     " . $this->table_name . "
    // SET
    //     name=:name, price=:price, description=:description, category_id=:category_id, created=:created";


        //sanitize
        $this->judet = htmlspecialchars(strip_tags($this->judet));
        $this->TOTAL = htmlspecialchars(strip_tags($this->TOTAL));
        $this->Sub_25_ani = htmlspecialchars(strip_tags($this->Sub_25_ani));
        $this->_25_29_ani = htmlspecialchars(strip_tags($this->_25_29_ani));
        $this->_30_39_ani = htmlspecialchars(strip_tags($this->_30_39_ani));
        $this->_40_49_ani = htmlspecialchars(strip_tags($this->_40_49_ani));
        $this->_50_55_ani = htmlspecialchars(strip_tags($this->_50_55_ani));
        $this->luna = htmlspecialchars(strip_tags($this->luna));
        $this->an = htmlspecialchars(strip_tags($this->an));

        //bind values
        // $stmt->bindParam(":name", $this->name);
        // $stmt->bindParam(":price", $this->price);
        // $stmt->bindParam(":description", $this->description);
        // $stmt->bindParam(":category_id", $this->category_id);
        // $stmt->bindParam(":created", $this->created);

        if($stmt->execute())
        {
            return true;
        }
        return false;
    }


}

?>