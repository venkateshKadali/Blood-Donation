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
    border-style: solid;
	background-color:white;
    background-image:url('blood9.jpg');
	background-repeat: no-repeat;
	background-position: center;
	background-size: 200px 150px;
	width: 120px;
	height:400px;
    padding: 25px;
    border-radius:25px 25px 25px 25px;
    margin-left: 670px;
	margin-right:100px;
	margin-top:-450px;
	box-shadow:0px 0px 20px black;
}
.dev1
{
    border-style: solid;
	border-align:center;
	height: 330px;
	padding:0px;
	margin-top:30px;
	background-color: white;
    border-width: 2px;
	box-shadow: 0px 0px 20px #000000;
	overflow: auto;
}
#ven3{margin-top:-15px;}
#ex1{text-decoration: none;
	 color:black;	}
#head
{
background-color:red;
height: 30px;
width:194px;
text-align:center;
color:white;
}
#table{height:00px;width:200px;}
#td1{
background-color:red;
height: 30px;
width:75px;
text-align:center;
color:white;
}

</style>
</head>

<body>
<div class="dev">  </div></br>
<table id="app">
<tr >
 <td id="menu"><a href="inbox.php" id="ex1"><b>Inbox</b></a></td>
 <td id="menu"><a href="logout.php" id="ex1"><b>Logout</b></a></td>
</tr>
</table>
<div id="ven" >
<div id="ven1"><h1 align="center" id="ven3">MailBox</h1>
<div class="dev1">



<?php
$conn=mysql_connect("localhost","root","venkatesh");
$db=mysql_select_db("venky",$conn);

$hel=mysql_query("SELECT name FROM bdlog ORDER BY mailID DESC LIMIT 1");
$hel2=mysql_fetch_array($hel);
$username=$hel2['name'];
$res=mysql_query("SELECT * FROM mail WHERE dmail='$username'");
echo "<table id='table'>";
echo "<tr><td><h2 id='head'>From</h2></td>
<td><h2 id='head'>Email</h2></td>
<td><h2 id='head'>Date</h2></td></tr>";
while($mail=mysql_fetch_array($res))
{	
echo "<tr>";
echo "<td>".$mail['from']."</td>";
echo "<td>".$mail['email']."</td>";
echo "<td><a href='inbox1.php' name='sub'><form action='inbox1.php' method='post'>".$mail['date']."</form></a></td>";
echo "</tr>";
}
echo "</table>";
?>
</div></div>
<div id="ven2"></div>
</div>
</body>
</html>
