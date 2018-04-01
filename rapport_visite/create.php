<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../objects/Rapport_visite.php';

$database = new Database();
$db = $database->getConnection();

$rapportvisite = new Rapport_visite($db);

// get posted data
$data = json_decode(file_get_contents("php://input"));

// set product property values
$rapportvisite->COL_MATRICULE = $data->COL_MATRICULE;
$rapportvisite->PRA_NUM = $data->PRA_NUM;
$rapportvisite->RAP_DATE = date('Y-m-d H:i:s');
$rapportvisite->RAP_BILAN = $data->RAP_BILAN;

// create the product
if($rapportvisite->create()){
    echo '{';
        echo '"message": "Rapport de visite créer."';
    echo '}';
}

// if unable to create the product, tell the user
else{
    echo '{';
        echo '"message": "Impossible de créer le rapport de visite."';
    echo '}';
}
?>
