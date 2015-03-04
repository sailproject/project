<?php
/*
 * function html_header($title);
 * function html_footer()
 * function tableheader($caption, $cols)
 * function tablefooter()
 *
 */

function html_header($title)
{
echo<<<_END
<html>
<head>
<meta charset="ISO-8859-1">
<title>$title</title>
<style>
table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
}
th, td {
	padding: 5px;
}
</style>
</head>

<h3><img src="images/pizzalogo.bmp" alt="pizzao logo" width="228" height="167" />
<a href="index.php"><strong>Index</strong></a>
<a href="checkOut.php">Check Out</a>
<a href="placeOrder.php">Place Order</a>
<a href="summary.php">Summary</a>
<img src="images/signin.png" alt="sign in" width="212" height="104" /></h3>
<hr />
<p>&nbsp;</p>
<body>
_END;
}


function html_footer()
{
echo<<<_END
<hr />
<p><a href="customer.html">Customer Service</a> <a href="careers.html">Careers</a> <a href="shop.php">Gift Shop</a> <img src="images/pizzafooter.jpg" width="114" height="91" alt="pizza2" /></p>
</body>
</html>
_END;
}

function tableheader($caption, $cols)
{
echo<<<_END
<table style="width: 100%">
	<caption>$caption</caption>
_END;

	echo "<tr>";
foreach ($cols as $header){
		echo "<th>$header</th>";
}
	echo"</tr>";	
}

function tablefooter()
{
	echo "</table>";
}

?>
