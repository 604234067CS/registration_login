<?php
include_once('link.php');
include_once('inc/header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$name = $surname = $email = $gender = '';
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$name = $row["name"];
		$surname = $row["surname"];
		$email = $row["email"];
		$gender = $row["gender"];
	}
}

?>
<div class="jumbotron">
	<center>
		<h1>Welcome <?php echo $name." ".$surname; ?></h1>
	</center>
</div>