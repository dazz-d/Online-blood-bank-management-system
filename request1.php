

<html>
<body  text="lightgrey" background="bb.jpg">


<h1 style="text-align:center" ><font color="lightgrey">BLOOD REQUEST RESULT</font></h1>
<center>
<table border=2>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>BLOODGROUP</th>
<th>GENDER</th>
<th>AGE</th>
<th>PHONENUMBER</th>
<th>CITY</th>
<th>STATE</th>
<?php

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	
		mysqli_query($link,"insert into request values('$_POST[firstname]','$_POST[lastname]','$_POST[fname]','$_POST[bgrp]','$_POST[dob]','$_POST[dob2]','$_POST[gender]','$_POST[phone]' ,'$_POST[add]','$_POST[city]' ,'$_POST[state]','$_POST[zip]')");
		$res=mysqli_query($link,"select * from donor where bloodgroup='$_POST[bgrp]' && (city='$_POST[city]' || state='$_POST[state]')");
		$count=mysqli_num_rows($res);
		
		if($count>0)
		{
	while($row=mysqli_fetch_array($res))
	{
		echo '<tr>';
		echo '<td>'.$row['fname'].'</td>';
		echo '<td>'.$row['lname'].'</td>';
		
		echo '<td>'.$row['bloodgroup'].'</td>';
		echo '<td>'.$row['gender'].'</td>';
		echo '<td>'.$row['age'].'</td>';
		echo '<td>'.$row['phoneno'].'</td>';
		
		echo '<td>'.$row['city'].'</td>';
		echo '<td>'.$row['state'].'</td>';
		
		echo '</tr>';
	}
		}
		else
		{
			echo '<script>alert("donors not available")</script>';
		}
		


?>	
</table>
<br><br>
<form method="post" action="request.php">
<input type="submit" class="button"  name="d" value="ok" color="blue">
</center>
<br></form>




<center>

</center>

</body>
</html>