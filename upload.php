<?php
if (empty($_FILES)) {
    require 'connection.php';

    $uploadDir = "uploads/";    
    $fileName = basename($_FILES['file_name']['name']);
    $uploadFilePath = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES['file_name']['uploaded_on'], $uploadFilePath)) {
        // Insert file information in the database 
        $insert = $db->query("INSERT INTO files (file_name, uploaded_on) VALUES ('" . $fileName . "', NOW())");
    }
}
?>