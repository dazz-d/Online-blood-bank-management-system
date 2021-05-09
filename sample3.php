<html>
<head>
<style type="text/css">
.wrapper
{
height: 150px;
width: 300px;
background-color:skyblue;
margin:auto;
text-align:center;
border:1px solid white;
box-shadow:2px 2px 10px gray;
}
h1
{
	background-color:mediumseagreen;
	color:white;
	border-bottom:2px solid white;
}
</style>
</head>
<body>
<div align="left" class="wrapper" >

<h1> DONOR COUNT</h1>
<?php
$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	$res=mysqli_query($link,"select count(fname),bloodgroup from donor group by bloodgroup");
		
		while($row=mysqli_fetch_array($res))
	{
		echo $row['count(fname)'];
		echo $row['bloodgroup'];
	}
	?>

</div>
<div class="wrapper">

<h1> DONOR COUNT</h1>
<?php
$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	$res=mysqli_query($link,"select count(fname),bloodgroup from donor group by bloodgroup");
		
		while($row=mysqli_fetch_array($res))
	{
		echo $row['count(fname)'];
		echo $row['bloodgroup'];
	}
	?>

</div>
</body>
</html>