<?php

include("data/content.php");
include("data/people.php");
include("data/company.php");
include("data/feedback.php");
include("inc/functions.php");


if (isset($_GET["search"])){
    // $id = $_GET["id"];
    $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_SPECIAL_CHARS);
}

if (!isset($search)) {
    header("location:content_catalog.php");
    exit;
}

$section = null;
$pageTitle = "Search Results"; // es provisional, si no viene informado en el header

include("inc/header.php"); ?>

<div class="Search Results">

    <div class="wrapper">
        <!-- rastro de migas -->
        <h1><?php
        echo $pageTitle;
        ?></h1>

        <?php
        //utilizamos el section cargado en el header.php
        //si no viene ni books ni articles, se mostrarán los dos, porque es el catálogo entero.

            $sections = array_content($content, 'book');
            echo "<h2>Book results:</h2><ul class='books catalog'>";
            foreach($sections as $item_id) {
                    if (strtolower($search) == strtolower($content[$item_id]['title'])) {
                        echo get_book_html($item_id, $content[$item_id]) . "<br/>";
                    }
            }
            echo "</ul><br/>";


            $sections = array_content($content, 'article');
            echo "<h2>Article results:</h2><ul class='articles catalog'>";
            foreach($sections as $item_id) {
                    if (strtolower($search) == strtolower($content[$item_id]['title'])) {
                        echo get_link_html($item_id, $content[$item_id], $people) . "<br/>";
                    }
            }
            echo "</ul><br/>";

            $sections = array_people($people, 'author');
            echo "<h2>Author results:</h2><ul class='articles catalog'>";
            foreach($sections as $item_id) {
                    if (strtolower($search) == strtolower($people[$item_id]['fullname'])) {
                        echo get_people_html($item_id, $people[$item_id]) . "<br/>";
                    }
            }
            echo "</ul><br/>";

            $sections = array_people($people, 'community');
            echo "<h2>Community results:</h2><ul class='articles catalog'>";
            foreach($sections as $item_id) {
                    if (strtolower($search) == strtolower($people[$item_id]['fullname'])) {
                        echo get_people_html($item_id, $people[$item_id]) . "<br/>";
                    }
            }
            echo "</ul><br/>";

            $sections = array_company($company, 'publisher');
            echo "<h2>Publishers:</h2><ul class='Publishers directory'>";
            foreach($sections as $item_id) {
                if (strtolower($search) == strtolower($company[$item_id]['name'])) {
                    echo get_company_html($item_id, $company[$item_id]) . "<br/>";
                }
            }
            echo "</ul><br/>";

            $sections = array_company($company, 'media');
            echo "<h2>Publishers:</h2><ul class='Publishers directory'>";
            foreach($sections as $item_id) {
                if (strtolower($search) == strtolower($company[$item_id]['name'])) {
                    echo get_company_html($item_id, $company[$item_id]) . "<br/>";
                }
            }
            echo "</ul><br/>";



         ?>


    </div>

</div>



<?php include("inc/footer.php"); ?>
