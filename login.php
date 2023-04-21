<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php 
  $title = 'Log in';
  include 'header.php';
  ?>
  <body>
   <?php 
    include 'navigation.php';
   ?> 
    <main class="d-flex w-100 mt-5">
      <div class="container d-flex flex-column">
          <div class="row mt-2">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
              <div class="d-table-cell align-middle">
                <div class="card">
                  <div class="card-body">
                    <div class="m-sm-4">
                      <form method="post" autocomplete="off">
                          <div class="mb-3">
                              <label class="form-label">Email or Username</label>
                              <input class="form-control form-control-lg" type="text" name="usernameemail"
                                  placeholder="Enter your Email or Username" autofocus />
                          </div>
                          <div class="mb-3">
                              <label class="form-label">Password</label>
                              <input class="form-control form-control-lg" type="password" name="password"
                                  placeholder="Enter your password" />
                          </div>
                          <div class="text-center mt-4">
                                <button type="submit" name="submit"
                                    class="btn btn-md btn-outline-success">Sign in</button>
                              </div>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
