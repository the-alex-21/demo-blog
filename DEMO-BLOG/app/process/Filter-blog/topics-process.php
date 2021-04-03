<?php
require_once("app/database/dbh-process.php");
$topic = isset($_GET['topic']) ? $_GET['topic'] : null;
// Create the query that will be sent to mysql .
$query = " SELECT * FROM blog WHERE
   Topics LIKE '$topic' AND Topics LIKE '$topic';";
   $result = $conn->query($query);
   if (!$result) die("Fatal Error");
   $rows = $result->num_rows;
   for ($j = 0 ; $j < $rows ; ++$j)
   {
   $row = $result->fetch_array(MYSQLI_ASSOC);

   $public = htmlspecialchars($row['public']);
   $Title = htmlspecialchars($row['Title']);
   $Title =  ss($Title, 10) . "..";
   $introBlog = htmlspecialchars($row['introBlog']);
   $introBlog =  ss($introBlog, 20) . "..";

   $ID = htmlspecialchars($row['ID']);
   $image = htmlspecialchars($row['image']);
   $target= 'admin/posts/create-posts/images/'.basename($image);
   echo "
   <div
   style='
   width:100%;
   height:210px;
    margin:0px;
   background:url($target) center center  ;
    background-repeat: no-repeat ;
   background-size: 98% 99%;
   -webkit-box-shadow:inset 0px 0px 0px 10px rgb(25,25,25);
 -moz-box-shadow:inset 0px 0px 0px 10px rgb(25,25,25);
    box-shadow:inset 0px 0px 0px 10px rgb(25,25,25);
    '>";
     echo "<div class='w-t-w'>";
     echo "<p id='title-bolog'>$Title</p>";
     echo "<a href='blogs.php?id=$ID' id='linkviews' >READ</a>&nbsp;";

   echo "</div>";
   echo "</div>";
   }
$result->close();
$conn->close();
