<!--
หน้าเข้าสู่ระบบ.
-->

<?php
include_once('inc/header.php');
include_once('link.php');

?>

<div id="frmRegistration">
  <form class="form-horizontal" method="POST" action="reset_request_password.php" >
    <h1>รีเช็ตรหัสผ่าน</h1>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">อีเมล:</label>
      <div class="col-sm-6">
        <input type="email" clas s="form-control" name="email" id="email" placeholder="อีเมล" required>
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="reset_request_submit" class="btn btn-red">ส่งรหัสผ่าน</button>
      </div>
    </div>
  </form>
</div>