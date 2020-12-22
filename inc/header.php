<!--
this is header file which is visible in registration and login page.
-->
<?php
include_once('link.php');
?>

<div class="container">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" href="welcome.php">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">สินค้า</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="./upload_image.php">อัฟโหลดรูป</a>
        <a class="dropdown-item" href="#">-</a>
        <a class="dropdown-item" href="#">-</a></div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">ติดต่อ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="Login">เกี่ยวกับ</a>
    </li>
  </ul>
</div>