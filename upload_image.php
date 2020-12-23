<?php
include_once('link.php');
?>


<body>
    <div class="container">
        <h2>อัฟโหลดรูปภาพ</h2>

        <form action="upload.php" id="frmTarget" class="dropzone" method="post" enctype="multipart/form-data">
            <div class="dz-message">
                <div class="drag-icon-cph">
                    <i class="material-icons">touch_app</i>
                </div>
                <h3>Drop files here or click to upload.</h3>
                <div class="fallback">
                    <input name="file_name" id="file_name" type="file" multiple />
                </div>
            </div>
        </form>
        <div>
                <input type="submit" id="startUpload" name="button" class="btn btn-primary" value="Upload">
                <input type="button" class="btn bg-grey waves-effect" data-dismiss="modal" value="CLOSE" onClick="javascript:location.reload();">
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script>
            Dropzone.autoDiscover = false;
            $(function() {
                //Dropzone class
                var myDropzone = new Dropzone(".dropzone", {
                    url: "upload.php",
                    paramName: "file_name",
                    maxFilesize: 2,
                    parallelUploads: 15,
                    acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
                    autoProcessQueue: false
                });

                $('#startUpload').click(function() {
                    myDropzone.processQueue();
                });
            });
        </script>

    </div>
</body>