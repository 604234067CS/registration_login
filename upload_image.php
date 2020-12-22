<?php 
include_once('link.php');
?>

<body>
    <div class="container">
        <h2>อัฟโหลดรูปภาพ</h2>

        <div class="upload-div">
            <form action="upload.php" class="dropzone" id="dropzone" method="POST"></form>
        </div>
        <div>
        <button type="submit" name="UPLOAD" class="btn btn-primary">อัฟโหลด</button> 
        </div>

    <script>
            Dropzone.autoDiscover = false;
            $(function() {
                //Dropzone class
                var myDropzone = new Dropzone(".dropzone", {
                    url: "upload.php",
                    paramName: "file_name",
                    maxFilesize: 2,
                    maxFiles: 10,
                    acceptedFiles: "image/*,application/pdf",
                    autoProcessQueue: false
                });
                
                $('#startUpload').click(function(){           
                    myDropzone.processQueue();
                });
            });
        </script>
    </div>
</body>

