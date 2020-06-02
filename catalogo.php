<?php

include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Catálogo";
$section = null;

if (isset($_GET["categoria"])){

    if($_GET["categoria"] == "obras") {
        $pageTitle = "Catálogo de obras";
        $section = "obras";
    } else if ($_GET["categoria"] == "autores") {
        $pageTitle = "Catálogo de autores";
        $section = "autores";
    } else if ($_GET["categoria"] == "comentarios") {
        $pageTitle = "Catálogo de comentarios";
        $section = "comentarios";
    } else if ($_GET["categoria"] == "editoriales") {
        $pageTitle = "Catálogo de editoriales";
        $section = "editoriales";
    } else if ($_GET["categoria"] == "medios") {
        $pageTitle = "Catálogo de medios de comunicación";
        $section = "medios";
    } else if ($_GET["categoria"] == "lectores") {
        $pageTitle = "Catálogo de lectores";
        $section = "lectores";
    }

}

include("inc/header.php"); ?>

<div class="section catalog page">

    <div class="wrapper">

        <h1><?php
        if ($section != null) {
            echo "<a href='catalogo.php'>Catálogo Completo</a> &gt; ";
        } echo $pageTitle; ?></h1>

        <ul class="items">
            <?php
            $sections = array_category($catalog, $section);
            foreach($sections as $id) {
                echo get_item_html($id, $catalog[$id]);
            }
            ?>
        </ul>

    </div>

</div>



<?php include("inc/footer.php"); ?>
