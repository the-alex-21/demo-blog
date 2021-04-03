<?php

  require_once("../../app/database/dbh-process.php");
  $query = "SELECT * FROM Blog ORDER BY pub_date DESC";//send the command to mysql
  $result = $conn->query($query);
  if (!$result) die("Fatal Error");
  $rows = $result->num_rows;
// create a loop that display all the Data in the table blog
  for ($j = 0 ; $j < $rows ; ++$j)
  {
  $row = $result->fetch_array(MYSQLI_ASSOC);
  $Title = htmlspecialchars($row['Title']);
  $SmallTitle =  ss($Title, 8);
  $SmallTitle = $SmallTitle . "...";
  $ID = htmlspecialchars($row['ID']);

  echo "<p id='title'>$SmallTitle</p>";
  echo "<a href='../../blogs.php?id=$ID' id='linkviews' >READ</a>&nbsp;";
  echo "<a href='Update-Post.php?id=$ID' id='linkviews'>Update</a>&nbsp;";
  echo "<a href='View-post/delete.php?id=$ID' id='linkviews' >Delete</a>&nbsp;";
  $public = htmlspecialchars($row['public']);
  if ( $public === "1" ){
    echo "<a href='View-post/Public.php?id=$ID' id='linkviews' >Publish</a>&nbsp;";
  }
  if ( $public === "0" ) {
    echo "<a href='View-post/Public.php?id=$ID' id='linkviews' >UnPublish</a>&nbsp;";
  }

  }
  $result->close();
 $conn->close();
 ?>
