<?php
#24

interface sayHi{
	public function sayHi();

}

interface sayHello{
	public function sayHello();

}

class User implements sayHi, sayHello{
	public function sayHi(){
		echo "hi!";		
	}
	public function sayHello(){
		echo "hello";
	}
}

