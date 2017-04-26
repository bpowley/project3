<?php
require_once "inc/page_setup.php";
$pgTitle = "AJAX viewIngredient";
include ('inc/header.php');
echo '<script src="./jquery.min.js"></script>';
echo '<script type="text/javascript" src="./ajax_viewingr.js"></script>';

if(isset($_GET["ing"])){
	if(isset($_GET["link"])){
		$displayIngredient = $_GET["ing"];
		$displayLink = $_GET["link"];
		// echo 'display ingredient [' . $displayIngredient . ']';
		// echo ' display link [' . $displayLink . ']';
	}
}

?>
</head>

<?php include ('inc/nav.php');?>

<!-- Start contents of main page here. -->
<?php
echo "<script> insertIngr('$displayIngredient', '$displayLink') </script>"
?>

<div class="col-lg-2 col-md-2 hidden-sm hidden-xs" ></div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
	<h2 id="ingrTitle">[Ingredient Name]</h2>
	<p>
		Description:
		<span id="ingrDesc">[Ingredient Description]</span>
		<br>
	</p>
	<p style="text-align: center;">
		Price: <b> $<span id="ingrPrice">[Ingredient Price]</span> / <span id="ingrUnits">[Ingredient Units]</span> </b>
	</p>

	<!-- <p id="output1"> ... </p> -->
	<p>Ingredient Data Status: <span id="output1">...</span></p>
	<p>Ingredient Image Status: <span id="output2">...</span></p>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
	<img id="ingrImg" src="" class="img-circle img-responsive" alt="Picture of ingredient" />
</div>

<div class="col-lg-2 col-md-2 hidden-sm hidden-xs" ></div>

<!-- End of contents -->


<?php include('inc/footer.php'); ?>
