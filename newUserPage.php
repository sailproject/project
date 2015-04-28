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
<script>

isValidName=true;
isValidPwd=true;
idName=document.getElementById("nameID");
idName.onblur=function()
{
	var errorLabel=document.getElementById("eMName");
	if(idName.value=="")
	{
		errorLabel.innerHTML="Username cannot be empty.";
		isValidName=false;
	}
	else if(/[^a-zA-Z0-9-_]/.test(idName.value))
	{
		errorLabel.innerHTML="Username can only have letters, numbers, hyphen, or underscore";
		isValidName=false;
	}
	else
	{
		errorLabel.innerHTML="";
		isValidName=true;
	}
}

idPwd=document.getElementById("pwdID");
idPwd.onblur=function()
{
	var errorLabel=document.getElementId("eMPwd");
	if((idPwd.value).length < 5)
	{
		errorLabel.innerHTML="Password must be at least 5 characters";
		isValidPwd=false;
	}
	else
	{
		errorLabel.innerHTML="";
		isValidPwd=true;
	}
}

function allValid()
{
	if(isValidName && isValidPwd)
		return true;
	else
		return false;
}

</script>
