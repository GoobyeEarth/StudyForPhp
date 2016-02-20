<?php
#20
//xfinal
class User{
	public $name;

	public function __construct($name){
		$this->name = $name;
	}

	public function sayHi(){
		echo "hi, i am $this->name!";
	}


}

final class AdminUser extends User{
	public function sayHello(){
		echo"helllo from Admin";

	}


	public function sayHi(){
		echo "[adomin] hi, i am $this->name!";

	}
}

$tom = new User("Tom");
$steve = new AdminUser("Steve");

echo $tom->name;
echo $steve->name;
$steve->sayHi();
$tom->sayHi();

