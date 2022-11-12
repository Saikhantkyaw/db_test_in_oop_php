<?php 
   spl_autoload_register('my_load');

   function my_load($className){
      $path='class/';
      $extention='.class.php';
      $full_path=$path.$className.$extention;
      
      include_once ("$full_path");
   }
 ?>