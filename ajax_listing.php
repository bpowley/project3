<?php
header ( 'Content-Type: text/json' );
header ( "Access-Control-Allow-Origin: *" );
$a = array ();
$i = 0;

$a [$i++] = array ('name' => 'Green Beans', 'short' => 'GrnBns', 'unit' => 'pound', 'cost' => '0.99');
$a [$i++] = array ('name' => 'Mint', 'short' => 'Mnt', 'unit' => 'ounce', 'cost' => '2.99');
$a [$i++] = array ('name' => 'Oregano', 'short' => 'Orgn', 'unit' => 'ounce', 'cost' => '1.99');

echo json_encode ( $a );

?>
