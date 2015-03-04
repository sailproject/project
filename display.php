<?php
include 'header.php';
include_once 'connection.php';


$username = $_POST["username"]; 
$password = $_POST["password"]; 

$query = "SELECT fName, lastName FROM parents WHERE username = '$username'  AND pwd = password('$password')";
$cols = array("firstname","lastname");

retrieveRecords($query, $cols, "");


include 'footer.php';
?>
