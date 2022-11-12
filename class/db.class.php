<?php 
 class db{
  private $host="localhost";
  private $user="root";
  private $db="test_oop";
  private $pwd="";

   public function connect(){
   	$option=array(
				PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION

             );
   	$pdo=new PDO("mysql:host=".$this->host.";dbname=".$this->db.";",$this->user,$this->pwd,
   		                      $option);
   	return $pdo;
   }
 }
 
 ?>