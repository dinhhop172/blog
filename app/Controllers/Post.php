<?php

namespace App\Controllers;

use Exception;
use PDO;

class Post
{
   // private $conn;
   // public function __construct(Database $conn)
   // {
   //    $this->conn = $conn;
   // }
   public static function setTimeZon()
   {
      return date_default_timezone_set('Asia/Ho_Chi_Minh');
   }

   public static function check_character($data)
   {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }

   public function addPost()
   {
      try {
         $title = isset($_POST['title']) ? $this->check_character($_POST['title']) : null;
         $content = isset($_POST['content']) ? $this->check_character($_POST['content']) : null;
         $date = date("Y-m-d H:i:s");
         $image = isset($_FILES['image']['tmp_name']) ? $this->check_character($_FILES['image']['tmp_name']) : null;
         $image_name_origin = basename($_FILES["image"]["name"]);
         $imageFileType = strtolower(pathinfo($image_name_origin, PATHINFO_EXTENSION));
         $image_name = 'img_' . date('Y-m-d-H-i-s') . ".$imageFileType";
         // pathinfo(basename($_FILES["image"]['name']), PATHINFO_EXTENSION)
         $target_file = '../uploads/img_' . date('Y-m-d-H-i-s') . ".$imageFileType";
         $data = array($title, $content, $image_name, $date);

         if (!empty($title) && !empty($content) && !empty($image) && isset($_POST['add_post'])) {
            if ($this->imageChecker($imageFileType) == false) {
               session_start();
               Session::setSession('extendErr', StatusInsert::extendErr());
               header('location: ../../admin/addpost.php');
               exit();
            }
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
            $sql = "INSERT INTO posts (title, content, image, date) VALUES (?,?,?, ?)";
            $pre = Database::getConnect()->prepare($sql);
            session_start();
            Session::setSession('succInsert', StatusInsert::insertSucc());
            $pre->execute($data);
         } else {
            session_start();
            Session::setSession('errInsert', StatusInsert::insertErr());
            header("location: ../../admin/addpost.php");
            exit();
         }
         // $pre->bindParam(":title", $title, PDO::PARAM_STR);
         // $pre->bindParam(":content", $content, PDO::PARAM_STR);
         // $pre->bindParam(":image", $image, PDO::PARAM_STR);
         // $pre->bindParam(":date", $date, PDO::PARAM_INT);
         // $pre->execute($data);
         // if (isset($title) && isset($content) && isset($_POST['add_post'])) {
         // if ($pre) {
         //    header('location: ../../admin/addpost.php');
         // }
         // } else {
         //    echo 'not ok';
         // }
      } catch (Exception $e) {
         echo "mess: " . $e->getMessage() . " on line: " . $e->getLine();
      }
   }

   public function commentSubmit()
   {
      try {
         $name = isset($_POST['name']) ? $this->check_character($_POST['name']) : null;
         $email = isset($_POST['email']) ? $this->check_character($_POST['email']) : null;
         $comment = isset($_POST['content']) ? $this->check_character($_POST['content']) : null;
         $idPost = isset($_GET['id']) ? $_GET['id'] : $_GET['id'];
         $date = date("Y-m-d H:i:s");
         $data = array($name, $email, $comment, $idPost, $date);
         if (!empty($name) && !empty($email) && !empty($comment) && isset($_POST['comment_submit'])) {
            $sql = "INSERT INTO comments(name, email, content, post_id, date) VALUES (?,?,?,?,?)";
            $pre = Database::getConnect()->prepare($sql);
            $pre->execute($data);
            session_start();
            Session::setSession('succComment', StatusInsert::commentSucc());
            header("location: singlepage.php?id=$idPost");
            exit();
         } else {
            session_start();
            Session::setSession('errComment', StatusInsert::commentErr());
            header("location: singlepage.php?id=$idPost");
            exit();
         }
      } catch (Exception $e) {
         echo "failed" . $e->getMessage();
      }
   }

   // public static function getTopOneDate()
   // {
   //    $sql = "SELECT * FROM posts ORDER BY date DESC limit 1";
   //    $pre = Database::getConnect()->prepare($sql);
   //    $pre->execute();
   //    if ($pre) {
   //       return $pre;
   //    } else {
   //       return false;
   //    }
   // }

   public static function postComment($id)
   {
      try {
         $sql = "SELECT comments.name, comments.content, comments.date 
         FROM comments INNER JOIN posts ON comments.post_id = posts.id WHERE comments.post_id = :id ORDER BY date DESC";
         // $sql = "SELECT comments.name, comments.content, comments.date 
         // FROM comments WHERE comments.post_id = :id";
         $pre = Database::getConnect()->prepare($sql);
         $pre->bindParam(':id', $id, PDO::PARAM_INT);
         $pre->execute();
         if ($pre) {
            return $pre;
         } else {
            return false;
         }
      } catch (Exception $e) {
         echo "failed: " . $e->getMessage();
      }
   }

   public static function searchPost($data)
   {
      $sql = "SELECT * FROM posts WHERE posts.title LIKE '%$data%' OR posts.content LIKE '%$data%'";
      $pre = Database::getConnect()->prepare($sql);
      // $pre->bindParam(':data', $data, PDO::PARAM_STR);
      $pre->execute();
      if ($pre) {
         return $pre;
      } else {
         return false;
      }
   }

   public static function textShort($chuoi, $limit)
   {
      $text = substr($chuoi, 0, $limit);
      $text .= '...';
      return $text;
   }

   public function imageChecker($ext)
   {
      if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'PNG' || $ext == 'JPG' || $ext == 'JPEG') {
         return true;
      } else {
         return false;
      }
   }

   public static function showAllPost()
   {
      $sql = "SELECT * FROM posts ORDER BY id DESC";
      $pre = Database::getConnect()->prepare($sql);
      $pre->execute();
      if ($pre) {
         return $pre;
      } else {
         return false;
      }
   }

   public static function popularPost()
   {
      $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 3";
      $pre = Database::getConnect()->prepare($sql);
      $pre->execute();
      if ($pre) {
         return $pre;
      } else {
         return false;
      }
   }

   public static function detailPost($id)
   {
      $sql = "SELECT * FROM posts WHERE id = :id";
      $pre = Database::getConnect()->prepare($sql);
      $pre->bindParam(":id", $id, PDO::PARAM_INT);
      $pre->execute();
      if ($pre) {
         return $pre;
      } else {
         return false;
      }
   }

   public static function getTopOT()
   {
      $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 2";
      $pre = Database::getConnect()->prepare($sql);
      $pre->execute();
      if ($pre) {
         return $pre;
      } else {
         return false;
      }
   }
}
