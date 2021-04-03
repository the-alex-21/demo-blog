<?php
//This is the logout file
//in there we will destroi the session.
session_start();//firt we start a session_start
session_unset();//second we uset the session_start
session_destroy();//third we destro it
// now we send the user to the index  file
  header("location:../index.php");
?>
