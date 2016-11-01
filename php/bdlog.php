<?php
session_start();
$conn=mysql_connect("localhost","root","venkatesh");
$db=mysql_select_db("venky",$conn);
if(isset($_POST['sub']))
{
if(empty($_POST['name']) || empty($_POST['password']))
{	}
else
{
$username=$_POST['name'];
$password=$_POST['password'];
$conn=mysql_connect("localhost","root","venkatesh");

$db=mysql_select_db("venky",$conn);

$rec=mysql_query("SELECT * FROM bdlog");
$numrows=mysql_num_rows($rec);
$mailID=$numrows+1;
mysql_query("INSERT INTO bdlog VALUES('$mailID','$username','$password')");

$query="SELECT * FROM bdreg WHERE email='$username' AND password='$password'";
$res=mysql_query($query,$conn);
$row = mysql_num_rows($res);
if($row==1) 
{
$_SESSION['name'] = $username; 
header("location: inbox.php");
} 
else 
{echo '<script language="javascript">';
	echo 'alert("Sorry You entered a wrong ID or password.")';
	echo '</script>';} }

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
    background-color:white;
	background-image: url("flashimg.gif");
	background-size: 700px 380px;
	background-position: center;
	background-repeat: no-repeat;
    width: 900px;
	height:350px;
    padding: 25px;
    border: 3px solid darksalmon;
	border-radius:25px 25px 25px 25px;
    margin-left: 200px;
	margin-right:100px;
	margin-top:-6px;
}

#reg
{
font-weight: bold;
border-style: solid;
border-color: black;
margin-left:580px;
margin-top:-10px;
background-color:red;
height: 20px;
width: 80px;
text-align:center;
color:black;
box-shadow: 0px 0px 10px #000000;
}
#a{color: black;
margin-left: 540px;
margin-top:-10px;}
#table
{
height:60px;
margin-left:480px;
margin-top:-20px;
}
#td
{
padding-left:10px; 
}
#td1{padding-right:0px;}

#in{height: 30px;
	width: 200px;
border-radius:6px 6px 6px 6px;}
#in1
{color: yellow;
margin-left: 520px;
margin-top: -10px;}
#ex1{text-decoration: none;
	 color:black;	}
</style>
</head>
<script type=text/javascript>
function validate()
{
	var name=f1.name.value;
	var pass=f1.password.value;
	if(name=="" || pass=="")
		alert("some fields are not filled");
				else
						document.forms["f1"].sub();
}
</script>
<body>
<p class="dev">  </p>
<table id="app">
<tr >
 <td id="menu"><b><a href="blood.html" id="ex1">Home</a></b></td>
 <td id="menu"><b><a href="bdlog.php" id="ex1">Blood Donor</a></b></td>
 <td id="menu"><b><a href="brlog.php" id="ex1">Blood Recipient</a></b></td>
</tr>
</table>
<form action="bdlog.php" method="post" id="f1">
<div id="ven" style="font-weight:bold" >
<h2 id="in1" >Blood Donor Login</h2>
<table id="table">
<tr>
<td id="td1"><b>Login:</b></td>
<td id="td"><input type="email" name="name" id="in"></td>
</tr>
<tr><td id="td1"><b>Password:</b></td>
<td id="td"><input type="password" name="password" id="in"></td>
</tr></table></br>
<div><input type="submit" onclick="validate()" name="sub" value="Login" id="reg" ></div></br>
<a href="bdreg.php" id="a"><b>New User? Register Now</b></a>
</div>
</form>
</body>
</html>