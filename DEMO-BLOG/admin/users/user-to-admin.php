<?php
require_once("../../app/database/dbh-process.php");

$ID = isset($_GET['id']) ? $_GET['id'] : null;
// to optain the id of the page
$query = "SELECT usersType FROM users WHERE usersId = '$ID'";
$result = $conn->query($query);
if (!$result) die("Fatal Error");
$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
$row = $result->fetch_array(MYSQLI_ASSOC);
$usersType = htmlspecialchars($row['usersType']);


if ( $usersType === "admin" ){
  $query = "UPDATE users  SET usersType='user' WHERE usersId = '$ID'";
  $result = $conn->query($query);
  if (!$result) die("Fatal Error");
  mysqli_close($conn);
header("location:users.php");
}
if ( $usersType === "user" ) {

$query = "UPDATE users  SET usersType='admin' WHERE usersId = '$ID'";
$result = $conn->query($query);
if (!$result) die("Fatal Error");
mysqli_close($conn);
header("location:users.php");


}

}
