<?php
#10

	$signal = "green";
	switch($signal){
	case "red":
		echo "stop";
	break;
	
	case "blue":
	case "green":
		echo "go";
	break;
		
	case "yellow":
		echo "caution";
	break;

	

	default:
		echo "something wrong";
		
	break;
	

}
	


