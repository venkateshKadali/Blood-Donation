
<html>
<head>
<style>
body{background-color:  #E60000;}
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
    background-color:white;
    width: 900px;
	height:470px;
    padding: 25px;
    border: 2px solid darksalmon;
	border-radius:25px 25px 25px 25px;
    margin-left: 200px;
	margin-right:100px;
	margin-top:-6px;
}
#ven2{
    border-style: solid;
	border-align:center;
	height:70px;
	width: 410px;
	padding:0px;
	margin-top:180px;
	margin-left: 20px;
	background-color: white;
    border-width: 2px;
	box-shadow: 0px 0px 20px #000000;
}
#ven1{
    border-style: solid;
	background-color:#FF6262;
    width: 450px;
	height:480px;
    padding: 0px;
    border-radius:25px 25px 25px 25px;
    margin-left: 0px;
	margin-right:100px;
	margin-top:-6px;
	box-shadow:0px 0px 20px red;
}
#dev1
{
    border-style: solid;
	border-align:center;
	height: 440px;
	width: 420px;
	padding:0px;
	margin-top:-240px;
	margin-left: 475px;
	background-color: white;
    border-width: 2px;
	box-shadow: 0px 0px 20px #000000;
}
#ex1{text-decoration: none;
	 color:black;	
	 }
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
border-style: solid;
border-color:black;
margin-left:160px;
margin-top:6px;
background-color:red;
height: 25px;
font-weight:bold;
padding:2px 5px;
text-align:center;
color:black;
box-shadow: 0px 0px 10px #000000;
}
#head1
{
margin-left:-1px;
margin-right:0px;
margin-top:-1px;
background-color:red;
height: 25px;
padding:0px 0px;
text-align:center;
color:white;
}

.in{width: 150px;}
#in2{border-radius:6px 6px 6px 6px;}
#table{margin-left:10px;margin-top:-10px;height: 330px;}
#td{padding-left:50px;}
#td1{padding-right:0px;font-weight:bold;}
#table1{margin-left:0px;margin-top:0px;height:5px;width:410px;}
#dev2{font-weight: bold;}
#ven3{margin-left:20px;}
</style>
</head>
<body>
<p class="dev">  </p>
<table id="app">
<tr >
 <td id="menu"><a href="addpatient.php" id="ex1"><b>Add Patient</b></a></td>
 <td id="menu"><a href="inbox1.php" id="ex1"><b>Patient Details</b></a></td>
 <td id="menu"><a href="logout.php" id="ex1"><b>Logout</b></a></td>
</tr>
</table>
<div id="ven" >
<div id="ven1">
<div id="ven2">

<?php
$conn=mysql_connect("localhost","root","venkatesh");
$db=mysql_select_db("venky",$conn);
$sql="SELECT * FROM patient ORDER BY patientID DESC LIMIT 1";
$rec=mysql_query($sql);
while($patient=mysql_fetch_assoc($rec))
{
echo "<table>
<tr>
<td><h2 id='head1'>Patient ID</h2></td>
<td><h2 id='head1'>Patient Name</h2></td>
<td class='in'><h2 id='head1'>Disease</h2></td>
</tr>";
echo "<tr id='dev2'>";	
echo "<td>".$patient['patientID']."</td>";
echo "<td>".$patient['name']."</td>";
echo "<td>".$patient['disease']."</td>";
echo "</tr>";
echo "</table>
</div>
<div id='dev1'>
<h1 id='head'>Patient Details</h1>
<table id='table'>
<tr>
<td id='td1'>Name</td>";
echo "<td id='td'>".$patient['name']."</td>";
echo "</tr>
<tr>
<td id='td1'>Age</td>
<td id='td'>".$patient['age']."</td>
</tr>
<tr>
<td id='td1'>Gender</td>
<td id='td'>".$patient['gender']."</td>
</tr>
<tr>
<td id='td1'>Blood Group</td>
<td id='td'>".$patient['bloodgroup']."</td>
</tr>
<tr>
<td id='td1'>Disease</td>
<td id='td'>".$patient['disease']."</td>
</tr>
<tr>
<td id='td1'>Required Date</td>
<td id='td'>".$patient['date']."</td>
</tr>
</table>";
}
?>
<a href="proceed.php"><input type="submit" value="Proceed" id="reg" name="submit"></a>
</div>
</div></div>
</body>
</html>