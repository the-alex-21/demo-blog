<?php
require_once("../../../app/database/dbh-process.php");

$ID = isset($_GET['id']) ? $_GET['id'] : null;
// to optain the id of the page
$query = "SELECT public FROM blog WHERE id = '$ID'";
$result = $conn->query($query);
if (!$result) die("Fatal Error");
$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
$row = $result->fetch_array(MYSQLI_ASSOC);
$public = htmlspecialchars($row['public']);


if ( $public === "1" ){
  $query = "UPDATE blog  SET public='0' WHERE id = '$ID'";
  $result = $conn->query($query);
  if (!$result) die("Fatal Error");
  mysqli_close($conn);
  header("location:../View-Posts.php");
}
if ( $public === "0" ) {

$query = "UPDATE blog  SET public='1' WHERE id = '$ID'";
$result = $conn->query($query);
if (!$result) die("Fatal Error");
mysqli_close($conn);
header("location:../View-Posts.php");


}

}
