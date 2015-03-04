<?php
include 'header.php';

echo <<<_END

<form action="newDisplay.php" method="post">
First Name: <input type="text" name="fname">
Last Name: <input type="text" name="lname"><br><br>
Username: <input type="text" name="username"><br><br>
Password: <input type="password" name="password"><br>		
Repassword: <input type="password" name="repassword"><br>
<input type="submit">
</form>

_END;

?>
