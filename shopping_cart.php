<?php
include("data/content.php");
$pageTitle = "Shopping cart";
$section = 'shopping_cart';

include("inc/header.php");



?>


	<div class="wrapper">

        <h2>Your Shopping Cart:</h2>
<?php

if(isset($_COOKIE)) {
	foreach($_COOKIE as $key => $value) {
		if($key != 'PHPSESSID') {
			echo "Item to buy in " . $key . ": <strong>" . $content[$value]['title'] . "</strong><br/>";
		}

	}
}

?>

<?php include("inc/footer.php"); ?>
