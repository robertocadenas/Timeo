<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="/">El Timeo</a></h1>

			<ul class="nav catalogo">
                <li class="obras<?php if ($section == "obras") { echo " on"; } ?>"><a href="catalogo.php?categoria=obras">Obras</a></li>
                <li class="autores<?php if ($section == "autores") { echo " on"; } ?>"><a href="catalogo.php?categoria=autores">Autores</a></li>
                <li class="lectores<?php if ($section == "lectores") { echo " on"; } ?>"><a href="catalogo.php?categoria=lectores">Lectores</a></li>
                <li class="comentarios<?php if ($section == "suggest") { echo " on"; } ?>"><a href="catalogo.php?categoria=comentarios">Comentarios</a></li>
                <li class="editoriales<?php if ($section == "suggest") { echo " on"; } ?>"><a href="catalogo.php?categoria=editoriales">Editoriales</a></li>
                <li class="medios<?php if ($section == "suggest") { echo " on"; } ?>"><a href="catalogo.php?categoria=medios">Medios</a></li>
				<li class="radio<?php if ($section == "radio") { echo " on"; } ?>"><a href="radio.php">Radio</a></li>
            </ul>

			<br/><br/>
			<form method="get" action="resultados-busqueda.php">
  				<input type="buscar" id="buscar" name="buscar" placeholder="Ej: Odisea o Homero" required autofocus>
				<button type="submit" class="buscar">Buscar</button>
			</form>

            <ul class="nav">
                <li class="estrategia-y-estado<?php if ($section == "estrategia-y-estado") { echo " on"; } ?>"><a href="estrategia-y-estado.php">Estrategia y Estado</a></li>
                <li class="progreso-y-decadencia<?php if ($section == "progreso-y-decadencia") { echo " on"; } ?>"><a href="progreso-y-decadencia.php">Progreso y Decadencia</a></li>
                <li class="conocimiento-y-materia<?php if ($section == "conocimiento-y-materia") { echo " on"; } ?>"><a href="conocimiento-y-materia.php">Conocimiento y Materia</a></li>
                <li class="cosmonautas-y-hechiceros<?php if ($section == "cosmonautas-y-hechiceros") { echo " on"; } ?>"><a href="cosmonautas-y-hechiceros.php">Cosmonautas y Hechiceros</a></li>
                <li class="clasicos<?php if ($section == "clasicos") { echo " on"; } ?>"><a href="clasicos.php">Clásicos</a></li>
                <li class="arte-y-poesia<?php if ($section == "arte-y-poesia") { echo " on"; } ?>"><a href="arte-y-poesia.php">Arte y Poesía</a></li>
                <li class="linguistas-y-escritores<?php if ($section == "linguistas-y-escritores") { echo " on"; } ?>"><a href="linguistas-y-escritores.php">Lingüístas y Escritores</a></li>
            </ul>

		</div>

	</div>

	<?php include("inc/login.php"); ?>

	<div id="content">
