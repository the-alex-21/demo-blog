<?php
// we include the connection file
require_once("../../app/database/dbh-process.php");
// we see if the submit button has been clicked
// And if the thing write inside will be send to mysql .
if(isset($_POST['nameSubmit']))
{
	 $Topics = $_POST['Topics'];
	 // Create the query that will be sent to mysql .
	function empycontent($Topics){
 	  $results;//the value that is send
 	  if(empty($Topics)) {
 	    //if the value is empty the script will run
 	    $result = true;
 	  }
 	  else{
 	     $result = false;
 	  }
 	  return $result;
 	}
 	function invalicontent($Topics){
 	  $results;
 	  if(!preg_match("/^[a-zA-Z0-9\s\\.\\,\\;\\!\\$\\%\\^\\#\\@\\&\\*\\(\\)\\|\\{\\}\\-\\[\\]\\_ \\?\\+\\=\\>\\<]*$/",$Topics)) { // here we use methacharacter so  nobady can is_writeable
 	    $result = true;//So nobady can write sameting dangerous
 	  }
 	  else{
 	     $result = false;
 	  }
 	  return $result;
 	}
 	if(empycontent($Topics) !== false) {
 	  header("location:topics.php");
 	  exit();
 	}
 	if(invalicontent($Topics) !== false) {
 	  header("Location:topics.php");
 	  exit();
 	}


	 $sql = "INSERT INTO Topics (Topics)
	         VALUES ('$Topics');";
	//Create the conectio and contro it .
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("location:topics.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }

	 mysqli_close($conn);

}

?>
