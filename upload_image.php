<?php
include_once('link.php');
?>

<body>
    <div class="container">
        <h2>อัฟโหลดรูปภาพ</h2>

        <form action="include/upload_banner.php" id="frmTarget" class="dropzone" method="post" enctype="multipart/form-data">
            <div class="dz-message">
                <div class="drag-icon-cph">
                    <i class="material-icons">touch_app</i>
                </div>
                <h3>Drop files here or click to upload.</h3>
                <div class="fallback">
                    <input name="file" id="file" type="file" multiple />
                </div>
            </div>
            <div>
                <input type="submit" id="button" name="button" class="btn btn-primary" value="Upload">
                <input type="button" class="btn bg-grey waves-effect" data-dismiss="modal" value="CLOSE" onClick="javascript:location.reload();">
            </div>
        </form>

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