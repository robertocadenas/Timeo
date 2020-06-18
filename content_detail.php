<?php

include("data/content.php");
include("data/people.php");
include("data/company.php");
include("data/feedback.php");
include("inc/functions.php");


if (isset($_GET["id"])){
    // $id = $_GET["id"];
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if (isset($content[$id])) {
        $item = $content[$id];
        $_SESSION['item_id'] = $id;
    }
}

if (!isset($item)) {
    header("location:content_catalog.php");
    exit;
}


$pageTitle = $item["title"];
//$section = null;

include("inc/header.php");?>

<div class="Content detail page">

    <div class="wrapper">

        <h1><?php echo $item["title"] ?></h1>

        <div class="media-picture">
        <span>
            <img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["title"]; ?>" width= "400px" />
        </span>
        </div>

        <div class="media-details">
            <h2>Book information</h2>
            <table>
                <tr>
                    <th>Author</th>
                    <td>
                    <?php
                    $autors_list = "";
                    $count = 1;
                    foreach ($item["author"] as $author_id) {
                        if ($count > 1) {
                        $autors_list .= ", ";
                        }
                        $autors_list .= "<a href='people_detail.php?id=" . $author_id . "'>";
                        $autors_list .= $people[$author_id]['fullname'];
                        $autors_list .= "</a>";
                        $count += 1;
                    }
                    $autors_list .= ".";
                    echo $autors_list;
                    ?>
                    </td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td><?php echo $item["category"] . "." ?></td>
                </tr>
                <tr>
                    <th>Publisher</th>
                    <td><?php echo $company[$item["publisher"]]['name'] ?></td>
                </tr>
                <tr>
                    <th>Year</th>
                    <td><?php echo $item["year"] ?></td>
                </tr>
                <tr>
                    <th>Tags</th>
                    <td><?php echo implode(", ", $item["tags"]) . "."?></td>
                </tr>
            </table>
        </div>

        <div class="related_content">
            <h2>Content related</h2>
            <?php
                get_content_related_html($content, $people, $id, $item["related_content"]);
             ?>
        </div>


        </div>
        <div>
            <?php include('inc/buy.php'); ?>
            <?php include('inc/feedback.php'); ?>
            <?php
            echo get_feedback_html($id, $feedback, $content, $people);
            ?>
        </div>
    </div>

</div>



<?php include("inc/footer.php"); ?>
