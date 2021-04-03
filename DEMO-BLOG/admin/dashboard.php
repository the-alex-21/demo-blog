<?php
session_start();//for given the value tu $_SESSION["userid"]
    if (isset($_SESSION['userid']) && $_SESSION['user_type'] == 'admin' ) {
     echo <<<_END
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dashboard-style.css">
</head>
<body>
<div class="sidenav">
  <a href="../../index.php">Home</a>
<br>
  <a href="../posts/View-Posts.php">View-Post</a>
<br>
  <a href="../posts/Create-Post.php">Create-Post</a>
<br>
  <a href="../topics/topics.php">Topics</a>
<br>
  <a href="../users/users.php">Users</a>
</div>

_END;

}      else{
        header("location:../../index.php?error=nonadmin");
}

?>
