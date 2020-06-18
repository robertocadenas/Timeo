<?php
session_start();


if (isset($_SESSION['userid'])) {
	$userid = $_SESSION['userid'];
} else {
}

if (isset($_GET["cat"])){

    if($_GET["cat"] == "books") {
        $pageTitle = "Books catalog";
        $section = "books";
    } else if ($_GET["cat"] == "articles") {
        $pageTitle = "Articles catalog";
        $section = "articles";
    } else if ($_GET["cat"] == "authors") {
        $pageTitle = "Authors directory";
        $section = "authors";
    } else if ($_GET["cat"] == "comments") {
        $pageTitle = "Comments list";
        $section = "Comments";
    } else if ($_GET["cat"] == "publishers") {
        $pageTitle = "Publishers directory";
        $section = "publishers";
    } else if ($_GET["cat"] == "media") {
        $pageTitle = "Media directory";
        $section = "media";
    } else if ($_GET["cat"] == "community") {
        $pageTitle = "Community";
        $section = "community";
    }

}

?>
<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="/">El Timeo</a></h1>

			<h2>Search</h2>
			<form method="get" action="search_results.php">
  				<input type="search" id="search" name="search" placeholder="Ej: Odisea or Homero" required autofocus>
				<button type="submit" class="search">Search</button>
			</form>

			<h2>Sections</h2>
			<ul class="nav catalogo">
                <li class="books<?php if ($section == "books") { echo " on"; } ?>"><a href="content_catalog.php?cat=books">Books</a></li>
                <li class="articles<?php if ($section == "articles") { echo " on"; } ?>"><a href="content_catalog.php?cat=articles">Articles</a></li>
				<li class="authors<?php if ($section == "authors") { echo " on"; } ?>"><a href="people_directory.php?cat=authors">Authors</a></li>
                <li class="community<?php if ($section == "community") { echo " on"; } ?>"><a href="people_directory.php?cat=community">Community</a></li>
                <li class="publishers<?php if ($section == "publishers") { echo " on"; } ?>"><a href="company_directory.php?cat=publishers">Publishers</a></li>
                <li class="media<?php if ($section == "media") { echo " on"; } ?>"><a href="company_directory.php?cat=media">Media</a></li>
			<!--	<li class="radio<?php if ($section == "radio") { echo " on"; } ?>"><a href="radio.php">Radio</a></li> -->
				<li class="login<?php if ($section == "media") { echo " on"; } ?>"><a href="login.php">Login</a></li>
            </ul>
			<!--
			<h2>Topics</h2>
            <ul class="nav">
                <li class="estrategia-y-estado<?php if ($section == "estrategia-y-estado") { echo " on"; } ?>"><a href="estrategia-y-estado.php">Estrategia y Estado</a></li>
                <li class="progreso-y-decadencia<?php if ($section == "progreso-y-decadencia") { echo " on"; } ?>"><a href="progreso-y-decadencia.php">Progreso y Decadencia</a></li>
                <li class="conocimiento-y-materia<?php if ($section == "conocimiento-y-materia") { echo " on"; } ?>"><a href="conocimiento-y-materia.php">Conocimiento y Materia</a></li>
                <li class="cosmonautas-y-hechiceros<?php if ($section == "cosmonautas-y-hechiceros") { echo " on"; } ?>"><a href="cosmonautas-y-hechiceros.php">Cosmonautas y Hechiceros</a></li>
                <li class="clasicos<?php if ($section == "clasicos") { echo " on"; } ?>"><a href="clasicos.php">Clásicos</a></li>
                <li class="arte-y-poesia<?php if ($section == "arte-y-poesia") { echo " on"; } ?>"><a href="arte-y-poesia.php">Arte y Poesía</a></li>
                <li class="linguistas-y-escritores<?php if ($section == "linguistas-y-escritores") { echo " on"; } ?>"><a href="linguistas-y-escritores.php">Lingüístas y Escritores</a></li>
            </ul>
		-->
		</div>

	</div>

	<div id="content">
