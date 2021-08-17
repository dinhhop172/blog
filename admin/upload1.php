<?php

$imageFolder = "../uploads/";

reset($_FILES);
$temp = current($_FILES);
if (is_uploaded_file($temp['tmp_name'])) {

   $image_name_origin = basename($temp["name"]);
   $imageFileType = strtolower(pathinfo($image_name_origin, PATHINFO_EXTENSION));
   $filetowrite = $imageFolder . date('Y-m-d-H-i-s') . '.' . $imageFileType;
   $allowed_extension = array("jpg", "gif", "png");
   if (in_array($imageFileType, $allowed_extension)) {
      move_uploaded_file($temp['tmp_name'], $filetowrite);
   }
   echo json_encode(array('location' => $filetowrite));
}
