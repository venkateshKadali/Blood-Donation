<?php
$conn=mysql_connect("localhost","root","venkatesh");
$db=mysql_select_db("venky",$conn);
if(isset($_POST['submit']))
{
$name1=$_POST['name'];
$hosname1=$_POST['hosname'];
$age1=$_POST['age'];
$gender1=$_POST['gender'];
$bloodgroup1=$_POST['bloodgroup'];
$disease1=$_POST['disease'];
$date1=$_POST['date'];
$message1=$_POST['message'];
if(empty($name1) || empty($hosname1) || empty($age1) || empty($gender1) || empty($bloodgroup1) || empty($disease1) || empty($date1) || empty($message1))
{}
else
{
	$rec=mysql_query('SELECT * FROM patient');
	$numrows=mysql_num_rows($rec);
	$patientID=$numrows+1;
	$sql="INSERT INTO patient VALUES('$patientID','$name1','$hosname1','$age1','$gender1','$bloodgroup1','$disease1','$date1','$message1')";
	$x=mysql_query($sql,$conn);
	if($x)
	header("location: addpatient.php");
}
}
?> 	
<html>
<head>
<style>
body{background-color: #E60000;}
#head
{
margin-left:2px;
margin-right:2px;
margin-top:2px;
background-color:red;
height: 30px;
padding:6px;
text-align:center;
color:white;

}
#reg
{
border-style:solid;
font-weight:bold;
border-color:black;
margin-left:150px;
margin-right:120px;
background-color:red;
height: 25px;
text-align:center;
color:black;
box-shadow: 0px 0px 10px #000000;
}
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
    background-image: url("blood11.jpg");
	background-size: 450px 620px;
	background-color: white;
	background-position: right;
	background-repeat: no-repeat;
	background-color:white;
    width: 900px;
	height:500px;
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
	height:470px;
    padding: 25px;
    border-radius:25px 25px 25px 25px;
    margin-left: 0px;
	margin-right:100px;
	margin-top:-6px;
	box-shadow:0px 0px 20px red;
}
.dev1
{
    border-style: solid;
	height: 480px;
	margin-top:-6px;
	background-color: white;
    border-width: 2px;
	box-shadow: 0px 0px 20px #000000;
}
#in{height: 30px;
	width: 200px;
border-radius:6px 6px 6px 6px;}
#in2{border-radius:6px 6px 6px 6px;}
#table{margin-top:-10px;height: 380px;}
#td{padding-left:50px;}
#td1{padding-right:0px;}
#ex1{text-decoration: none;
	 color:black;	}


</style>
</head>
<script type=text/javascript>
function validate()
{
	var name=f1.name.value;
	var hosname=f1.hosname.value;
	var age=f1.age.value;
	var gender=f1.gender.value;
	var date=f1.date.value;
	var message=f1.message.value;
	var bloodgroup=f1.bloodgroup.value;
	var disease=f1.disease.value;
	if(name=="" || hosname=="" || gender=="" || age=="" || date=="" || message=="" || disease=="" || bloodgroup=="")
		alert("Some fields are not filled");
			else
						document.forms["f1"].submit();
}
</script>
<body>
<p class="dev">  </p>
<table id="app">
<tr >
 <td id="menu"><a href="brlog1.php" id="ex1"><b>Add Patient</b></a></td>
 <td id="menu"><a href="addpatient.php" id="ex1"><b>Patient Details</b></a></td>
 <td id="menu"><a href="logout.php" id="ex1"><b>Logout</b></a></td>
</tr> 
</table>
<form action="brlog1.php" method="post" id="f1">
<div id="ven" >
<div id="ven1"><div class="dev1">
<h1 id="head">Add New Patient</h1>
<table id="table">
<tr>
<td id="td1"><b>Patient Name</b></td><td id="td"><input id="in" type="textbox" name="name"></td>
</tr>
<tr>
<td id="td1"><b>Hospital Name</b></td><td id="td"><input id="in" type="textbox" name="hosname"></td>
</tr>
<tr>
<td id="td1"><b>Patient Age</b></td><td id="td"><input type="textbox" id="in" name="age"></td>
</tr>
<tr>
<td id="td1"><b>Patient Gender</b></td><td id="td"><select name="gender" id="in"><option name="male" value="male" id="in">Male</option><option name="female" value="female" id="in">Female</option></td>
</tr> 
<tr>
<td id="td1"><b>Blood Group</b></td>
<td id="td">
<select name="bloodgroup" id="in">
	<option value="O+">O+<option value="O-">O-<option value="A+">A+<option value="A-">A-<option value="B+">B+<option value="B-">B-<option value="AB+">AB+<option value="AB-">AB-
</select>
</td>
</tr>
<tr>
<td id="td1"><b>Patient Disease</b></td><td id="td"><input type="textbox" id="in" name="disease"></td>
</tr>
<tr>
<td id="td1"><b>Required Date (yyyy/mm/dd)</b></td><td id="td"><input id="in" type="textbox" name="date"></td>
</tr>
<tr height="100">
<td id="td1"><b>Message</b></td>
<td id="td"><textarea rows="5" cols="25" type="textbox" id="in2" name="message"></textarea></td>
</tr>
</table>
<input type="submit" value="Add Patient" id="reg" name="submit" onclick="validate()">
</div></div></div>
</form></body>
</html>