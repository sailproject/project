<?php
include 'header.php';

echo <<<_END

<form id="form1" action="newDisplay.php" method="post">
First Name: <input type="text" name="fname">
Last Name: <input type="text" name="lname"><br><br>
Username: <input id="nameID" type="text" name="username">
	<label id="eMName" style="color:red"></label><br><br>
Password: <input id="pwdID" type="password" name="password">
	<label id="eMPwd" style="color:red"></label><br>
Repassword: <input id="pwdID2" type="password" name="repassword">
	<label id="eMPwd2" style="color:red"></label><br>
<input type="submit">
</form>

_END;

?>
<script>

isValidName=true;
isValidPwd=true;
isValueMatch=true;
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

idPwd2=document.getElementById("pwdID2");
idPwd2.onblur=function()
{
	var errorLabel=document.getElementId("eMPwd2");
	if((idPwd2.value)!=(idPwd.value))
	{
		errorLabel.innerHTML="Password does not match";
		isValidMatch=false;
	}
	else
	{
		errorLabel.innerHTML="";
		isValidMatch=true;
	}
}


function allValid()
{
	if(isValidName && isValidPwd && isValidMatch)
		return true;
	else
		return false;
}

</script>
