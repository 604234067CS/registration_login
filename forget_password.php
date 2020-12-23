<!--
รีเซ็น password.
-->



<?php
include_once('connection.php');
include_once('inc/header.php');
include_once('link.php');
?>

<?php
if (isset($_POST['reset_request_submit'])) {

  $email = $_POST['email'];

  $select = "SELECT * FROM users WHERE email = '$email' ";
  $result = mysqli_query($conn, $select);
  $count = mysqli_num_rows($result);
  $data = mysqli_fetch_array($result);

  $idData = $data['id'];
  $emailData = $data['email'];
  $usernameData = $data['username'];

  $url = $_SERVER['SERVER_NAME'].'Register_Login/reset_password.php?id='.$idData.'&email='.$emailData;

  $output = 'กรุณาคลิกที่ลิงค์นี้เพื่อเปลี่ยนรหัสผ่านของคุณ<br>'.$url;

  if ($email == $emailData) {

  
    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';

    //auto load mailer
    require 'vendor/autoload.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer();

        //Server settings
        $mail->SMTPDebug = 1;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'oefprianan@gmail.com';                     // SMTP username
        $mail->Password   = 'password';                               // SMTP password
        $mail->SMTPSecure = 'PHPMailer::ENCRYPTION_SMTPS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('oefprianan@gmail.com', 'Mailer');
        $mail->addAddress($email, $usernameData);     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        // // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        // $mail->isHTML(true);                                  // Set email format to HTML
        // $mail->Subject = 'Here is the subject';
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

        $mail->isHTML(true);                                     // Set email format to HTML
        $mail->Subject = 'รีเซ็ตรหัสผ่าน';
        $mail->Body    = $output;

    
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $msg = '<div class="alert alert-success">ส่งข้อความแล้ว</div>';
    }

  } else {
        $errMsg = '<div class="alert alert-success">ที่อยู่อีเมลของคุณไม่ถูกต้อง!</div>';
  }
}

?>

<div id="frmRegistration">
  <?php 
      if(isset($msg)){
        echo $msg;
      }
  ?>
    <?php 
      if(isset($errMsg)){
        echo $errMsg;
      }
  ?>
  <form class="form-horizontal" method="POST" action="">
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