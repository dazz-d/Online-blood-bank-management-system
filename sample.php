<html>
<head>
<title>login</title>
</head>
<body>
<CENTER>
<h1>LOGIN</H1>
<form name="form1" method="post">
USERNAME:
<INPUT TYPE="TEXT" NAME="USERNAME" ALERT("ENTER YOUR NAME")  required>
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
	mysqli_query($link,"insert into about values('$_POST[USERNAME]')");
}
?>
</BODY>
</HTML>