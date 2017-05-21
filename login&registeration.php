<html>
<head>
<title>REGISTER ME </title>
<style>
.change_color{
	color: #FF0000;
}
</style>
</head>
<body>
<?php
$firstname=$lastname=$username=$password=$repassword=$country=$email=$day=$month=$year=$gender=$institute=$phoneno="";
$errfirstname=$errlastname=$errusername=$errpassword=$errrepassword=$errcountry=$erremail=$errday=$errmonth=$erryear=$errgender=$errinstitute=$errphoneno="";

function checkInput($data)
{
	$data =trim($data);
	$data = htmlspecialchars($data);
	$data = stripslashes($data);
	return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["firstname"])) //firstname validation
	{
		$errfirstname = "Feild Required";	
	}
	else{
		$firstname = checkInput($_POST["firstname"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$firstname)){
			$errfirstname = "Field must contain only alphabets and spaces";
		}
	}
	
	if(empty($_POST["lastname"])) //lastname validation
	{
		$errlastname = "Feild Required";
	}
	else{
		$lastname = checkInput($_POST["lastname"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$lastname)){
			$errlastname = "Field must contain only alphabets and spaces";
		}
	}
	
	if(empty($_POST["username"])) //username validation
	{
		$errusername = "Feild Required";
	}
	else{
		$username = checkInput($_POST["username"]);
		/*if(!preg_match("/^[a-zA-Z ]*$/",$username)){
			$errusername = "Field must contain only alphabets and spaces";
		}*/
	}


	if(empty($_POST["password"])) //password validation
	{
		$errpassword = "Feild Required";
	}
	else{
		$password = checkInput($_POST["password"]);
		}
	
	
	if(empty($_POST["repassword"])) //repassword validation
	{
		$errrepassword = "Feild Required";
	}
	else{
		$repassword = checkInput($_POST["repassword"]);
		
		if($_POST["password"] != $_POST["repassword"])
		{
			$errrepassword = "password doesnot match";
		}
		}
		
		
	if(empty($_POST["country"])) //country validation
	{
		$errcountry = "";
	}
	else{
		$country = checkInput($_POST["country"]);
		}
	
	if(empty($_POST["institute"])) //institute validation
	{
		$errinstitute = "Feild Required";
	}
	else{
		$institute = checkInput($_POST["institute"]);
		}
		
	if(empty($_POST["phoneno"])) //phoneno validation
	{
		$errphoneno = "Feild Required";
	}
	else{
		$min = 11;
		$max = 11;

		if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
			$errphoneno="Number is invalid";
		} 
		else {
			$phoneno = checkInput($_POST["phoneno"]);
		}	
	}
	
	if(empty($_POST["day"])) //Day validation
	{
		$errday = "";
	}
	else{
		$day = checkInput($_POST["day"]);
		}
		
	if(empty($_POST["month"])) //Month validation
	{
		$errmonth = "";
	}
	else{
		$month = checkInput($_POST["month"]);
		}
	if(empty($_POST["year"])) //Year validation
	{
		$erryear = "";
	}
	else{
		$year = checkInput($_POST["year"]);
		}
	
	if(empty($_POST["gender"])) //Gender validation
	{
		$errgender = "Feild Required";
	}
	else{
		$gender = checkInput($_POST["gender"]);
		}

	
	
}
?>

<form method="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" > <!--Form Start-->
<h1> REGISTER ME </h1>

<label> First Name </label>: <input type = "text" name = "firstname">				<!--FIRST NAME Start-->
<span class="change_color">  
<?php echo $errfirstname; ?> 
</span>
&emsp;&emsp;&emsp;&emsp;																			<!--FIRST NAME End-->&emsp;


<label>Last Name </label><input type = "text" name = "lastname">					<!--LAST NAME Start-->
<span class="change_color">  
<?php echo $errlastname; ?> 
</span>
<br /><br />																			<!--LAST NAME End-->

</label>User Name</label>  <input type = "text" value="@teachme.com" name = "username" style="width:200px;  height:30px; font:20px; background-color:gold; border:thin;	border-color:#333;">																			<!--USER NAME Start-->
<span class="change_color">  <?php echo $errusername; ?></span> 
&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;																		<!--USER NAME End-->

<label>Email</label>																	<!--Email Start-->
<input type="text" name="email">
<span class="change_color"><?php echo $erremail; ?></span><br /><br />					<!--Email End-->

</label>Password</label>: <input type = "password" name = "password">					<!--PASSWORD Start-->
<span class="change_color">  
<?php echo $errpassword; ?>
</span>
&emsp;&emsp;&nbsp;&nbsp;&nbsp;																	<!--PASSWORD End-->


<label>Re-type Password</label> : <input type = "password" name = "repassword">		<!--RE-ENTER PASSWORD Start-->
<span class="change_color">  
<?php echo $errrepassword; ?>
</span>
<br /><br />																			<!--RE-ENTER PASSWORD End-->


<label> Country</label> 																<!--Country Start-->
<select>
	<option value="country"></option>
  <option value="country">PAKISTAN</option>
  <option value="country">INDIA</option>
  <option value="country">US</option>
  <option value="country">SAUDIA ARAB</option>
 <option value="country">CHINA</option>
  <option value="country">IRAN</option>
  <option value="country">OMAN</option>
  <option value="country">TURKEY</option>
  </select>
  <span class="change_color">  
<?php echo $errcountry; ?>
</span>								
&emsp;&emsp;&emsp;&emsp;																				<!--Country End-->
&emsp;&emsp;&emsp;&emsp;
<label>Institute Name</label>
<input type="text" name="institute">
<span class="change_color">
<?php echo $errinstitute; ?></span><br /><br />
&emsp;&emsp;&emsp;&emsp;
<label>Birthday</label>															<!--Birthday Start-->
<!--Day DropDown Start-->
<select><option value="Day">Select Day</option><option value="Day">1</option><option value="Day">2</option><option value="Day">3</option>
<option value="Day">4</option><option value="Day">5</option><option value="Day">6</option><option value="Day">7</option>
<option value="Day">8</option><option value="Day">9</option><option value="Day">10</option><option value="Day">11</option><option value="Day">12</option>
<option value="Day">13</option><option value="Day">14</option><option value="Day">15</option><option value="Day">16</option><option value="Day">17</option>
<option value="Day">18</option><option value="Day">19</option><option value="Day">20</option><option value="Day">21</option><option value="Day">22</option>
<option value="Day">23</option><option value="Day">24</option><option value="Day">25</option><option value="Day">26</option><option value="Day">27</option>
<option value="Day">28</option><option value="Day">29</option><option value="Day">30</option><option value="Day">31</option>
</select>
  <span class="change_color">  
<?php echo $errday; ?>
</span>	
<!--Day DropDown End-->
&emsp;
<!--Month DropDown Start-->
<select> <option value="Month">Select Month</option><option value="Month">January</option><option value="Month">February</option>
<option value="Month">March</option><option value="Month">April</option><option value="Month">May</option><option value="Month">June</option>
<option value="Month">July</option><option value="Month">August</option><option value="Month">September</option><option value="Month">October</option>
<option value="Month">November</option><option value="Month">December</option>
</select>
  <span class="change_color">  
<?php echo $errmonth; ?>
</span>	
<!--Month DropDown End-->
&emsp;
<!--Year DropDown Start-->
<select><option value="Year">Select Year</option><option value="Year">1990</option><option value="Year">1991</option><option value="Year">1992</option>
<option value="Year">1993</option><option value="Year">1994</option><option value="Year">1995</option><option value="Year">1996</option>
<option value="Year">1997</option><option value="Year">1998</option><option value="Year">1999</option><option value="Year">2000</option>
<option value="Year">2001</option><option value="Year">2002</option><option value="Year">2003</option><option value="Year">2004</option>
<option value="Year">2005</option><option value="Year">2006</option><option value="Year">2007</option><option value="Year">2008</option>
<option value="Year">2009</option><option value="Year">2010</option><option value="Year">2011</option><option value="Year">2012</option>
<option value="Year">2013</option><option value="Year">2014</option><option value="Year">2015</option><option value="Year">2016</option>
</select>
  <span class="change_color">  
<?php echo $erryear; ?>
</span>	
<br /><br />
<!--Year DropDown End-->														<!--Birthday End-->


<label>Gender</label>															<!--gender Start-->
<input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
 <span class="change_color">  
<?php echo $errgender; ?>
</span>																			<!--gender End-->
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<label>Contact Number</label>													<!--Contact Number Start-->
<input type="text" name="phoneno">
 <span class="change_color">  
<?php echo $errphoneno; ?>
</span>	
<br /><br />   																	<!--Contact Number End-->
   
   
<br /><br /><input type="submit" name="submit" value="SIGN UP">
</form>


</body>