<?php
#12


define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', '123qwe');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);



try {
  
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  // $stmt = $db->prepare("update users set score = :score where name = :name");
  // $stmt->execute([
  // 	':score' => 100,
  // 	'name' => 'taguchi'
  // ]);
  // echo 'row update: ' . $stmt->rowCount();


  $stmt = $db->prepare("delete from users where name = :name");
  $stmt->execute([
  	'name' => 'taguchi'
  ]);
  echo 'row deleted: ' . $stmt->rowCount();  


  //disconnect
  $db = null;
  
}catch (PDOException $e){
	echo $e->getMessage();
	exit;

}