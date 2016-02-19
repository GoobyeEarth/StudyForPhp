<?php
#14

$sales = [
	"taguch" => 200,
	"fkoji" => 800,
	"dotinstall" => 600,

	];

foreach ($sales as $key => $value) {
	echo "($key) $value";

}

$colors = ["red", "blue", "pink"];

foreach ($variable as $value) {
	echo "$value";
}

foreach ($variable as $key => $value) :
	echo "$value";

endforeach;
?>
<ul>
	<?php foreach ($colors as $value) : ?>
		<li><?php echo "$value "; ?></li>
	<?php endforeach;  ?>
</ul>
