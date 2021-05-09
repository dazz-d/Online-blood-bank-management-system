<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<style>
h1
{
	color:yellow;
}
</style>
<title>
ABOUT US</title>
</head>
<body background="bb.jpg">
<header><h1>BLOOD BANK AND BLOOD DONOR</h1></header><br><br>

<nav>
<ul>
<li><a href="home.php"><pre>   HOME     </pre>
<li><a href="donor.php"><pre>     DONOR REGISTRATION     </pre>
<li><a href="request.php"><pre>    SEND REQUEST     </pre>
<li><a href="donorlist.php"><pre>      VIEW DONORS        </pre>
<li><a href="delete.php"><pre>    DELETE ACCOUNT        </pre>
<li><a href="requestlist.php"><pre>     VIEW REQUESTS     </pre>
<li><a href="about.php"><pre>       ABOUT US      </pre>
<li><a href="contact.php"><pre>      CONTACT      </pre></a>
</ul>
</nav><br><br>
<font color="pink">
<center>
<br>
<br>
<h1>CONTACT US</h1>

<h2>
<br><br>


<?php

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	$res=mysqli_query($link,"select * from  contact2");
	$row=mysqli_fetch_array($res)
	?>
	<h2>PHONE NO: </h2>
	<?php
		echo $row['phoneno'];
		?>
		<br><br>
	<h2>EMAIL: </h2>
	<?php	
	    echo $row['email'];

?>

</h2>
<br><br><br>
<br>
<footer>
<P>COPYRIGHTS 2017..ALL RIGHT RESERVED</p>
</center>
</body>
</html>