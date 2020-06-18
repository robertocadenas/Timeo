<?php

include("data/people.php");
include("inc/functions.php");

$section = null;
$pageTitle = "People Directory";

include("inc/header.php"); ?>

<div class="section People Directory page">

    <div class="wrapper">
        <!-- rastro de migas -->
        <h1><?php
        if ($section != null) {
            echo "<a href='people_directory.php'>People Directory</a> &gt; ";
        } echo $pageTitle; ?></h1>

        <?php

        if($section == "authors" || ($section != "authors" && $section != "community")) {

            $sections = array_people($people, 'author');
            echo "<h2>Authors:</h2><ul class='Authors directory'>";
            foreach($sections as $id) {
                echo get_people_html($id, $people[$id]);
            }
            echo "</ul><br/>";

        }

        if ($section == 'community' || ($section != "authors" && $section != "community")) {

            $sections = array_people($people, 'community');
            echo "<h2>Community:</h2><ul class='community directory'>";
            foreach($sections as $id) {
                echo get_people_html($id, $people[$id]);
            }
            echo "</ul><br/>";
        }

         ?>

    </div>

</div>



<?php include("inc/footer.php"); ?>
