<!--
หน้าเข้าสู่ระบบ.
-->

<?php
include_once('inc/header.php');
include_once('link.php');

?>

<div id="frmRegistration">
  <form class="form-horizontal" method="POST" action="login_db.php" >
    <h1>เข้าสู่ระบบ</h1>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">อีเมล:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" name="email" id="email" placeholder="อีเมล">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">รหัสผ่าน:</label>
      <div class="col-sm-6">
        <input type="password" class="form-control" name="password" id="pwd" placeholder="รหัสผ่าน">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="login" class="btn btn-primary">เข้าสู่ระบบ</button>
        <a href="forget_password.php">ลืมรหัสผ่าน?</a> <a href="Registration.php">สมัครสมาชิก</a>
    
      </div>
    </div>
  </form>
</div>