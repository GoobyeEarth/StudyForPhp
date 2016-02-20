<?php
#10


define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', '123qwe');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);
try {
  
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // $stmt = $db->prepare("select score from users where score > ?");
  // $stmt->execute([60]);

  // $stmt= $db->prepare("select name from users where name like ?");
  // $stmt->execute(['%t%']);
  $stmt = $db->prepare("select score from users order by score desc limit ?");
  $stmt->bindValue(1, 1, PDO::PARAM_INT);
  $stmt->execute();


  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);



  foreach ($users as $user) {
  	var_dump($user);
  }

  echo $stmt->rowCount() ." recode found.";

  //disconnect
  $db = null;
  
}catch (PDOException $e){
	echo $e->getMassage();
	exit;

}