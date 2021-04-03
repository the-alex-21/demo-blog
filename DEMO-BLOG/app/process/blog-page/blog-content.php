
<div class="blog-article">
  <?php
  require_once("app/database/dbh-process.php");
  // to optain the url that you need for connection withi the mysql
  $ID = isset($_GET['id']) ? $_GET['id'] : null;
  // selecting the query and output it
    $query = "SELECT * FROM Blog WHERE id='$ID '";
    // from here is like the Article.php file
    $result = $conn->query($query);
    if (!$result) die("Fatal Error");
    $rows = $result->num_rows;
    for ($j = 0 ; $j < $rows ; ++$j)
    {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $Title = htmlspecialchars($row['Title']) ;
    $Content = ($row['Content']);
    $Data = htmlspecialchars($row['pub_date']) ;
    $Data = ss($Data,11);

    echo "<h1 class='Title-cont-blog'> $Title </h1>";

    echo "<p class='Content-View'> $Content </p>";

    echo "<p class='Content-Date'> publication date : $Data </p>";
    }

   ?>
</div>
