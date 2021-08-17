<?php

$temp = current($_FILES);
// print_r($temp);
// exit();
if (isset($temp['name'])) {
   $file = $temp['tmp_name'];
   $file_name = $temp['name'];
   $file_name_array = explode(".", $file_name);
   $extension = end($file_name_array);
   $new_image_name = 'img_' . date('Y-m-d-H-i-s') . '.' . $extension;
   $allowed_extension = array("jpg", "gif", "png");
   $filetowrite = '../uploads/' . date('Y-m-d-H-i-s') . '.' . $extension;
   if (in_array($extension, $allowed_extension)) {
      move_uploaded_file($file, $filetowrite);
   }
   echo json_encode(array('location' => $filetowrite));
}
