<?php

namespace App\Controllers;

use PDO;

class Database
{
   private static $instance;

   public static function getConnect()
   {
      if (empty(self::$instance)) {
         self::$instance = new PDO('mysql:host=localhost;dbname=keira_blog', 'root', '');
      }
      return self::$instance;
   }
}
