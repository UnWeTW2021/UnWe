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
        $query = "INSERT INTO
         " . $this->table_name . "
        (judet, Total_someri_din_care, fara_studii, invatamant_primar, invatamant_gimnazial, 
        invatamant_liceal, invatamant_postliceal, invatamant_profesionalarte_si_meserii, invatamant_universitar, luna, an)
     VALUES ( :judet, :TOTAL, :fara_studii, :invatamant_primar, :invatamant_gimnazial, :invatamant_liceal, :invatamant_postliceal, 
     :invatamant_profesional, :invatamant_universitar, :luna, :an )";

        $stmt = $this->conn->prepare($query);

        
        //sanitize
        $this->judet = htmlspecialchars(strip_tags($this->judet));
        $this->TOTAL = htmlspecialchars(strip_tags($this->TOTAL));
        $this->fara_studii = htmlspecialchars(strip_tags($this->fara_studii));
        $this->invatamant_primar = htmlspecialchars(strip_tags($this->invatamant_primar));
        $this->invatamant_gimnazial = htmlspecialchars(strip_tags($this->invatamant_gimnazial));
        $this->invatamant_liceal = htmlspecialchars(strip_tags($this->invatamant_liceal));
        $this->invatamant_postliceal = htmlspecialchars(strip_tags($this->invatamant_postliceal));
        $this->invatamant_profesional_arte_si_meserii = htmlspecialchars(strip_tags($this->invatamant_profesional_arte_si_meserii));
        $this->invatamant_universitar = htmlspecialchars(strip_tags($this->invatamant_universitar));
        $this->luna = htmlspecialchars(strip_tags($this->luna));
        $this->an = htmlspecialchars(strip_tags($this->an));

        //bind values
        $stmt->bindParam(":judet", $this->judet);
        $stmt->bindParam(":TOTAL", $this->TOTAL);
        $stmt->bindParam(":fara_studii", $this->fara_studii);
        $stmt->bindParam(":invatamant_primar", $this->invatamant_primar);
        $stmt->bindParam(":invatamant_gimnazial", $this->invatamant_gimnazial);
        $stmt->bindParam(":invatamant_liceal", $this->invatamant_liceal);
        $stmt->bindParam(":invatamant_postliceal", $this->invatamant_postliceal);
        $stmt->bindParam(":invatamant_profesional", $this->invatamant_profesional_arte_si_meserii);
        $stmt->bindParam(":invatamant_universitar", $this->invatamant_universitar);
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