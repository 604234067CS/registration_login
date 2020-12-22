<?php 

require_once('connection.php');
if(!empty($_FILES)){ 
  
     
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
} 
?>