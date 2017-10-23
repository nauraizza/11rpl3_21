<!DOCTYPE html>
<?php 
include'conn.php';
if(isset($_POST['submit']))
{
$Email=$_POST["Email"];
$Name=$_POST["Name"];
$User=$_POST["User"];
$Password=$_POST["Password"];
echo "$User";
$sql="INSERT INTO `tinstagram`(`Email`, `Name`, `User`, `Password`) VALUES ('$Email', '$Name', '$User', '$Password')";
$hasil=mysqli_query($cek,$sql); 
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bismillah YaAllah jangan error</title>
	<link rel="stylesheet" href="styleku.css">
</head>
<body>
<form method="post">
<input type="text" name="Email"/>
<input type="text" name="Name"/>
<input type="text" name="User"/>
<input type="text" name="Password"/>
<input type="submit" name="submit"/>
</form>
</body>
</html>
