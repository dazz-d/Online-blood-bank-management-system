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
USERNAME:
<INPUT TYPE="TEXT" NAME="USERNAME" ALERT("ENTER YOUR NAME")  required>
<BR><BR>

NUMBER:
<INPUT TYPE="tel" NAME="PN" pattern="[0-9]{10}" required><BR><BR>
EMAIL: 
<INPUT TYPE="TEXT" NAME="RATING" required><BR><BR>
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
	$res=mysqli_query($link,"select * from admin where name='$_POST[USERNAME]' && emailid='$_POST[RATING]' && phoneno='$_POST[PN]'");
	$count=mysqli_num_rows($res);
	if($count==0)
	{ 
       echo '<script>alert("invalid")</script>';
		
		?>
		<?php
	}
	else
	{  ?>
		 <script type="text/javascript">
		 window.location="newpassword.php";
		 </script>
		 <?php
	}
}
?>
</BODY>
</HTML>