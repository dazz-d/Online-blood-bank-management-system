<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<style>
h3
{
	color:white;
}
h4
{
	color:white;
}
body {
  
  
  color:white;
}
</style>
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
<CENTER>
<h1>REQUEST LIST</H1>
<table  border="2">
<th>HOSPITAL NAME</th>
<th>HOSPIAL ID</th>
<th>BLOOD GROUP</th>
<th>AGE</th>
<th>REQUIRED TILL DATE</th>
<th>PHONENO</th>
<th>CITY</th>
<th>STATE</th>
<?php

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	mysqli_query($link,"delete  from  request where date1<SYSDATE()");
	$res=mysqli_query($link,"select * from  request");
	while($row=mysqli_fetch_array($res))
	{
		echo '<tr>';
		echo '<td>'.$row['hosname'].'</td>';
		echo '<td>'.$row['hosid'].'</td>';
		echo '<td>'.$row['bloodgroup'].'</td>';
		echo '<td>'.$row['age'].'</td>';
		echo '<td>'.$row['date1'].'</td>';
		echo '<td>'.$row['phoneno'].'</td>';
		echo '<td>'.$row['city'].'</td>';
		echo '<td>'.$row['state'].'</td>';
		echo '</tr>';
	}

?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</center>
<footer><center>
<P>COPYRIGHTS 2017..ALL RIGHT RESERVED</p>

</footer>
</body>
</html>