<!--
สำหรับหน้าการลงทะเบียน.
-->
<?php
include_once('inc/header.php');
include_once('link.php');
?>

<div id="frmRegistration">
  <form class="form-horizontal" action="registration_db.php" method="POST">
    <h1>สมัครสมาชิก</h1>

    <div class="form-group">
      <label class="control-label col-sm-2" for="username">ชื่อผู้ใช้:</label>
      <div class="col-sm-6">
        <input type="text" name="username" class="form-control" id="username" placeholder="ชื่อผู้ใช้" required="กรุณาใส่ชื่อผู้ใช้">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">อีเมล:</label>
      <div class="col-sm-6">
        <input type="email" name="email" class="form-control" id="email" placeholder="อีเมล" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">รหัสผ่าน:</label>
      <div class="col-sm-6">
        <input type="password" name="password" class="form-control" id="pwd" placeholder="รหัสผ่าน" required>
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="name">ชื่อ:</label>
      <div class="col-sm-6">
        <input type="text" name="name" class="form-control" id="name" placeholder="ชื่อ" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="surname">นามสกุล:</label>
      <div class="col-sm-6">
        <input type="text" name="surname" class="form-control" id="surname" placeholder="นามสกุล" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="gender">เพศ:</label>
      <div class="col-sm-6">
        <label class="radio-inline"><input type="radio" name="gender" value="Male" required>ชาย</label>
        <label class="radio-inline"><input type="radio" name="gender" value="Female" required>หญิง</label>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="IdCard">เลขบัตรประชาชน:</label>
      <div class="col-sm-6">
        <input type="number" name="IdCard" class="form-control" id="IdCard" placeholder="เลขบัตรประชาชน" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="house_no">บ้านเลขที่:</label>
      <div class="col-sm-6">
        <input type="text" name="house_no" class="form-control" id="house_no" placeholder="บ้านเลขที่" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="sub_area">ตำบล:</label>
      <div class="col-sm-6">
        <input type="text" name="sub_area" class="form-control" id="sub_area" placeholder="ตำบล" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="area">อำเภอ:</label>
      <div class="col-sm-6">
        <input type="text" name="area" class="form-control" id="area" placeholder="อำเภอ" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="province">จังหวัด:</label>
      <div class="col-sm-6">
        <input type="text" name="province" class="form-control" id="province" placeholder="จังหวัด" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="postal_code">เลขไปรษณีย์:</label>
      <div class="col-sm-6">
        <input type="number" name="postal_code" class="form-control" id="postal_code" placeholder="เลขไปรษณีย์" required>
      </div>
    </div>


    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="create" class="btn btn-primary">สมัครสมาชิก</button> <a href="login.php">เข้าสู่ระบบ</a>
      </div>
    </div>
   

  </form>
</div>