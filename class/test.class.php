<?php 
   class test extends db{
   	public function getuser(){
   		$sql="SElECT * FROM user";
   		$stat=$this->connect()->prepare($sql);
   		$stat->execute();
   		$result=$stat->FETCHALL(PDO::FETCH_ASSOC);
   		if ($result) {
   			print_r($result);
   		}
   	}

   	public function adduser($name,$content){
   		$sql="INSERT INTO user(name,content)  VALUES(:name,:content)";
   		$stat=$this->connect()->prepare($sql);
   		$resultadd=$stat->execute( array( 
   		                                 ':name'=>$name,
   		                                 ':content'=>$content));

   	}
   }

  
 ?>