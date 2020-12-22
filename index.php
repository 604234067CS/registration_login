<?php 
include_once('link.php');
?>



    <link href="css/style.css" rel="stylesheet">

<body>
    <div class="container">
        <h2>อัฟโหลดรูปภาพ</h2>

        <div class="upload-div">
            <form action="upload.php" class="dropzone" id="dropzone" method="POST"></form>
        </div>
        <div>
        <button type="submit" name="UPLOAD" class="btn btn-primary">อัฟโหลด</button> 
        </div>

        <div class="galla">
            <h3>อัฟโหลดไฟล์</h3>
            <?php
            require 'connection.php';

            // $query = $db -> query("SELECT * FROM files ORDER BY id DESC");

            // echo $query;

            ?>
        </div>
    </div>
</body>

