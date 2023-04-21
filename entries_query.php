<?php 
include 'config.php';
if (isset($_POST['submit'])) {
  $name           = $_POST['name'];
  $description    = $_POST['description'];
  $reason         = $_POST['reason'];
  $target_date    = $_POST['target_date'];
  $completed_date = $_POST['completed_date'];

  $query = "INSERT INTO entries VALUES('','$name','$description','$reason','$target_date','$completed_date')";
  mysqli_query($conn, $query);
  echo '<script type="text/javascript"> alert("' . $name . ' Added!.")</script>';
  header("Refresh:0; url=objectives.php");
}

if (isset($_POST['update'])) {
  $entry_id       = $_POST['id'];
  $name           = $_POST['name'];
  $description    = $_POST['description'];
  $reason         = $_POST['reason'];
  $target_date    = $_POST['target_date'];
  $completed_date = $_POST['completed_date'];

  mysqli_query($conn, "update entries set name = '$name', description = '$description', reason = '$reason', target_date = '$target_date', completed_date = '$completed_date' where id = '$entry_id'") or die("Query 4 is incorrect....");

  echo '<script type="text/javascript"> alert("' . $name . ' Updated!.")</script>';
  header("Refresh:0; url=objectives.php");
}

if (isset($_POST['delete'])) {
  $entry_id       = $_POST['id'];

  mysqli_query($conn, "DELETE FROM entries WHERE id = '$entry_id'") or die("Query 4 is incorrect....");

  echo '<script type="text/javascript"> alert("Entry Deleted!.")</script>';
  header("Refresh:0; url=objectives.php");
}
?>