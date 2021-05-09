<!DOCTYPE html>
<head>
<style>
input[type=text] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid grey;
  outline: none;
  border-radius: 5px;
}
input[type=email] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid grey;
  outline: none;
  border-radius: 5px;
}
input[type=number] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid grey;
  outline: none;
  border-radius: 5px;
}
input[type=date] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid grey;
  outline: none;
  border-radius: 5px;
}
input[type=textarea] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid grey;
  outline: none;
  border-radius: 5px;
}

input[type=textarea]:focus {
  background-color: lightgray;
}

input[type=text]:focus {
  background-color: lightgray;
}
input[type=email]:focus {
  background-color: lightgray;
}
input[type=number]:focus {
  background-color: lightgray;
}
input[type=date]:focus {
  background-color: lightgray;
}


input[type=submit] {
  width: 10%;
  background-color:black;
  color: pink;
  padding: 14px 20px;
  margin: 8px 0;
  border: rounded;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:tomato;
}


</style>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<html>
<body  text="lightgrey" background="bb.jpg">
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
</nav><br>
<center>
<h1 style="text-align:center" ><font color="lightgrey">BLOOD DELETION FORM</font></h1>

<form method="post">


    <label for="fname" class=>FIRST NAME &emsp; </label></td>
	<input type="text" id="fname" name="firstname" placeholder="enter your first name.." autofocus required><br><br>
	<label for="lname">LAST NAME &emsp; </label>
    <input type="text" id="lname" name="lastname" placeholder="enter your last name.." required><br><br>
	<label for="mail">EMAIL ID &nbsp;&emsp;&emsp;</label>
     <input type="email" name="mail" pattern="((\w)*(\d)*)+[@]+gmail.com" placeholder="eg:example@gmail.com" required><br><br>
    <label for="bgrp">BLOOD GROUP &nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;  &nbsp;&emsp;&emsp;&nbsp;&emsp;</label>
    <select id="4" name="bgrp">
    <option>SELECT OPTION</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="A1+">A1+</option>
    <option value="A1-">A1-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
<option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    </select>
<br>  <br>
<label for="dob">AGE  &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>  
<input type="number" name="dob"   required>
<br><br>GENDER &nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;  &nbsp;&emsp;&emsp;&nbsp;&emsp;&nbsp;&emsp;&emsp;&nbsp;&emsp;
   <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female<br><br>
<label for="phone">PHONE NUMBER</label>
<input id="phone" name="phone" type="text" inputmode="numeric" maxlength="10" required>
<br>
  <br>

<label for="add">ADDRESS&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
<textarea name="add" rows="3" cols="20"></textarea>
<br>
<label for="city">CITY&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;</label>
    <input type="text" name="city" placeholder="enter city" required>
<br>
    <label for="bgrp">STATE&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;</label>
    <select id="4" name="state">
    <option value="Andhra pradesh">Andhra pradhesh</option>
    <option value="Arunachal pradesh">Arunachal pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Bihar">Bihar</option>
    <option value="Chattishgar">Chattishgar</option>
    <option value="Goa">Goa</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Haryana">Haryana</option>
<option value="Himachel pradesh">Himachel pradesh</option>
    <option value="Kerala">Kerala</option>
    <option value="Madhya pradesh">Madhya pradesh</option>
    <option value="Maharastra">Maharastra</option>
    <option value="Tamilnadu">Tamilnadu</option>
    <option value="Telangana">Telangana</option>
    <option value="Uttar pradesh">Uttar pradesh</option>
    </select>
<br>
<label for="pin">PINCODE&emsp;&nbsp;&emsp;&emsp;</label>
<input id="zip" name="zip" type="text" inputmode="numeric" maxlength="6" required>
<br>

<input type="submit" class="button"  name="d" value="Submit" color="blue">

<?php
if(isset($_POST["d"]))
	
{    if($_POST['dob']>=18)
	{
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"bloodbank");
	$res=mysqli_query($link,"select * from donor where fname='$_POST[firstname]' && lname='$_POST[lastname]' && email='$_POST[mail]'&&  gender='$_POST[gender]' && bloodgroup='$_POST[bgrp]' && age='$_POST[dob]' && phoneno='$_POST[phone]'&& address='$_POST[add]'&& pincode='$_POST[zip]'&& city='$_POST[city]' && state='$_POST[state]'");
	$count=mysqli_num_rows($res);
	
	if($count==0)
	{ 
     
		echo '<script>alert("account not available")</script>';
		
	}
	else
	{  
	mysqli_query($link,"delete from donor where fname='$_POST[firstname]'");
	mysqli_query($link,"insert into delete1 values('$_POST[firstname]','$_POST[lastname]','$_POST[mail]','$_POST[bgrp]','$_POST[dob]','$_POST[gender]','$_POST[phone]' ,'$_POST[add]','$_POST[city]' ,'$_POST[state]','$_POST[zip]')");
 echo '<script>alert("account deleted")</script>';

	
	}
	}
	else{
		
		echo '<script>alert("age less than 18")</script>';
	}
	
	

}
?>	

</form>
<footer>
<P>COPYRIGHTS 2017..ALL RIGHT RESERVED</p>

</footer>
</center>

</body>
</html>