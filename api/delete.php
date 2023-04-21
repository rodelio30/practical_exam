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

$item->id = isset($_GET['id']) ? $_GET['id'] : die();

if($item->deleteEntries()){
echo json_encode("Entries deleted.");
} else{
echo json_encode("Data could not be deleted");
}
?>