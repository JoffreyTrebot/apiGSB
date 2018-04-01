<?php
class Praticien{

    // database connection and table name
    private $conn;
    private $table_name = "praticien";

    // object properties
    public $PRA_NUM;
    public $PRA_NOM;
    public $PRA_PRENOM;
    public $PRA_ADRESSE;
    public $PRA_CP;
    public $PRA_VILLE;
    public $PRA_COEFNOTORIETE;
    public $TYP_CODE;
    public $dep;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    public function read(){

      $query = "SELECT * FROM praticien";

      $stmt = $this->conn->prepare($query);
      $stmt->execute();

      return $stmt;
    }

    public function readDep(){

      $query = "SELECT DISTINCT(dep) FROM praticien ORDER BY 1";

      $stmt = $this->conn->prepare($query);
      $stmt->execute();

      return $stmt;
    }
}
?>
