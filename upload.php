<?php 

require_once('connection.php');

$target_dir = "uploads/";
$target_file = $target_dir.$_FILES['file_name']['name'];
$msg = '';

srand((double)microtime()*10000000);
$str = 'abcdefghijklmnopqrstuvwxyz0123456789'; //string ที่เป็นไปได้ที่จะใช้ในการ random ซึ่งสามารถเพิ่มลดได้ตามความต้องการ
$passw = str_shuffle($str);
$str_result = "";  //สตริงว่างสำหรับจะรับค่าจากการ random
$str_result .= substr($passw ,1,20); //ต่อ string จาก substring ที่ได้จากการ random ตำแหน่ง ทีละ 1 ตัว 
                           //จนกว่าจะครบตรามความยาวที่ส่งมา

         $file_name = explode(".", $_FILES['file_name']['name']);  
         $allowed_ext = array("jpg", "jpeg", "png", "gif");  
              $new_name = $str_result . '.' . $file_name[1];  
              $sourcePath = $_FILES['file_name']['tmp_name'];  
  //echo  $dir = $_GET['dir'];
              $target_file = 'uploads/'.$new_name;  

  if(move_uploaded_file($_FILES['file_name']['tmp_name'], $target_file)){
   //$date_n = date('Y-m-d');
   //$hour = date('H:i:s');
   $sql = "INSERT INTO files (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"; 
   $insert = mysqli_query($conn, $sql);
    //mysql_query($insert);
  }else{
    $msg = 'Error while uploading.';
  }

echo $msg;
exit;


/*if(!empty($_FILES)){ 
  
     
    // การกำหนดค่าเส้นทางไฟล์
    $uploadDir = "uploads/"; 
    $fileName = basename($_FILES['file_name']['name']); 
    $uploadFilePath = $uploadDir.$fileName; 
     
    // อัปโหลดไฟล์ไปยังฐานข้อมูล
    if(move_uploaded_file($_FILES['file_name']['tmp_name'], $uploadFilePath)){ 
        // แทรกข้อมูลไฟล์ในฐานข้อมูล
        $sql = "INSERT INTO files (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"; 
        $insert = $conn->query($sql);
    } 
} */



?>

    
