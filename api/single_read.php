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
$item->getSingleEntries();
if($item->name != null){

// create array
$emp_arr = array(
"id"             => $item->id,
"name"           => $item->name,
"description"    => $item->description,
"reason"         => $item->reason,
"target_date"    => $item->target_date,
"completed_date" => $item->completed_date
);

http_response_code(200);
echo json_encode($emp_arr);
}
else{
http_response_code(404);
echo json_encode("Entries not found.");
}
?>