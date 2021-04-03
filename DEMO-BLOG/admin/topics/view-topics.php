<?php
require_once("../../app/database/dbh-process.php");
  $query = "SELECT * FROM Topics";//send the command to mysql
  $result = $conn->query($query);
  if (!$result) die("Fatal Error");
  $rows = $result->num_rows;
// create a loop that display all the Data in the table blog
  for ($j = 0 ; $j < $rows ; ++$j)
  {
  $row = $result->fetch_array(MYSQLI_ASSOC);
  $TOPIC = htmlspecialchars($row['topics']);
  $ID = htmlspecialchars($row['topicsId']);
  echo "<a href='topics-search.php?topic=$TOPIC'   id='topiclink'>$TOPIC</a>&nbsp; &nbsp;";
  echo "<a href='Delete-topics.php?id=$ID'  id='topiclink'>Delete</a>&nbsp;<br><br>";
  }
 ?>
