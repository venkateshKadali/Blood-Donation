<?php
$conn=mysql_connect("localhost","root","venkatesh");
$db=mysql_select_db("venky",$conn);

if(isset($_POST['sub']))
{
$hospital=$_POST['hospital1'];
$hospaddr=$_POST['address1'];
$contactperson=$_POST['name1'];
$designation=$_POST['designation1'];
$state=$_POST['state1'];
$city=$_POST['city1'];
$contactno=$_POST['mobile1'];
$email=$_POST['email1'];
$password=$_POST['password1'];
$query = mysql_query("SELECT * FROM brreg WHERE email = '$email'"); 
if(!(empty($hospital) || empty($hospaddr) || empty($contactperson) || empty($designation) || empty($state) || empty($city) || empty($contactno) || empty($email) || empty($password)))
{
if(!$row = mysql_fetch_array($query))
{
	$sql="INSERT into brreg values('$hospital','$hospaddr','$contactperson','$designation','$state','$city','$contactno','$email','$password')";
	$query=mysql_query($sql,$conn);
	if($query)
	header('location: brlog.php');
}
else
{
	echo '<script language="javascript">';
	echo 'alert("Sorry this Email is already registered.")';
	echo '</script>';
	
}
}
}
?>

<html>
<head>
<style>
body{background-color: #E60000;}
.dev
{
    background-image:url("header.jpg");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 1000px 150px;
	border-style: solid;
	border-align:center;
	height: 150px;
	width:1000px;
	margin-left:170px;
    border-width: 2px;
	box-shadow: 0px 0px 30px #000000;
	}
#app{margin-left: 450px;}
#menu{
    background-color: white;
    padding: 8px 2px;
    border-radius: 8px 8px 0 0;
	display: inline;
	width:130px;
	text-align:center;
	font-family: Arial, Helvetica, sans-serif;
	}
#ven{
    background-color: white;
	background-image: url("blood8.jpg");
	background-repeat: no-repeat;
    background-size: 470px 400px;
	background-position: left;
	width: 900px;
	height:550px;
    padding: 25px;
    border: 2px solid darksalmon;
	border-radius:25px 25px 25px 25px;
    margin-left: 200px;
	margin-right:100px;
	margin-top:-6px;
}
#ven1{
    border-style: solid;
	border-color: red;
	background-color:#FF6262;
    width: 400px;
	height:520px;
    padding: 25px;
    border-radius:25px 25px 25px 25px;
    margin-left: 460px;
	margin-right:100px;
	margin-top:-6px;
	box-shadow:0px 0px 20px red;
}
.dev1
{
    border-style: solid;
	border-align:center;
	height: 390px;
	
	padding:70px;
	margin-top:-6px;
	background-color: white;
    border-width: 2px;
	box-shadow: 0px 0px 20px #000000;
}
#a1
{
margin-top:-65px;
background-color:red;
margin-right:-65px;
margin-left:-65px;
padding:6px 6px;
text-align:center;
color:white;
}
#a2
{
margin-left:-64px;
}
#a3
{
margin-left:-64px;
margin-top:-30px;
}
#table{height:420px;}
#td
{
padding-left:50px; 
}
#td1{padding-right:0px;}
#in{height: 30px;
	width: 200px;
border-radius:6px 6px 6px 6px;}
#in2{border-radius:6px 6px 6px 6px;}
#reg
{
border-style: solid;
border-color:black;
margin-left:160px;
margin-top:-5px;
background-color:red;
height: 25px;
font-weight:bold;
padding:5px;
text-align:center;
color:black;
box-shadow: 0px 0px 10px #000000;
}
#ex1{text-decoration: none;
	 color:black;	}
</style>
</head>
<script type=text/javascript>
function validate()
{
	var hospital1=f1.hospital1.value;
	var address1=f1.address1.value;
	var name1=f1.name1.value;
	var designation1=f1.designation1.value;
	var state1=f1.state1.value;
	var city1=f1.city1.value;
	var mobile1=f1.mobile1.value;
	var email1=f1.email1.value;
	var password1=f1.password1.value;
	var ph_len=mobile1.length;
	if(hospital1=="" || address1=="" || name1=="" || designation1=="" || mobile1==""|| state1=="" || city1=="" || email1=="" || password1=="")
		alert("Some fields are not filled");
		else	if(ph_len>10 || ph_len<10 ||isNaN(mobile1))
				alert("Invalid mobile No.");	
					else
						document.forms["f1"].submit();
}
</script>
<body>
<p class="dev">  </p>
<table id="app">
<tr >
 <td id="menu"><a href="blood.html" id="ex1"><b>Home</b></a></td>
 <td id="menu"><a href="bdlog.php" id="ex1"><b>Blood Donor</b></a></td>
 <td id="menu"><a href="brlog.php" id="ex1"><b>Blood Recipient</b></a></td>
</tr>
</table>
<form action="brreg.php" method="post" id="f1">
<div id="ven" >
<div id="ven1">
<div class="dev1"><h2 id="a1">New Hospital Registration</h2>
<table id="table">
<tr><td id="td1"><b id="a2">Hospital:</b></td><td id="td"><input type="text" name="hospital1" id="in"></td></tr>
<tr><td id="td1"><b id="a2">Hospital Address: </b></td><td id="td"><textarea  rows="5" cols="25" name="address1" id="in2"></textarea></td></tr>
<tr><td id="td1"><b id="a2">Contact Person: </b></td><td id="td"><input type="text" name="name1" id="in"></td></tr>
<tr><td id="td1"><b id="a2">Designation:</b></td><td id="td"><input type="text" name="designation1" id="in"></td></tr>
<tr><td id="td1"><b id="a2">State:</b></td>
<td id="td"><select name="state1" id="in">
	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option><option type="button" value="Andhra Pradesh" onclick="hell()">Andhra Pradesh</option><option type="button" value="Arunachal Pradesh" onclick="hell1()">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Pondicherry">Pondicherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tamil Nadu">Telangana</option><option value="Tripura">Tripura</option><option value="Uttaranchal">Uttaranchal</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="West Bengal">West Bengal</option>
</select></td></tr>
<tr>
<td id="td1"><b id="a2">City:</b></td>
<td id="td"><select name="city1" id="in">
	<option value="mumbai">Mumbai<option value="chennai">Chennai<option value="Hyderabad">Hyderabad<option value="Vijayawada">Vijayawada<option value="Banglore">Banglore<option value="Vishakapatnam">Vishakapatnam<option value="Delhi">Delhi<option value="Raipur">Raipur<option value="Chandigarh">Chandigarh<option value="Bubaneshwar">Bubaneshwar<option value="Ahmedabad">Ahmedabad<option value="Jaipur">Jaipur<option value="Lucknow">Lucknow<option value="Kolkata">Kolkata<option value="Surat">Surat<option value="Pune">Pune<option value="Kanpur">Kanpur<option value="Nagpur">Nagpur<option value="Indore">Indore<option value="Thane">Thane<option value="Patna">Patna<option value="Aurangabad">Aurangabad<option value="Srinagar">Srinagar<option value="Varanasi">Varanasi<option value="Meerut">Meerut<option value="Rajkot">Rajkot
</select></td>
</tr>
<tr><td id="td1"><b id="a2">Contact number:</b></td><td id="td"><input type="textbox" name="mobile1" id="in"></td></tr>
<tr><td id="td1"><b id="a2">EMAIL-ID:</b></td><td id="td"> <input type="email" name="email1" id="in"></td></tr>
<tr><td id="td1"><b id="a2">Password:</b></td><td id="td"><input type="password" name="password1" id="in"></td></tr>
</table>
<b><p id="a2"> <input type="submit" name="sub" value="Register" id="reg" onclick="validate()"></p></div>
</form>
</body>
</html>