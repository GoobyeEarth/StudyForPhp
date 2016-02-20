<?php
#04


define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', '123qwe');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);
try {
  
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $db->exec("insert into users (name, score) values ('taguchi', 55)");
  echo "user added!";



  //disconnect
  $db = null;
  
}catch (PDOException $e){
	echo $e->getMassage();
	exit;

}