<?php
#08


define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', '123qwe');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);
try {
  
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
  $stmt = $db->prepare("insert into users (name, score) values (?, ?)");
  $name = 'taguchi';
  $stmt->bindValue(1, $name, PDO::PARAM_STR);
  $stmt->bindParam(2, $score, PDO::PARAM_INT);
  $score = 52;
  $stmt->execute();
  $score = 33;
  $stmt->execute();
  $score = 6;
  $stmt->execute();

  //disconnect
  $db = null;
  
}catch (PDOException $e){
	echo $e->getMassage();
	exit;

}