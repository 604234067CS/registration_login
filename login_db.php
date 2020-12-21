<?php 	session_start();

require_once('connection.php');
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM users WHERE email='$email' AND Password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["id"];
		$email = $row["email"];
	
		$_SESSION['id'] = $id;
		$_SESSION['vmkm'] = 'vmkm';
		$_SESSION['email'] = $email;
	}
	header("Location: welcome.php");
}
else
{
	echo "อีเมลหรือรหัสผ่านไม่ถูกต้อง";
}
?>

<!-- //----- Login google ------// -->
<?php


?>
