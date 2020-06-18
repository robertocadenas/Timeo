<?php

include("data/company.php");
include("inc/functions.php");

$section = null;
$pageTitle = "Company Directory";


include("inc/header.php"); ?>

<div class="section catalog page">

    <div class="wrapper">
        <!-- rastro de migas -->
        <h1><?php
        if ($section != null) {
            echo "<a href='company_directory.php'>Company Directory</a> &gt; ";
        } echo $pageTitle; ?></h1>

        <?php

        if($section == "publishers" || ($section != "publishers" && $section != "media")) {

            $sections = array_company($company, 'publisher');
            echo "<h2>Publishers:</h2><ul class='Publishers directory'>";
            foreach($sections as $id) {
                echo get_company_html($id, $company[$id]);
            }
            echo "</ul><br/>";

        }

        if($section == "media" || ($section != "publishers" && $section != "media")) {

            $sections = array_company($company, 'media');
            echo "<h2>Media companies:</h2><ul class='Media directory'>";
            foreach($sections as $id) {
                echo get_company_html($id, $company[$id]);
            }
            echo "</ul><br/>";
        }

         ?>


    </div>

</div>



<?php include("inc/footer.php"); ?>
