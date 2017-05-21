

<?php 

echo "Welcome to my web page"; 

?>

<?php 
echo " <h1>hello world </h1>";

//********************    play with variable ******************

$x=10;
$y = 3;
$z = $x + $y;
echo "The sum is ".$z;
print "<p>";


$like = "I like php";
$num = 5;
echo $like . $num;
print "<p>";

print "My favorite php version is $num";

print "<p>";
	
 $x = 10.88;
echo $x;
print "<p>";
 print (int) $x; 
print "<p>";
$a = 1;
echo $a;

echo $a++;
// Outputs 1, $a is now equal to 2
echo ++$a;
// Outputs 3, $a is now equal to 3
echo --$a;
// Outputs 2, $a is now equal to 2
echo $a--;
echo "<p>";

print "*******************  if else ***************************"  ; echo "<p>";

$name = "";
if($name == "")
{
echo "name is empty" ;
}
else
{
 echo $name;}   echo "<p>";
print "*******************  switch ***************************"  ;  echo "<p>";

$test = 60;

switch ($test) {

   case "40" :
   echo "The value equals 40.";
   break;

   case "50" :
   echo "The value equals 50.";
   break;

   default :
   echo "The value is not 40 or 50.";
   break;

   }

/*
print "*******************  get and post ***************************"  ;  echo "<p>";
    echo $_POST['value'];

*/
print "<p>";
$today = getdate();
//echo $today('y-m-d');
if ($today=="16-03-14") { 
echo "wish you a very happy birthday"; 
}
else{
echo "error";
}
print "<p>";
echo 'The date today is '. $today['year'].'-'.$today['mon'].'-'.$today['mday'];
print "<p>";
echo 'The date today is '. date('m-d-y');


?> 

<html>
<head>
</head>
<body>

       <form method="post" action="">
<input type="text" name="value">
<input type="submit">
</form>

<form method = "get" action="my1.php">
<input type = "submit">
</form>

<form method = "get" action = "my1.php" >

<input type = "text"  name = "value">
<input type  = "submit" value = "click me">


</form>

</body>




</html>
<?php

print "*******************  get and post ***************************"  ;  echo "<p>";
    echo $_POST['value'];

?>


  
