<?php
require_once('../vendor/autoload.php');
session_start();

use App\Controllers\Post;
use App\Controllers\Session;

Post::setTimeZon();
// echo "<pre>";
// $page = explode('/', $_SERVER['PHP_SELF']);

// print_r($_SERVER['PHP_SELF']);
// if (isset($_GET['content'])) {
//    echo htmlentities($_GET['content']);
// }
// echo date("Y-m-d H:i:s");
// if (!file_exists($_FILES['image']['tmp_name'])) {
//    echo 'No upload';
// } else {
//    echo 'da co';
// }
// if (isset($_FILES['image'])) {
//    echo "<pre>";
//    $a = $_FILES["image"]["name"];
//    $target_dir = "uploads/";
//    $target_file = $target_dir . basename($_FILES["image"]["name"]);
//    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
//    // pathinfo(basename($_FILES["image"]['name']), PATHINFO_EXTENSION)
//    $image = rand(1, 10000000) . '-' . $_FILES["image"]["name"];
//    print_r($imageFileType);
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <!-- <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" /> -->

   <title>Add Post</title>
</head>

<body>
   <div class="container">
      <h4 class="text-center mt-5">Submit new post</h4>
      <?= isset($_SESSION['errInsert']) ? $_SESSION['errInsert'] : '' ?>
      <?= isset($_SESSION['succInsert']) ? $_SESSION['succInsert'] : '' ?>
      <?= isset($_SESSION['extendErr']) ? $_SESSION['extendErr'] : '' ?>
      <div class="row" id="row_style">
         <div class="offset-md-2 col-md-8">
            <!-- insert.php -->
            <form action="insert.php" method="POST" enctype="multipart/form-data">
               <div class="form-group">
                  <input type="text" name="title" class="form-control" placeholder="Title">
               </div>
               <div class="form-group">
                  <input type="file" name="image" class="form-control" />
               </div>
               <textarea id="mytextarea" name="content" cols="30" rows="15">Submit your text post here...</textarea>
               <div class="form-group mt-4">
                  <button class="btn btn-primary btn-block" name="add_post" id="submit">Submit new post</button>
               </div>
            </form>
         </div>
      </div>
   </div>

   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <!-- <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script> -->
   <!-- <script src="assets/js/tinymce.min.js"></script> -->
   <!-- <script src="../assets/js/shieldui-all.min.js"></script> -->
   <script src="https://cdn.tiny.cloud/1/x3r4d3l3gyxtyq37ohwss7rzg4c4fvvm291gccrfxsm1tr6u/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

   <script>
      // $(function() {
      //    $("#editor").shieldEditor({
      //       height: 260
      //    });
      // })
      function example_image_upload_handler(blobInfo, success, failure, progress) {
         var xhr, formData;

         xhr = new XMLHttpRequest();
         xhr.withCredentials = false;
         xhr.open('POST', 'upload1.php');

         xhr.upload.onprogress = function(e) {
            progress(e.loaded / e.total * 100);
         };

         xhr.onload = function() {
            var json;

            if (xhr.status === 403) {
               failure('HTTP Error: ' + xhr.status, {
                  remove: true
               });
               return;
            }

            if (xhr.status < 200 || xhr.status >= 300) {
               failure('HTTP Error: ' + xhr.status);
               return;
            }

            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
               failure('Invalid JSON: ' + xhr.responseText);
               return;
            }

            success(json.location);
         };

         xhr.onerror = function() {
            failure('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
         };

         formData = new FormData();
         formData.append('file', blobInfo.blob(), blobInfo.filename());

         xhr.send(formData);
      };

      tinymce.init({
         selector: 'textarea#mytextarea',
         plugins: 'image code',
         toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
         images_upload_handler: example_image_upload_handler
      });
   </script>
</body>

</html>
<?php
Session::unsetSession('errInsert');
Session::unsetSession('succInsert');
Session::unsetSession('extendErr');
?>