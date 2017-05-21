<?php

//session_start();
//$_SESSION['view']=1;
//echo $_SESSION['view'];


?>

echo "******** php cookie *****<br>"

<?php
setcookie("username", "rabbia", time()+3600); 
echo $_COOKIE["username"]."<br>"

?>
**************  how many views **********<br>
<?php
session_start();
if(isset($_SESSION['view']))
$_SESSION['view']=$_SESSION['view']+1;
else
$_SESSION['view']=1;
echo "view page=".$_SESSION['view'];

?>