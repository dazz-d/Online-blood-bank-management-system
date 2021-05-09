<html>
<head>
<title>login</title>
</head>
<body>
<CENTER>
<h1>LOGIN</H1>
<form name="form1" method="post">
PHONE NUMBER:
<INPUT TYPE="TEXT" NAME="PNO" ALERT("ENTER YOUR NAME")  required>
EMAILID:
<INPUT TYPE="TEXT" NAME="EMAIL" ALERT("ENTER YOUR NAME")  required>
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
	mysqli_query($link,"insert into contact2 values('$_POST[PNO]','$_POST[EMAIL]')");
}
?>
</BODY>
</HTML>