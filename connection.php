<?php
/*
$currency = '$'; 
$username = 'hakeem.dixon';
$password = 'hakeem.dixon';
$database = 'pizzastore';
$host = 'localhost';
$mysqli = new mysqli($host, $username, $password,$database);
*/

$host = 'localhost';
$user = 'hakeem';
$password = 'hakeem';

$database = mysql_connect($host,$user,$password);
mysql_select_db('sos');

?>



<?php
require_once 'connection.php';
require_once 'htmlFunctions.php';

function retrieveRecords($query, $cols, $tabletitle)
{
	$result = mysql_query ( $query );
	$num = mysql_num_rows($result);
	if (! $result)
		die ( "Access failed man:( " . mysql_error () );
	else 
		echo "Nice".$num;
				
			
}
	
?>
