<?php
//the procces to see if the user has made a mistake is called error handle
//And this is what we will do
//This is a function that check if the user has write in all the inputs
//HERE ARE THE ERROR HANDLE FROM Singup-inc.php
function empyInputsSignup($name,$email,$username,$pwd,$pwdrepeat){
  $results;//the value that is send
  if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)) {
    //if the value is empty the script will run
    $result = true;
  }
  else{
     $result = false;
  }
  return $result;
}

function invalidUid($username){
  $results;//the value that is send
  if(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
    //if the value doesnt much with the preg_match will give us an error
    $result = true;
  }
  else{
     $result = false;
  }
  return $result;
}

function invaliemail($email){
  $results;//the value that is send
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // FILTER_VALIDATE_EMAIL this is a build in function that control if the email is valis
    $result = true;
  }
  else{
     $result = false;
  }
  return $result;
}

function pwdMatch($pwd,$pwdrepeat){
  $results;//the value that is send
  if($pwd !== $pwdrepeat) {
    // See if the passwords are not  iqual
    $result = true;
  }
  else{
     $result = false;
  }
  return $result;
}

function leghtpwd($pwd){ //see if the password is at lest 7 character
  $results;//the value that is send
  if(strlen($pwd) <= '5') {
    $result = true;
  }
  else{
     $result = false;
  }
  return $result;
}



// control if the user name  or the email is taken
function uidExits($conn,$username,$email){
/* first we conect to the
database and see if the user name exist */
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ? ; ";
  $stmt = mysqli_stmt_init($conn); // we are prepare a prepare PDOStatement
  // so the user cant go to singup and write in some cade that can distro our database.
  if (!mysqli_stmt_prepare($stmt,$sql)) { // if this is fale then ;
    header("location:../signup.php?error=stmlfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt,"ss",$username,$email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if($row = mysqli_fetch_assoc($resultData)){
    return $row;
  }
  else {
    $result = false;
    return $result ;
  }
 mysqli_stmt_close($stmt);
}


// now we send the data to mysql
function createUser($conn, $name,$email,$username,$pwd,$userstype){
  $sql = "INSERT INTO users ( usersName ,  usersEmail , usersUid , usersPwd,usersType) VALUES (?,?,?,?,?) ";
  $stmt = mysqli_stmt_init($conn); // we are prepare a prepare PDOStatement
  // so the user cant go to singup and write in some cade that can distro our database.
    if (!mysqli_stmt_prepare($stmt,$sql)) { // if this is fale then ;
     header("location:../signup.php?error=createusers");
     exit();
  }
    // we need right now hasing the passwords with password_hash()
  $hashedPwd = password_hash($pwd , PASSWORD_DEFAULT);
  mysqli_stmt_bind_param($stmt,'sssss',$name,$email,$username,$hashedPwd,$userstype);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  // now we send the user back
  header("location:../login.php?error=none");
}

//---------------------------------------------------------------------------------------------------------------------------------------------------
/* NOW WE START WITH THE LOGIN-INC.PHP ERROR HANDELE*/
function empyInputsLogin($username,$pwd){
  $results;//the value that is send
  if(empty($username) || empty($pwd)) {
    //if the value is empty the script will run
    $result = true;
  }
  else{
     $result = false;
  }
  return $result;
}
function loginUser($conn, $username,$pwd){
  // we will use uidExits the function create before to see if the user
  //or email are the same  we will pass 2 value one for the email and
  //another for the the user but we will call the $username .
  $uidExists  = uidExits($conn,$username,$username);

  if($uidExists === false){ //se uid Exists go to
    header("location:../login.php?error=wrongus");
    exit();
  }
// now we need to see if the password send is correct
     $pwdHashed = $uidExists['usersPwd'] ;// whith this code we have tacken the pdw
     $checkPwd = password_verify($pwd, $pwdHashed);//check if the two password match

     if ($checkPwd == false){
     header("location:../login.php?error=wrongp");
     exit();
     }

     else if ($checkPwd == true){
     session_start();//we start a ssesion tant contain the user data ex if log in or log out
     $_SESSION["userid"] = $uidExists["usersId"];//Now we create a super variable tant we will use tu anderstand if the user is
     $_SESSION["useruid"] = $uidExists["usersUid"];//log in or logout
     $_SESSION["user_type"] = $uidExists["usersType"];//See if the user is a ADMIN

     header("location:../index.php");
     exit();
     }

}
