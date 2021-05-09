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
input[type=select] {
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

<h1 style="text-align:center" ><font color="lightgrey">REQUEST FORM</font></h1>
<center>

<form method="post" action="request1.php">


    <label for="fname" class=>HOSPITAL NAME &emsp;&nbsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp;</label></td>
	<input type="text" id="fname" name="firstname" placeholder="enter your hospital name.." autofocus required><br><br>
	<label for="phone">HOSPITAL REF.NUMBER &emsp; </label>
    <input type="text" id="lname" name="lastname" placeholder="enter your hospital ref.number." required><br><br>
	<label for="fname" class=>PATIENT NAME &emsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp; &nbsp;&nbsp;&nbsp; </label></td>
	<input type="text" id="fname" name="fname" placeholder="enter your patient name.." autofocus required><br><br>
    <label for="bgrp">BLOOD GROUP &nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;  &nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp; &nbsp;</label>
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
<label for="dob">AGE  &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp;</label>  
<input type="number" name="dob"   required>


<br><br>

<br><label for="dob">TILL REQUIRED DATE&emsp; &nbsp;&nbsp;&nbsp; </label>  
<input type="date" name="dob2"  pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required><br><br>
GENDER &nbsp;&emsp;&emsp;&nbsp;&emsp;&emsp;  &nbsp;&emsp;&emsp; 
   <input type="radio" name="gender" value="male" checked> Male&emsp;&emsp;  &nbsp;&nbsp;&nbsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;
  <input type="radio" name="gender" value="female"> Female<br><br>
<label for="phone">PHONE NUMBER&emsp; &nbsp;&nbsp;&nbsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp;</label>
<input id="phone" name="phone" type="text" inputmode="numeric" maxlength="10" required>
<br>
  <br>

<label for="add">ADDRESS&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp;</label>
<textarea name="add" rows="3" cols="20"></textarea>
<br>
<label for="city">CITY&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp;</label>
    <input type="text" name="city" placeholder="enter city" required>
<br>
    <label for="bgrp">STATE&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp;</label>
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
<label for="pin">PINCODE&emsp;&nbsp;&emsp;&emsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp; &nbsp;&nbsp;&nbsp;&emsp;</label>
<input id="zip" name="zip" type="text" inputmode="numeric" maxlength="6" required>
<br>

<input type="submit" class="button"  name="d" value="Submit" color="blue">
</center>
<br></form>




<center>
<footer>
<P>COPYRIGHTS 2017..ALL RIGHT RESERVED</p>

</footer>
</center>

</body>
</html>