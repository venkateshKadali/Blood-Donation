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
	background-image: url("blood6.jpg");
	background-position: right;
	background-repeat: no-repeat;
	background-size: 400px 250px;
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
	height: 300px;
	width: 400px;
	padding:0px;
	margin-top:20px;
	margin-left: 0px;
	background-color: white;
    border-width: 2px;
	box-shadow: 0px 0px 20px #000000;
}

#ven1{
    border-style: solid;
	border-color: red;
	background-color:#FF6262;
    width: 400px;
	height:420px;
    padding: 25px;
    border-radius:25px 25px 25px 25px;
    margin-left: 0px;
	margin-right:100px;
	margin-top:-6px;
	box-shadow:0px 0px 20px red;
}
h3{margin-top: -5px;}
#ven3 {
border-style:solid;
font-weight:bold;
border-color:black;
margin-top:20px;
margin-left:130px;
background-color:red;
height: 25px;
text-align:center;
color:black;
box-shadow: 0px 0px 10px #000000;
}
#ex1{text-decoration: none;
	 color:black;	}
#head1
{
margin-left:-2px;
margin-top:-1px;
font-weight:bold;
background-color:red;
height: 50px;
width: 98px;
text-align:center;
color:white;
}
</style>
</head>
<body>
<div class="dev"></div></br>
<table id="app">
<tr >
 <td id="menu"><a href="brlog1.php" id="ex1"><b>Add Patient</b></a></td>
 <td id="menu"><a href="addpatient.php" id="ex1"><b>Patient Details</b></a></td>
 <td id="menu"><a href="logout.php" id="ex1"><b>Logout</b></a></td>
</tr>

</table>
<div id="ven" >
<div id="ven1"><h3 align="center">Donors Who Can Donate Blood Group X residing at Y</h3>
<div id="ven2">
<script type=text/javascript>
function validate()
{
alert( "send successfully");
}
</script>
<?php
$conn=mysql_connect("localhost","root","venkatesh");
$db=mysql_select_db("venky",$conn);
$i=0;
$res=mysql_query("SELECT * FROM patient ORDER BY patientID DESC LIMIT 1");
$res3=mysql_fetch_array($res);
$var4=$res3['date'];
$var=$res3['patientID'];
$var1=$res3['hosname'];
$var2=mysql_query("SELECT * FROM brreg WHERE hospital='$var1'");
$res2=mysql_fetch_array($var2);
$var3=$res2['email'];
$res1=mysql_query("SELECT  * FROM patient,brreg,bdreg WHERE patient.patientID='$var' AND patient.hosname=brreg.hospital AND brreg.city=bdreg.city AND bdreg.bloodgroup=patient.bloodgroup");
$res5=mysql_query("SELECT  * FROM patient,brreg,bdreg WHERE patient.patientID='$var' AND patient.hosname=brreg.hospital AND brreg.city=bdreg.city AND bdreg.bloodgroup=patient.bloodgroup");
if(isset($_POST['sub']))
{
while($ven=mysql_fetch_array($res5))
{
$ven1=$ven['email'];
mysql_query("INSERT INTO mail VALUES('$var1','$var3','$var4','$ven1')");	
}
}
echo "<table id='table'>";
echo "<tr>";
echo "<td><h2 id='head1'>Donor Name</h2></td>
<td><h2 id='head1'>Donor City</h2></td>
<td><h2 id='head1'>Mobile Number</h2></td>
<td><h2 id='head1'>Blood Group</h2></td>
</tr>";

while($bdreg=mysql_fetch_array($res1))
{
echo "<tr>";
echo "<td>".$bdreg['name']."</td>";
echo "<td>".$bdreg['city']."</td>";
echo "<td>".$bdreg['mobile']."</td>";
echo "<td>".$bdreg['bloodgroup']."</td>";
echo "</tr>";
}

//$i=$i+1;
//if($i==1)



echo "</table>";
?>
</div>

<form action="proceed.php" method="post">
</br><input type="submit" onclick="validate()" name="sub" value="Send Requests" id="ven3">
</form>
</div></div>

</body>
</html>