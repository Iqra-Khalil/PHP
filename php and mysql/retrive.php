<?php
include 'newcon.php';
$query = mysql_query("SELECT * FROM userinfo order by name desc  ");
 
while($res=mysql_fetch_array($query))
{
echo $res[id]."<br>".$res['name']."<br>".$res['fname'];
}
$query = mysql_query("delete from userinfo where id = 72");

 $query = mysql_query("update userinfo set name = 'aisha' where id=8");

?>