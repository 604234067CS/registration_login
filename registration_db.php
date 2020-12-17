<!--
code สำหรับการลงทะเบียน.
-->
<?php
require_once('connection.php');
$username = $email = $name = $surname = $IdCard = $house_no = $province = $area = $sub_area = $postal_code = $gender  = $password = $pwd = '';

$username = $_POST['username'];
$email = $_POST['email'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$IdCard = $_POST['IdCard'];
$house_no = $_POST['house_no'];
$sub_area = $_POST['sub_area'];
$area = $_POST['area'];
$province = $_POST['province'];
$postal_code = $_POST['postal_code'];
$gender = $_POST['gender'];
$pwd = $_POST['password'];
$password = MD5($pwd);


$sql = "INSERT INTO users (username,email,name,surname,IdCard,house_no,province,area,sub_area,postal_code,gender,Password) 
		VALUES ('$username','$email','$name','$surname','$IdCard','$house_no','$province','$area','$sub_area','$postal_code','$gender','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>