<?php
#13


define('DB_DATABASE', 'dotinstall_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', '123qwe');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);



try {
  
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $db->beginTransaction();
  $db->exec("update users set score = score - 10000 where name = 'yoshitsugu'");
  $db->exec("update users set score22222 = score + 10 where name = 'yoshitsugu'");
  $db->commit();



  //disconnect
  $db = null;
  
}catch (PDOException $e){
	$db->rollback();
	echo $e->getMessage();
	exit;

}