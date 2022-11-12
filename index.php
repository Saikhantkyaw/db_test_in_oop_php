<?php 
   include_once("include/load.inc.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test</title>
</head>
<body>
  <?php 
  $test=new test();
  $test->getuser();

  $test->adduser('maymay','she is good at loving');

   ?>
</body>
</html>
