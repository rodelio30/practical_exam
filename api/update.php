<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../database_api.php';
include_once '../entries_api.php';

$database = new Database();
$db = $database->getConnection();
$item = new Entries($db);

$item->id             = isset($_GET['id']) ? $_GET['id'] : die();
$item->name           = $_GET['name'];
$item->description    = $_GET['description'];
$item->reason         = $_GET['reason'];
$item->target_date    = $_GET['target_date'];
$item->completed_date = $_GET['completed_date'];
if($item->updateEntries()){
echo json_encode("Entries data updated.");
} else{
echo json_encode("Data could not be updated");
}
?>