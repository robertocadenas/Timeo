<?php

include("data/content.php");
include("data/people.php");
include("data/company.php");
include("inc/functions.php");


if (isset($_GET["id"])){
    // $id = $_GET["id"];
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if (isset($company[$id])) {
        $item = $company[$id];
    }
}

if (!isset($item)) {
    header("location:company_directory.php");
    exit;
}

$pageTitle = $item["name"];
//$section = null;

include("inc/header.php");?>

<div class="Company detail page">

    <div class="wrapper">

        <h1><?php echo $item["name"] ?></h1>

        <div class="company-details">
            <h2>Company details</h2>
            <table>
                <tr>
                    <th>CEO:</th>
                    <td><?php echo $item["CEO"] . "." ?></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td><?php echo $item["phone"] ?></td>
                </tr>
                <tr>
                    <th>Location:</th>
                    <td><?php echo implode(", ", $item["location"]) . "."?></td>
                </tr>

                <tr>
                    <th>Website:</th>
                    <td><?php echo $item["url"] ?></td>
                </tr>
                <tr>
                    <th>Books:</th>
                    <td>
                        <?php
                        foreach($content as $key => $value) {
                                if ($value['publisher'] == $id && $value['type'] == 'book') {
                                    echo get_book_html($key, $content[$key]) . "<br/>";
                                }
                        }
                    ?>
                </td>
                </tr>
                <tr>
                    <th>Articles:</th>
                    <td>
                        <?php
                        foreach($content as $key => $value) {
                                if ($value['publisher'] == $id && $value['type'] == 'article') {
                                    echo get_link_html($key, $content[$key], $people) . "<br/>";
                                }
                        }
                    ?>
                </td>
                </tr>
            </table>
        </div>

        </div>

    </div>

</div>



<?php include("inc/footer.php"); ?>
