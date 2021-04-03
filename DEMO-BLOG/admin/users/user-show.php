<?php
require_once("../../app/database/dbh-process.php");
  $query = "SELECT * FROM users";//send the command to mysql
  $result = $conn->query($query);
  if (!$result) die("Fatal Error");
  $rows = $result->num_rows;
// create a loop that display all the Data in the table blog
  for ($j = 0 ; $j < $rows ; ++$j)
  {
  $row = $result->fetch_array(MYSQLI_ASSOC);
  $usersEmail = ss(htmlspecialchars($row['usersEmail']),10);
  $usersUid = ss(htmlspecialchars($row['usersUid']),10);
  $usersType = htmlspecialchars($row['usersType']);
  $ID = htmlspecialchars($row['usersId']);
  echo "<p id='pstyleusers'>$usersUid </p>";
  echo "<p id='pstyleusers'>$usersEmail</p>";
  echo "<a href='Delete-users.php?id=$ID'  id='topiclink'>Delete</a>&nbsp;";
  echo "<a href='user-to-admin.php?id=$ID'  id='topiclink'>$usersType</a>&nbsp;";

  }
 ?>
