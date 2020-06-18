<?php

$pageTitle = "El timeo - Home";
$section = 'login';

include("inc/header.php");

if (isset($_GET["end"])) {
    $end = filter_input(INPUT_GET, 'end', FILTER_SANITIZE_NUMBER_INT);
    if ($end == 1) {
        session_destroy();
    }
}

?>

<!--
	<div class="wrapper">
    </div>
    <h2>Go to content:</h2>
    <ul>
        <li><a href="catalogo.php">Página Catálogo</a></li>
        <li><a href="detail.php">Página Detalle</a></li>
        <li><a href="login.php">Login</a></li>
    <ul>
-->
<?php include("inc/footer.php"); ?>
