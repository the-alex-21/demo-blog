<?php
require_once("../../app/database/dbh-process.php");

// to optain the id of the page
$ID = isset($_GET['id']) ? $_GET['id'] : null;

$sql = "DELETE FROM users WHERE usersId='$ID'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("location:users.php");
