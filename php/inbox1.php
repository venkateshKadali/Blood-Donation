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
#app{margin-left: 500px;}
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
    background-color: #FF6262;
    width: 850px;
	height:450px;
    padding: 25px;
    border: 2px solid darksalmon;
	border-radius:25px 25px 25px 25px;
    margin-left: 200px;
	margin-right:100px;
	margin-top:-6px;
}
#ven1{
    border-style: solid;
	background-color:white;
    width: 600px;
	height:400px;
    padding: 25px;
    border-radius:25px 25px 25px 25px;
    margin-left: 0px;
	margin-right:100px;
	margin-top:-6px;
	box-shadow:0px 0px 20px black;
}
#ven2{
    background-image: url("blood5.jpg");
	background-repeat: no-repeat;
	background-position: center;
	background-size: 170px 450px;
	border-style: solid;
	background-color:white;
    width: 170px;
	height:450px;
    border-radius:25px 25px 25px 25px;
    margin-left: 680px;
	margin-top:-450px;
	box-shadow:0px 0px 20px black;
}
.dev1
{
    border-style: solid;
	border-align:center;
	height: 330px;
	margin-top:20px;
	background-color: white;
    border-width: 2px;
	box-shadow: 0px 0px 20px #000000;
}
.dev2
{
    border-style: solid;
	border-align:center;
	height: 130px;
	width: 200px;
	margin-top:0px;
	margin-left: 50px;
	background-color: white;
    border-width: 2px;
	box-shadow: 0px 0px 20px #000000;
}
#table1{height:130px;width:200px;}
#td{margin-top:-10px;}
#ex1{text-decoration: none;
	 color:black;	}
#table{height:330px;}
#tr{width:100px;}
</style>
</head>
<body>
<p class="dev">  </p>
<table id="app">
<tr>
 <td id="menu"><a href="inbox.php" id="ex1"><b>Inbox</b></a></td>
 <td id="menu"><a href="logout.php" id="ex1"><b>Logout</b></a></td>
</tr>
</table>
<div id="ven" >
<div id="ven1"><h1 align="center" id="td">MailBox</h1>
<div class="dev1">
<?php
$conn=mysql_connect("localhost","root","venkatesh");
$db=mysql_select_db("venky",$conn);
//if(isset($_POST['sub']))
{
$res=mysql_query("SELECT * FROM patient ORDER BY patientID DESC LIMIT 1");
$res3=mysql_fetch_array($res);
$var1=$res3['hosname'];
$var2=$res3['message'];
$var3=$res3['patientID'];
$var4=$res3['name'];
$var5=$res3['bloodgroup'];
$var6=$res3['disease'];
$var7=$res3['date'];
$res1=mysql_query("SELECT * FROM brreg WHERE '$var1'=hospital");
while($brreg=mysql_fetch_array($res1))
{
echo "<table id='table'>
<tr><td ><b>From:</b></td>";
echo "<td>".$brreg['hospital']." </td></tr>";
echo "<tr><td ><b>Email:</b></td>";
echo "<td>".$brreg['email']."</td></tr>";
echo "<tr><td ><b>Message:</b></td>";
echo "<td>".$var2."</td></tr>";
echo "<tr><td ><b>Hospital Details:</b></td>";
echo "<td>".$brreg['hospaddr']."</td></tr>";
echo "<tr><td><b>Date</b></td><td>".$var7."</td></tr>";
echo "<tr><td><b>Patient Details:</b></td>";
echo "<td>
<div class='dev2'>
<table id='table1' border='1px'>
<tr><td>Patient ID</td>";
echo "<td>".$var3."</td></tr>";
echo "<tr><td>Patient Name</td><td>".$var4."</td></tr>";
echo "<tr><td>Blood Group</td><td>".$var5."</td></tr>";
echo "<tr><td>Disease</td><td>".$var6."</td></tr>";
echo "</table>
</div></td></tr>
</table>";
}
}
?>
</div></div>
<div id="ven2"></div>
</div>
</body>
</html>