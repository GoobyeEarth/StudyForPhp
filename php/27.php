
<?php
#27


function dev($a, $b) {
	try {
		if ($b === 0) {
			throw new Exception("Cannot divide by0!");	
		} echo $a / $b;
	} catch(Exception $e){
		echo $e->getMessage();
	}
}
dev(7, 2);
dev(5, 0);
