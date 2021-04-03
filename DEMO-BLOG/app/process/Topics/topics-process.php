<?php
require_once("app/database/dbh-process.php");
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
  echo "<div class='topics-cont'>";
   echo "<a href='Topics.php?topic=$TOPIC' id='topicslink'>$TOPIC</a>";
  echo "</div>";}
   ?>
