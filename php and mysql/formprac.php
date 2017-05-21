<?php
include_once('newcon.php');
if(isset($_POST['submit']))
{

$name=$_POST['stdname'];
$fname=$_POST['fname'];


mysql_query("insert into userinfo(name,fname)VALUES ('$name','$fname')");
}

?>


<html>
<head>
</head>
<body>
<form action = "" method="post">
id:<input type="text" name="id" />
name:<input type="text" name="stdname" />
fname:<input type="text" name="fname" />
<input type="submit" name="submit">




</form>

</body>
</html>