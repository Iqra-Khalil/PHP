<?php
$result=0;
if (trim($_POST["action"]) == "Upload File")
{
$imagename = basename($_FILES['image_file']['name']);
 $result = @move_uploaded_file($_FILES['image_file']['tmp_name'], $imagename);
 if ($result==1) echo("Successfully uploaded: <b>".$imagename."</b>");
}
?>
<html>
<head>
<title>Upload file script</title>
</head>
<body>
<form method='POST' enctype='multipart/form-data' name='frmmain' >
Browse for Image (jpg): <input type="file" name="image_file" size="35">
<br>
<input type="submit" value=" Upload File " name="action">
</form>
<br>
<?php
if ($result==1) echo("<img src='".$imagename."'>");
?>
</body>
</html>