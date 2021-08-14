<?php

namespace App\Controllers;

class StatusInsert
{
   public static function insertErr()
   {
      return "<script>
               alert('Vui lòng nhập đủ dữ liệu');
            </script>";
   }
   public static function insertSucc()
   {
      return "<script>
               alert('Thêm bài viết thành công');
            </script>";
   }
   public static function extendErr()
   {
      return "<script>
               alert('Ảnh nên là png, jpeg, jpg');
            </script>";
   }
   public static function commentSucc()
   {
      return "<script>
               alert('Comment thành công');
            </script>";
   }
   public static function commentErr()
   {
      return "<script>
               alert('Vui lòng điền đủ thông tin');
            </script>";
   }
}
