<?php
class Entries{
// dbection
private $db;
// Table
private $db_table = "entries";
// Columns
public $id;
public $name;
public $description;
public $reason;
public $target_date;
public $completed_date;
public $result;


// Db dbection
public function __construct($db){
$this->db = $db;
}

// GET ALL
public function getEntries(){
$sqlQuery = "SELECT id, name, description, reason, target_date, completed_date FROM " . $this->db_table . "";
$this->result = $this->db->query($sqlQuery);
return $this->result;
}

// CREATE
public function createEntries(){
// sanitize
$this->name=htmlspecialchars(strip_tags($this->name));
$this->description=htmlspecialchars(strip_tags($this->description));
$this->reason=htmlspecialchars(strip_tags($this->reason));
$this->target_date=htmlspecialchars(strip_tags($this->target_date));
$sqlQuery = "INSERT INTO
". $this->db_table ." SET name = '".$this->name."',
description = '".$this->description."',
reason = '".$this->reason."',target_date = '".$this->target_date."', completed_date = '".$this->completed_date."'";
$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// UPDATE
public function getSingleEntries(){
$sqlQuery = "SELECT id, name, description, reason, target_date, completed_date FROM
". $this->db_table ." WHERE id = ".$this->id;
$record = $this->db->query($sqlQuery);
$dataRow=$record->fetch_assoc();
$this->name = $dataRow['name'];
$this->description = $dataRow['description'];
$this->reason = $dataRow['reason'];
$this->target_date = $dataRow['target_date'];
$this->completed_date = $dataRow['completed_date'];
}

// UPDATE
public function updateEntries(){
$this->name=htmlspecialchars(strip_tags($this->name));
$this->description=htmlspecialchars(strip_tags($this->description));
$this->reason=htmlspecialchars(strip_tags($this->reason));
$this->target_date=htmlspecialchars(strip_tags($this->target_date));
$this->completed_date=htmlspecialchars(strip_tags($this->completed_date));
$this->id=htmlspecialchars(strip_tags($this->id));

$sqlQuery = "UPDATE ". $this->db_table ." SET name = '".$this->name."',
description = '".$this->description."',
reason = '".$this->reason."',
target_date = '".$this->target_date."',
completed_date = '".$this->completed_date."'
WHERE id = ".$this->id;

$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// DELETE
function deleteEntries(){
$sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ".$this->id;
$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}
}
?>