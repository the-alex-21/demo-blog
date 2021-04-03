
<?php
if (isset($_POST['submitSignup'])) { //if the button named su...p do the script
$name = $_POST['nameUs'];
$email = $_POST['email'];
$username = $_POST['uid'];
$pwd = $_POST['pwd'];
$pwdrepeat = $_POST['pwdrepeat'];
$userstype = "user";

require_once "../app/database/dbh-process.php";
//This fale has a bunch of funchion that chec if the user has mede a mistake
require_once"function-process.php";

//This is a function that check if the user has write in all the inputs

if(empyInputsSignup($name,$email,$username,$pwd,$pwdrepeat) !== false) {
  header("location:../signup.php?error=emptyinput");//sent the user to signup
  //with the slug emptyinput tht wi will use to display a massage .

  exit();// stop the script for running
}


if(invalidUid($username) !== false) {// check if the user has a valid username
  header("location:../signup.php?error=invaliduid");
  exit();// stop the script for running
}

if(invaliemail($email) !== false) {// check if the user has a valid email
  header("location:../signup.php?error=invalidemail");
  exit();// stop the script for running
}

if(pwdMatch($pwd,$pwdrepeat) !== false) {// if the password doesn match
  header("location:../signup.php?error=passwordsdontmatch");
  exit();// stop the script for running
}
//see if the password is at lest 5 character
if(leghtpwd($pwd) !== false) {
  header("location:../signup.php?error=passwordtoshort");
  exit();// stop the script for running
}


if(uidExits($conn,$username,$email) !== false) {// control if the user name is taken
  header("location:../signup.php?error=usernametaken");
  exit();// stop the script for running
}

// you can add how many error handle you want

//now if the user doesn't macke any mistacke sing it up
createUser($conn, $name,$email,$username,$pwd,$userstype);

}
else{ //else if the user has no  entered  by clichking the botton of signup.php
  header("location:../signup.php"); //if not send the user to Signup.php
}

?>
<script>
   if(window.location.href == "http://localhost/Blog/users/signup.php"){
      location.reload();}
</script>
