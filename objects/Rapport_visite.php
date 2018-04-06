<?php
class Rapport_visite{

    // database connection and table name
    private $conn;
    private $table_name = "rapport_visite";

    // object properties
    public $COL_MATRICULE;
    public $RAP_NUM;
    public $PRA_NUM;
    public $RAP_DATE;
    public $RAP_BILAN;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    public function read(){

      $query = "SELECT * FROM rapport_visite";

      $stmt = $this->conn->prepare($query);
      $stmt->execute();

      return $stmt;
    }

    // create product
    public function create(){

        // query to insert record
        $query = "INSERT INTO rapport_visite(COL_MATRICULE, PRA_NUM, RAP_DATE, RAP_BILAN) VALUES (?,?,?,?)";

        // prepare query
        $stmt = $this->conn->prepare($query);


        // sanitize
        $this->COL_MATRICULE=htmlspecialchars(strip_tags($this->COL_MATRICULE));
        $this->PRA_NUM=htmlspecialchars(strip_tags($this->PRA_NUM));
        $this->RAP_DATE=htmlspecialchars(strip_tags($this->RAP_DATE));
        $this->RAP_BILAN=htmlspecialchars(strip_tags($this->RAP_BILAN));


        // execute query
        if($stmt->execute(array($this->COL_MATRICULE, $this->PRA_NUM, $this->RAP_DATE, $this->RAP_BILAN))){
            return true;
        }

        return false;

    }
}
?>
