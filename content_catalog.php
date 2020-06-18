<?php

include("data/content.php");
include("data/people.php");
include("inc/functions.php");

$section = null;
$pageTitle = "Content Catalog"; // es provisional, si no viene informado en el header

include("inc/header.php"); ?>

<div class="section catalog page">

    <div class="wrapper">
        <!-- rastro de migas -->
        <h1><?php
        if ($section != null) {
            echo "<a href='content_catalog.php'>Content Catalog</a> &gt; ";
        } echo $pageTitle; ?></h1>

        <?php
        //utilizamos el section cargado en el header.php
        //si no viene ni books ni articles, se mostrarán los dos, porque es el catálogo entero.
        if($section == "books" || ($section != "books" && $section != "articles")) {

            $sections = array_content($content, 'book');
            echo "<h2>Books:</h2><ul class='books catalog'>";
            foreach($sections as $id) {
                echo get_book_html($id, $content[$id]);
            }
            echo "</ul><br/>";

        }

        if ($section == 'articles' || ($section != "books" && $section != "articles")) {

            $sections = array_content($content, 'article');
            echo "<h2>Articles:</h2><ul class='articles catalog'>";
            foreach($sections as $id) {
                echo get_link_html($id, $content[$id], $people);
            }
            echo "</ul><br/>";
        }

         ?>


    </div>

</div>



<?php include("inc/footer.php"); ?>
