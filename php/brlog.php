<?php
session_start();
if(isset($_POST['submit']))
{
if(empty($_POST['name']) || empty($_POST['password']))
{	
//	echo "username or password is invalid";
}
else
{
$username=$_POST['name'];
$password=$_POST['password'];
$conn=mysql_connect("localhost","root","venkatesh");
$username=stripslashes($username);
$password=stripslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
$db=mysql_select_db("venky",$conn);
$query="SELECT * FROM brreg WHERE email='$username' AND password='$password'";
$res=mysql_query($query,$conn);
$row = mysql_num_rows($res);
if($row==1) 
{
$_SESSION['login_user'] = $username; 
header("location: brlog1.php");

} 
else 
 
{echo '<script language="javascript">';
	echo 'alert("Sorry You entered a wrong ID or password.")';
	echo '</script>';} 

mysql_close($conn);
}
}
?>
<html>
<head>
<style>
body{background-color: #E60000;}
#head
{
margin-left: 2px;
margin-right: 2px;
margin-top:1px;
background-color:red;
height: 30px;
text-align:center;
color:white;
}
#reg
{
border-style: solid;
border-color: black;
margin-left:150px;
background-color:red;
height: 20px;
width: 80px;
text-align:center;
color:black;
font-weight: bold;
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
    background-image:url("blood10.jpg");
	background-repeat: no-repeat;
	background-position: right;
	background-size: 450px 400px;
	background-color:white;
    width: 900px;
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
	border-color: red;
	background-color:#FF6262;
    width: 400px;
	height:400px;
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
	height: 220px;
	margin-top:70px;
	background-color: white;
    border-width: 2px;
	box-shadow: 10px 10px 10px #000000;
}

#in{height: 30px;
	width: 200px;
border-radius:6px 6px 6px 6px;}
#in1{height: 30px;
	width: 63px;
border-radius:6px 6px 6px 6px;}
#in2{border-radius:6px 6px 6px 6px;}
#table{height:80px;}


#td
{
padding-left:50px; 
}
#td1{padding-right:0px;}
#a{color: black;
margin-left: 100px;}
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
 <td id="menu"><a href="blood.html" id="ex1"><b>Home</b></a></td>
 <td id="menu"><a href="bdlog.php" id="ex1"><b>Blood Donor</b></a></td>
 <td id="menu"><a href="brlog.php" id="ex1"><b>Blood Recipient</b></a></td>
</tr>
</table>
<form action="brlog.php" method="post" id="f1">
<div id="ven" >
<div id="ven1">
<div class="dev1">
<h2 id="head">Blood Recipient Login</h2>
<table id="table">
<tr>
<td id="td1"><b>Login:</b></td>
<td id="td"><input type="email" name="name" id="in"></td>
</tr>
<tr><td id="td1"><b>Password:</b></td>
<td id="td"><input type="password" name="password" id="in"></td>
</tr></table></br>
<div><input type="submit" name="submit" value="Login" id="reg" onclick="validate()"></div></br>
<a href="brreg.php" id="a"><b>New User? Register Now</b></a>
</div></div></div>
</form>
</body>
</html> 