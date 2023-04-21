<?php
require 'checker.php';
?> 
<!DOCTYPE html>
<html>
  <?php 
  $title = 'Home | Rodelio B. Domingo';
    include 'header.php';
  ?>
<body>
  <?php 
    include 'navigation.php';
    include 'my_cv.php';
  ?>
</body>
</html>
<script>
  let allImages = document.querySelectorAll("img");
allImages.forEach((value)=>{
    value.oncontextmenu = (e)=>{
        e.preventDefault();
    }
})
</script>