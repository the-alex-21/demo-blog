<link rel="stylesheet" type="text/css" href="../dashboard-style.css">
<?php
require_once("../../app/database/dbh-process.php");
require_once"../dashboard.php";

$IDM = isset($_GET['id']) ? $_GET['id'] : null;
$query = "SELECT * FROM Blog WHERE id='$IDM '";
$result = $conn->query($query);
if (!$result) die("Fatal Error");
$rows = $result->num_rows;

?>
<center>
	<form method="post" action="">
    <?php for ($j = 0 ; $j < $rows ; ++$j){ $row = $result->fetch_array(MYSQLI_ASSOC);?>
		Title:<br>
		<input type="text" name="Article_Title" value="<?php echo $row['Title'];?>"><br>
		Article content:<br>
		 <textarea name="Article_content" style="height:500px;width:65%;margin-left:20%;" ><?php echo $row['Content'];?></textarea><br>
    ID:<br>
    <input type="text" name="Article_ID" value="<?php echo $row['ID'];?>"><br>
    Topics: <br>
    <input type="text" name="Article_Topics" value="<?php echo $row['Topics'];}?>"><br>
		<input type="submit" name="nameSubmit" value="submit">
	</form>
</center>
<script src="../../ckeditor/ckeditor.js"></script>
  <script >CKEDITOR.replace("Article_content")
  CKEDITOR.on('instanceReady', function(e) {
      // First time
      e.editor.document.getBody().setStyle('background-color', 'rgb(45,45,45)');
      // in case the user switches to source and back
      e.editor.on('contentDom', function() {
          e.editor.document.getBody().setStyle('background-color', 'rgb(45,45,45)');
        });
    });
  </script>
</body>
</html>

<?php
if(isset($_POST['nameSubmit']))
{
	 $title = $_POST['Article_Title'];
	 $content = $_POST['Article_content'];
	 $ID = $_POST['Article_ID'];
   $Topics = $_POST['Article_Topics'];

	 $sql = "UPDATE blog  SET Title='$title' , Content='$content' ,ID='$ID' ,Topics= '$Topics'
	         WHERE ID ='$IDM'";
	//Create the conectio and contro it .
	 if (mysqli_query($conn, $sql)) {
		 header( "refresh:0;url=../View-Posts.php" );
	 } else {
		echo "You need to modyfy all the input file";
	 }
	 mysqli_close($conn);
}

?>
