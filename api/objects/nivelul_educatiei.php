<?php 
class NivelulEducatiei{

    private $conn;
    private $table_name = "nivelul_educatiei";

    public $judet;
    public $total;
    public $fara_studii;
    public $invatamant_primar;
    public $invatamant_gimnazial;
    public $invatamant_liceal;
    public $invatamant_postliceal;
    public $invatamant_profesional_arte_si_meserii;
    public $invatamant_universitar;
    public $luna;
    public $luna2;
    public $an;
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
            $this->total = $this->total + $row['Total_someri_din_care'];
            $this->fara_studii = $this->fara_studii + $row['fara_studii'];
            $this->invatamant_primar = $this->invatamant_primar + $row['invatamant_primar'];
            $this->invatamant_gimnazial = $this->invatamant_gimnazial + $row['invatamant_gimnazial'];
            $this->invatamant_liceal = $this->invatamant_liceal + $row['invatamant_liceal'];
            $this->invatamant_postliceal = $this->invatamant_postliceal + $row['invatamant_postliceal'];
            $this->invatamant_profesional_arte_si_meserii +=  $row['invatamant_profesionalarte_si_meserii'];
            $this->invatamant_universitar +=  $row['invatamant_universitar'];
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
                $this->total = $this->total + $row['Total_someri_din_care'];
                $this->fara_studii = $this->fara_studii + $row['fara_studii'];
                $this->invatamant_primar = $this->invatamant_primar + $row['invatamant_primar'];
                $this->invatamant_gimnazial = $this->invatamant_gimnazial + $row['invatamant_gimnazial'];
                $this->invatamant_liceal = $this->invatamant_liceal + $row['invatamant_liceal'];
                $this->invatamant_postliceal = $this->invatamant_postliceal + $row['invatamant_postliceal'];
                $this->invatamant_profesional_arte_si_meserii +=  $row['invatamant_profesionalarte_si_meserii'];
                $this->invatamant_universitar +=  $row['invatamant_universitar'];
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
            $this->total = $this->total + $row['Total_someri_din_care'];
            $this->fara_studii = $this->fara_studii + $row['fara_studii'];
            $this->invatamant_primar = $this->invatamant_primar + $row['invatamant_primar'];
            $this->invatamant_gimnazial = $this->invatamant_gimnazial + $row['invatamant_gimnazial'];
            $this->invatamant_liceal = $this->invatamant_liceal + $row['invatamant_liceal'];
            $this->invatamant_postliceal = $this->invatamant_postliceal + $row['invatamant_postliceal'];
            $this->invatamant_profesional_arte_si_meserii +=  $row['invatamant_profesionalarte_si_meserii'];
            $this->invatamant_universitar +=  $row['invatamant_universitar'];
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
            $this->total = $this->total + $row['Total_someri_din_care'];
            $this->fara_studii = $this->fara_studii + $row['fara_studii'];
            $this->invatamant_primar = $this->invatamant_primar + $row['invatamant_primar'];
            $this->invatamant_gimnazial = $this->invatamant_gimnazial + $row['invatamant_gimnazial'];
            $this->invatamant_liceal = $this->invatamant_liceal + $row['invatamant_liceal'];
            $this->invatamant_postliceal = $this->invatamant_postliceal + $row['invatamant_postliceal'];
            $this->invatamant_profesional_arte_si_meserii +=  $row['invatamant_profesionalarte_si_meserii'];
            $this->invatamant_universitar +=  $row['invatamant_universitar'];
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
            $this->total = $this->total + $row['Total_someri_din_care'];
            $this->fara_studii = $this->fara_studii + $row['fara_studii'];
            $this->invatamant_primar = $this->invatamant_primar + $row['invatamant_primar'];
            $this->invatamant_gimnazial = $this->invatamant_gimnazial + $row['invatamant_gimnazial'];
            $this->invatamant_liceal = $this->invatamant_liceal + $row['invatamant_liceal'];
            $this->invatamant_postliceal = $this->invatamant_postliceal + $row['invatamant_postliceal'];
            $this->invatamant_profesional_arte_si_meserii +=  $row['invatamant_profesionalarte_si_meserii'];
            $this->invatamant_universitar +=  $row['invatamant_universitar'];
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