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

    public function create(){

      $query = "INSERT INTO rapport_visite VALUES(?,?,?,?,?)";

      $stmt = $this->conn->prepare($query);
      $stmt->execute(array($COL_MATRICULE,$RAP_NUM,$PRA_NUM,$RAP_DATE,$RAP_BILAN));

      return $stmt;
    }
}
?>
