<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include_once '../database_api.php';
include_once '../entries_api.php';
$database = new Database();

$db        = $database->getConnection();
$items     = new Entries($db);
$records   = $items->getEntries();
$itemCount = $records->num_rows;
echo json_encode($itemCount);

if($itemCount > 0){
$entriesArr              = array();
$entriesArr["body"]      = array();
$entriesArr["itemCount"] = $itemCount;
while ($row = $records->fetch_assoc())
{
array_push($entriesArr["body"], $row);
}
echo json_encode($entriesArr);
}
else{
http_response_code(404);
echo json_encode(
array("message" => "No record found.")
);
}
?>