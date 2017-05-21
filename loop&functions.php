
<html>
<body>

<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("someone@example.com", $subject,
  $message, "From:" . $email);
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='mailform.php'>
  Email: <input name='email' type='text'><br>
  Subject: <input name='subject' type='text'><br>
  Message:<br>
  <textarea name='message' rows='15' cols='40'>
  </textarea><br>
  <input type='submit'>
  </form>";
  }
?>

</body>
</html> 


<?php 
for ($i=1; $i <= 5; $i++ ) 
{ 
echo "Php for loop $i times"."<br />";
} 
?>


<?php

echo "hello world";

function myFunction()
 {
echo "myFuncTest";
}
$f = "myFunction";
$f(); 
echo "<br>";
 // create an multidirectional array name ABC LIke MDARR=arr[A][B][C]
$multiDimensionalArray = array(
  "kiran" => array(0 => "red", 2 => "blue", 3 => "purple"),
  "rizwana" => array(1 => "orange", 2 => "black"),
  "sania" => array(0 => "white", 4 => "purple", 8 => "grey")
);

echo $multiDimensionalArray["kiran"][2]; // green
echo "<br>";
echo $multiDimensionalArray["sania"][8]; // grey
?>




