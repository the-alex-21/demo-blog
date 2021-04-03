<?php
$servername='localhost';
$un='root';
$password='mysql';
$dbname = "blog";
$conn =  mysqli_connect($servername,$un,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}


// A simple function that  a smoler string
function ss($string, $size)
{
    return substr($string, 0, $size);
}
