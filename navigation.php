<div class="topnav" id="myTopnav">
<div class="container">
  <a href="index.php" class="active">Home</a>
  <a href="objectives.php">Carreer Objectives</a>
  <?php 
    if(!empty($_SESSION["id"])){
  ?>
  <a href="logout.php" class="split">Log out</a>
  <?php }?>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>