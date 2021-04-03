<?php
if (isset($_POST['submitLogin'])) { //if the button named su...p do the script
  $username = $_POST['userEmail'];
  $pwd = $_POST['pwd'];
   require_once "../app/database/dbh-process.php";
   require_once"function-process.php";

//Error handling
if(empyInputsLogin($username,$pwd) !== false) {
  header("location:../login.php?error=emptyinput");//sent the user to signup
  //with the slug emptyinput tht wi will use to display a massage .
  exit();// stop the script for running
}
loginUser($conn, $username,$pwd);
}
else {
    header("location:../login.php?sucess");
}
