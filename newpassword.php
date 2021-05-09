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
<header><h1>BLOOD BANK AND BLOOD DONOR-ADMIN LOGIN</h1></header><br><br>
<CENTER>

<form name="form1" method="post">

ENTER YOUR NEW PASSWORD:
<INPUT TYPE="PASSWORD" NAME="DOB" required>
<BR><BR>
<INPUT TYPE="SUBMIT" name="submit1" VALUE="SUBMIT" required>
<BR><BR>
</FORM>

</CENTER>

<?php
if(isset($_POST["submit1"]))
{
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	$res=mysqli_query($link,"update admin set password='$_POST[DOB]'");
	echo '<script>alert(" password changed ")</script>';
	?>
	<script type="text/javascript">
		 window.location="adminlogin.php";
		 </script>
		 <?php
		
}
?>
</BODY>
</HTML>