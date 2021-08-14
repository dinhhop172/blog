<?php
require_once '../vendor/autoload.php';

use App\Controllers\Post;
use App\Controllers\Database;

if (isset($_POST['add_post'])) {
   $addPost = new Post();
   $addPost->addPost();
   // $_POST = array();
   header("location: addpost.php");
}
