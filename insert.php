<?php
require_once 'vendor/autoload.php';

use App\Controllers\Post;

if (isset($_POST['comment_submit'])) {
   $data = new Post();
   return $data->commentSubmit();
}
