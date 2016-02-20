<?php
#15

function sayHi($name){
	echo "hi".$name;
}

sayHi("Tom");
sayHi("Bob");

function sayHi2($name){
	return "hi".$name;
}

$s = sayHi2("Tom");

var_dump($s);

