<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<style>
h1
{
	color:lime;
}
h4
{
	color:white;
}
</style>
</head>
<body background="bb2.jpg">
<header><h1>BLOOD BANK AND BLOOD DONOR-ADMIN PANEL</h1></header><br><br>

<nav>
<ul>
<li><a href="admin.php"><pre>          HOME         </pre></a>
<li><a href="donor.php"><pre>     ADD DONOR       </pre></a>
<li><a href="requestlist1.php"><pre>     REQUEST LIST     </pre>
<li><a href="donorlist.php"><pre>       DONOR LIST        </pre>
<li><a href="deletelist.php"><pre>         DELETED ACCOUNT LIST        </pre>

<li><a href="aboutadmin.php"><pre>       MANAGE ABOUT US      </pre>
<li><a href="contactadmin.php"><pre>       MANAGE   CONTACT      </pre></a>
</ul>
</nav><br><br>
<center>
<br>
<br>
<font color="#66ffff">
<h1>ABOUT US</h1>

<h2>
<br><br><br>
<form name="form1" method="post">
CONETENTS FOR ABOUT US:
<br><br>
<br>
<textarea name="USERNAME" rows="4" cols="50">

</textarea>

<BR><BR>


<INPUT TYPE="SUBMIT" name="submit1" VALUE="SUBMIT" required>
<BR><BR>
</FORM>
</CENTER>
</font>
<?php
if(isset($_POST["submit1"]))
{
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	mysqli_query($link,"update about set name='$_POST[USERNAME]'");
	
}
?>

</h2>
<footer><center>
<P>COPYRIGHTS 2017..ALL RIGHT RESERVED</p>

</footer>
</center>
</body>
</html>