<?php

include("data/content.php");
include("data/people.php");
include("data/company.php");
include("inc/functions.php");


if (isset($_GET["id"])){
    // $id = $_GET["id"];
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if (isset($people[$id])) {
        $item = $people[$id];
    }
}

if (!isset($item)) {
    header("location:people_directory.php");
    exit;
}

$pageTitle = $item["fullname"];
//$section = null;

include("inc/header.php");?>

<div class="Profile page">

    <div class="wrapper">

        <h1><?php echo $item["fullname"] ?></h1>

        <div class="media-picture">
        <span>
            <img src="<?php echo $item["photo"]; ?>" alt="<?php echo $item["fullname"]; ?>" width= "200px" />
        </span>
        </div>

        <div class="media-details">
            <h2>Profile</h2>
            <table>
                <tr>
                    <th>Full Name:</th>
                    <td><?php echo $item["fullname"] . "." ?></td>
                </tr>
                <tr>
                    <th>Contact:</th>
                    <td><?php echo $item["email"] ?></td>
                </tr>
                <tr>
                    <th>His/Her Books:</th>
                    <td>
                        <ul>
                        <?php
                            foreach($content as $key => $value) {
                                foreach ($value['author'] as $id_author) {
                                    if ($id_author == $id && $value['type'] == 'book') {
                                        echo get_book_html($key, $content[$key]) . "<br/>";
                                    }
                                }
                            }

                        ?>
                    </ul>
                    </td>
                </tr>
                <tr>
                    <th>His/Her Articles:</th>
                    <td>
                        <ul>
                        <?php
                            foreach($content as $key => $value) {
                                foreach ($value['author'] as $id_author) {
                                    if ($id_author == $id && $value['type'] == 'article') {
                                        echo get_link_html($id, $content[$key], $people) . "<br/>";
                                    }
                                }
                            }

                        ?>
                    </ul>
                    </td>
                </tr>
                <tr>
                    <th>Birth</th>
                    <td><?php echo $item["birth"] ?></td>
                </tr>
            </table>
        </div>

        </div>

    </div>

</div>



<?php include("inc/footer.php"); ?>
