<?php
// we include the connection file
require_once("../../../app/database/dbh-process.php");
// we see if the submit button has been clicked
// And if the thing write inside will be send to mysql .

if(isset($_POST['nameSubmit']))
{  $public = 1 ;
	 $image = $_FILES['image']['name'];
	 $target = "images/".basename($image);
	// Colegate the variable with the input from index.php
	 $title = $_POST['Article_Title'];
	 $content = $_POST['Article_content'];
	 $ID = $_POST['Article_ID'];
	 $Topics = $_POST['Article_Topics'];
	 // Create the query that will be sent to mysql .
	 $sql = "INSERT INTO blog (Title, Content ,ID,image,Topics,public)
	         VALUES ('$title','$content','$ID','$image','$Topics',$public);";
	//Create the conectio and contro it .
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header( "refresh:1;url=../Create-Post.php" );
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }


	 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		 $msg = "Image uploaded successfully";
	 }else{
		 $msg = "Failed to upload image";
	 }
	 mysqli_close($conn);

}



//After 1 sec we will be sent back to index.p
?>
