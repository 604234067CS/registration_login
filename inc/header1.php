<!--
Header.
-->

<?php
include_once('link.php');
$email = $_SESSION['email'];
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">สมัครสมาชิก เข้าสู่ระบบ</a>
		</div>
		<div class="dropdown navbar-right" id="right">
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email; ?>
				<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="account.php">โปรไฟล์</a></li>
				<li><a href="logout.php">ออกจากระบบ</a></li>
			</ul>
		</div>
	</div>
</nav>