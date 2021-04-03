
 <?php
 // we include the connection file
require_once("../../app/database/dbh-process.php");
 // we see if the submit button has been clicked
 // And if the thing write inside will be send to mysql .

    $topic = isset($_GET['topic']) ? $_GET['topic'] : null;
 	 // Create the query that will be sent to mysql .
    $query = " SELECT * FROM blog WHERE
       Topics LIKE '$topic' AND Topics LIKE '$topic';";
    // from here is like the Article.php file
    $result = $conn->query($query);
    if (!$result) die("Fatal Error");
    $rows = $result->num_rows;
    for ($j = 0 ; $j < $rows ; ++$j)
    {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo 'Title Article: ' . htmlspecialchars($row['Title']) . '<br>';
    echo 'Article Content: ' .($row['Content']) . '<br>';
    echo 'Article ID: ' . htmlspecialchars($row['ID']) . '<br>';
    echo 'Article Year: ' . htmlspecialchars($row['pub_date']) . '<br>';
    echo "<img style='width:50px;height:50px;' src='images/".$row['image']."' ><br>";
    }

    $result->close();
   $conn->close();
