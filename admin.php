<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css">

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
.wrapper1
{
height: 300px;
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
h2
{
	background-color:mediumseagreen;
	color:white;
	border-bottom:2px solid white;
}

</style>
</head>
<body background="bb2.jpg">
<br><br><br>
<h1><center>BLOOD BANK AND BLOOD DONOR-ADMIN PANEL</center></h1><br><br>

<nav>
<ul>
<li><a href="admin.php"><pre>          HOME         </pre>
<li><a href="donor1.php"><pre>     ADD DONOR       </pre>
<li><a href="requestlist1.php"><pre>     REQUEST LIST     </pre>
<li><a href="donorlist.php"><pre>       DONOR LIST        </pre>
<li><a href="deletelist.php"><pre>         DELETED ACCOUNT LIST        </pre>

<li><a href="aboutadmin.php"><pre>       MANAGE ABOUT US      </pre>
<li><a href="contactadmin.php"><pre>       MANAGE   CONTACT      </pre></a>
</ul>
</nav>
<br><br>
<div class="wrapper" >

<h1> DONOR COUNT</h1>
<?php
$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	$res=mysqli_query($link,"select * from donor ");
		
	$count=mysqli_num_rows($res);
	echo $count
	?>

</div>
<br><br>
<div class="wrapper" >

<h1> REQUEST COUNT</h1>
<?php
$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	$res=mysqli_query($link,"select * from request ");
		
	$count=mysqli_num_rows($res);
	echo $count
	?>

</div>
<br><br>
<div class="wrapper1" >

<h2> DONOR COUNT FOR EACH BLOODGROUP</h2>
<center>
<table border=1>
<th>BLOODGROUP</th>
<th>COUNT</th>
<?php
$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	$res=mysqli_query($link,"select count(fname),bloodgroup from donor group by bloodgroup ");
	while($row=mysqli_fetch_array($res))
	{
		echo '<tr>';
		echo '<td>'.$row['bloodgroup'].'</td>';
		echo '<td>'.$row['count(fname)'].'</td>';
		echo '</tr>';
	}
	?>
</table>
</center>
</div>
<br><br>
<div class="wrapper1" >

<h2> REQUEST COUNT FOR EACH BLOODGROUP</h2>
<center>
<table border=1>
<th>BLOODGROUP</th>
<th>COUNT</th>
<?php
$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	$res=mysqli_query($link,"select count(patname),bloodgroup from request group by bloodgroup ");
	while($row=mysqli_fetch_array($res))
	{
		echo '<tr>';
		echo '<td>'.$row['bloodgroup'].'</td>';
		echo '<td>'.$row['count(patname)'].'</td>';
		echo '</tr>';
	}
	?>
</table>
</center>
</div>
<br><br>
<footer><center>
<P>COPYRIGHTS 2017..ALL RIGHT RESERVED</p>

</footer>
</body>
</html>