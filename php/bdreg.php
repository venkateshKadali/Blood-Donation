<?php
$conn=mysql_connect("localhost","root","venkatesh");
$db=mysql_select_db("venky",$conn);
if(isset($_POST['submit']))
{
$name1=$_POST['name'];
$gender1=$_POST['gender'];
$day1=$_POST['day'];
$month1=$_POST['month'];
$year1=$_POST['year'];
$bloodgroup1=$_POST['bloodgroup'];
$address1=$_POST['address'];
$state1=$_POST['state'];
$city1=$_POST['city'];
$mobile1=$_POST['mobile'];
$email1=$_POST['email'];
$password1=$_POST['password'];
$query = mysql_query("SELECT * FROM bdreg WHERE email = '$email1'"); 

	if(!(empty($_POST['name']) || empty($_POST['gender']) || empty($_POST['day']) || empty($_POST['month']) || empty($_POST['year']) || empty($_POST['bloodgroup']) || empty($_POST['address']) || empty($_POST['state']) || empty($_POST['state']) || empty($_POST['city']) || empty($_POST['mobile']) || empty($_POST['email']) || empty($_POST['password'])))
	{
	if(!$row = mysql_fetch_array($query))
	{
	$sql="INSERT INTO bdreg VALUES('$name1','$gender1','$day1','$month1','$year1','$bloodgroup1','$address1','$state1','$city1','$mobile1','$email1','$password1')";
	$x=mysql_query($sql,$conn);	
	if($x)
	header('location: bdlog.php');
	}
	else{echo '<script language="javascript">';
	echo 'alert("Sorry this Email is already registered.")';
	echo '</script>';}
	} 
}
?>
<html>
<head>
<style>
body{background-color:#E60000;}
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
padding:5px;
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
	text-decoration: none;
	}
#ven{
    background-image: url("blood3.jpg");
	background-size: 450px 300px;
	background-color: white;
	background-position: left;
	background-margin-top: 100px;
	background-margin-right:100px;
	background-repeat: no-repeat;
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
	margin-top:-9px;
	box-shadow:0px 0px 20px red;
}
.dev1
{
    border-style: solid;
	height: 530px;
	margin-top:-5px;
	background-color: white;
    border-width: 2px;
	box-shadow: 0px 0px 20px #000000;
}
#in{height: 30px;
	width: 200px;
border-radius:6px 6px 6px 6px;}
#in1{height: 30px;
	width: 63px;
border-radius:6px 6px 6px 6px;}
#in2{border-radius:6px 6px 6px 6px;}
#table{height:420px;}
#td
{
padding-left:50px; 
}
#td1{padding-right:0px;}
#ex1{text-decoration: none;
	 color:black;	}
</style>
</head>
<script type=text/javascript>
function validate()
{
	var name=f1.name.value;
	var gender=f1.gender.value;
	var day=f1.day.value;
	var month=f1.month.value;
	var year=f1.year.value;
	var bloodgroup=f1.bloodgroup.value;
	var address=f1.address.value;
	var state=f1.state.value;
	var city=f1.city.value;
	var mobile=f1.mobile.value;
	var email=f1.email.value;
	var password=f1.password.value;
	var ph_len=mobile.length;
	if(name=="" || gender=="" || day=="" || month=="" || year=="" || mobile=="" || bloodgroup=="" || address=="" || state=="" || city=="" || email=="" || password=="")
		alert("Some fields are not filled");
		else	if(ph_len>10 || ph_len<10)
				alert("Invalid mobile No.");
			else	if(isNaN(mobile))
     		     		alert("Invalid Phone no.");	
					else
						document.forms["f1"].submit();
}
</script>

<body>

<div class="dev"></div></br>
<table id="app">
<tr >
 <td id="menu"><b><a href="blood.html" id="ex1">Home</a></b></td>
 <td id="menu"><b><a href="bdlog.php" id="ex1">Blood Donor</a></b></td>
 <td id="menu"><b><a href="brlog.php" id="ex1">Blood Recipient</a></b></td>
</tr>
</table>
<form action="bdreg.php" method="post" id="f1">
<div id="ven" >
<div id="ven1" >
<div class="dev1">
<h1 id="head">Donor Registration</h1>
<table id="table">
<tr>
<td id="td1"><b id="name">Name:</b></td>
<td id="td"><input type="text" name="name" id="in"></td>
</tr>
<tr>
<td id="td1"><b id="name">Gender:</b></td>
<td id="td"><select name="gender" id="in"><option value="male" name="male" id="in">Male</option><option value="female" name="female">female</option></select></td></tr>

<tr><td id="td1"><b id="name">DOB:</b></td>
<td id="td">
<select name="day" id="in1">
	<option value="1">1<option value="2">2	<option value="3">3	<option value="4">4	<option value="5">5	<option value="6">6	<option value="7">7	<option value="8">8	<option value="9">9	<option value="10">10	<option value="11">11	<option value="12">12	<option value="13">13	<option value="14">14	<option value="15">15	<option value="16">16	<option value="17">17	<option value="18">18	<option value="19">19	<option value="20">20	<option value="21">21	<option value="22">22	<option value="23">23	<option value="24">24	<option value="25">25	<option value="26">26	<option value="27">27	<option value="28">28	<option value="29">29	<option value="30">30	<option value="31">31
</select>
<select name="month" id="in1">
	<option value="1">Jan	<option value="2">Feb	<option value="3">Mar	<option value="4">Apr	<option value="5">May	<option value="6">Jun	<option value="7">Jul	<option value="8">Aug	<option value="9">Sep	<option value="10">Oct	<option value="11">Nov	<option value="12">Dec
</select>
<select name="year" id="in1">
	<option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option>	<option value="1999">1999</option><option value="1998">1998</option>	<option value="1997">1997</option>	<option value="1996">1996</option	<option value="1995">1995</option>	<option value="1994">1994</option>	<option value="1993">1993</option>	<option value="1992">1992</option>	<option value="1991">1991</option>	<option value="1990">1990</option>	<option value="1989">1989</option>	<option value="1988">1988</option>	<option value="1987">1987</option>	<option value="1986">1986</option>	<option value="1985">1985</option>	<option value="1984">1984</option>	<option value="1983">1983</option>	<option value="1982">1982</option>	<option value="1981">1981</option>	<option value="1980">1980</option>	<option value="1979">1979</option>	<option value="1978">1978</option>	<option value="1977">1977</option>	<option value="1976">1976</option>	<option value="1975">1975</option>	<option value="1974">1974</option>	<option value="1973">1973</option>	<option value="1972">1972</option>	<option value="1971">1971</option>	<option value="1970">1970</option>	<option value="1969">1969</option>	<option value="1968">1968</option>	<option value="1967">1967</option>	<option value="1966">1966</option>	<option value="1965">1965</option>	<option value="1964">1964</option>	<option value="1963">1963</option>	<option value="1962">1962</option>	<option value="1961">1961</option>	<option value="1960">1960</option>	<option value="1959">1959</option>	<option value="1958">1958</option>	<option value="1957">1957</option>	<option value="1956">1956</option>	<option value="1955">1955</option>	<option value="1954">1954</option>	<option value="1953">1953</option>	<option value="1952">1952</option>	<option value="1951">1951</option>	<option value="1950">1950</option>	<option value="1949">1949</option>	<option value="1948">1948</option>	<option value="1947">1947</option>	<option value="1946">1946</option>	<option value="1945">1945</option>	<option value="1944">1944</option>	<option value="1943">1943</option>	<option value="1942">1942</option>	<option value="1941">1941</option>	<option value="1940">1940</option>	<option value="1939">1939</option>	<option value="1938">1938</option>	<option value="1937">1937</option>	<option value="1936">1936</option>	<option value="1935">1935</option>	<option value="1934">1934</option>	<option value="1933">1933</option>	<option value="1932">1932</option>	<option value="1931">1931</option>	<option value="1930">1930</option>	<option value="1929">1929</option>	<option value="1928">1928</option>	<option value="1927">1927</option>	<option value="1926">1926</option>	<option value="1925">1925</option>	<option value="1924">1924</option>	<option value="1923">1923</option>	<option value="1922">1922</option>	<option value="1921">1921</option>	<option value="1920">1920</option>	<option value="1919">1919</option>	<option value="1918">1918</option>	<option value="1917">1917</option>	<option value="1916">1916</option>	<option value="1915">1915</option>	<option value="1914">1914</option>	<option value="1913">1913</option>	<option value="1912">1912</option>	<option value="1911">1911</option>	<option value="1910">1910</option>	<option value="1909">1909</option>	<option value="1908">1908</option>	<option value="1907">1907</option>	<option value="1906">1906</option>	<option value="1905">1905</option>	<option value="1904">1904</option>	<option value="1903">1903</option>	<option value="1902">1902</option>	<option value="1901">1901</option>	<option value="1900">1900</option>
</select></td></tr>
<tr>
<td id="td1"><b id="name">BloodGroup:</b></td>
<td id="td"><select name="bloodgroup" id="in">
	<option value="O+">O+<option value="O-">O-<option value="A+">A+<option value="A-">A-<option value="B+">B+<option value="B-">B-<option value="AB+">AB+<option value="AB-">AB-
</select></td>
</tr>
<tr height="100">
<td id="td1"><b id="name">Present Address:</b></td>
<td id="td"><textarea rows="5" cols="25"  id="in2" name="address"></textarea></td>
</tr>
<tr>
<td id="td1"><b id="name">State:</b></td>
<td id="td"><select name="state" id="in">
	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option><option type="button" value="Andhra Pradesh" onclick="hell()">Andhra Pradesh</option><option type="button" value="Arunachal Pradesh" onclick="hell1()">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Pondicherry">Pondicherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tamil Nadu">Telangana</option><option value="Tripura">Tripura</option><option value="Uttaranchal">Uttaranchal</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="West Bengal">West Bengal</option>
</select></td>
</tr>
<tr>
<td id="td1"><b id="name">City:</b></td>
<td id="td"><select name="city" id="in">
		<option value="mumbai">Mumbai<option value="chennai">Chennai<option value="Hyderabad">Hyderabad<option value="Vijayawada">Vijayawada<option value="Banglore">Banglore<option value="Vishakapatnam">Vishakapatnam<option value="Delhi">Delhi<option value="Raipur">Raipur<option value="Chandigarh">Chandigarh<option value="Bubaneshwar">Bubaneshwar<option value="Ahmedabad">Ahmedabad<option value="Jaipur">Jaipur<option value="Lucknow">Lucknow<option value="Kolkata">Kolkata<option value="Surat">Surat<option value="Pune">Pune<option value="Kanpur">Kanpur<option value="Nagpur">Nagpur<option value="Indore">Indore<option value="Thane">Thane<option value="Patna">Patna<option value="Aurangabad">Aurangabad<option value="Srinagar">Srinagar<option value="Varanasi">Varanasi<option value="Meerut">Meerut<option value="Rajkot">Rajkot
</select></td>
</tr>
<tr>
<td id="td1"><b id="name">Mobile Number:</b></td>
<td id="td"><input type="textbox" id="in" name="mobile"></td>
</tr>
<tr>
<td id="td1"><b id="name">Email:</b></td>
<td id="td"><input type="email" id="in" name="email"></td>
</tr>
<tr>
<td id="td1"><b id="name">Password:</b></td>
<td id="td"><input type="password" id="in" name="password"></td>
</tr>
</table>
<input type="submit" id="reg" name="submit" value="Submit" onclick="validate()"> 
</div>
</div>
</div>
</form>
</body>
</html>

