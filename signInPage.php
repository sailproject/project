<?php
include 'header.php';
//include_once 'connection.php';
/*
$query = "SELECT PID,ACCID,OID FROM orders";
$cols = array("PID","ACCID","OID","orderdate");

retrieveRecords($query, $cols, " orders");*/
echo <<<_END
<html> 
<body>

<form action="display.php" method="post">
Username: <input type="text" name="username"><br><br>
Password: <input type="text" name="password"><br>
<input type="submit">
</form>

</body>
</html>
_END;
include 'footer.php';		
?>
