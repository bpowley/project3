<?php
header ( 'Content-Type: text/json' );
header ( "Access-Control-Allow-Origin: *" );

require_once "inc/page_setup.php";

$db = new Database();
if(isset($_GET["ing"])){
	$displayIngredient = $_GET["ing"];
	// echo 'display ingredient [' . $displayIngredient . ']';
	// echo 'getting information on [' . $displayIngredient . ']';
	$ingredient = $db->getAJAXIngredientDetails($displayIngredient);

	// echo 'ajax_ingredient: [';
	// print_r($ingredient);
	// echo ']';

	$toaddName = $ingredient['ingredient_name'];
	$toaddDesc = $ingredient['description'];
	$toaddShort = substr($toaddDesc, 0, 10);
	$toaddShort = $toaddShort . "...";
	$toaddTime = "ships today!";
	$toaddPrice = $ingredient['price'];
	$toaddUnit = $ingredient['unit'];

	$a = array('name' => $toaddName, 'short' => $toaddShort, 'unit' => $toaddUnit, 'cost' => $toaddPrice, 'time' => $toaddTime, 'desc' => $toaddDesc);
	echo json_encode($a);
}else{
	echo "there is no specified ingredient's data to display!";
}



?>
