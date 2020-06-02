<?php

include("inc/data.php");
include("inc/functions.php");


if (isset($_GET["id"])){
    // $id = $_GET["id"];
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if (isset($catalog[$id])) {
        $item = $catalog[$id];
    }
}

if (!isset($item)) {
    header("location:catalogo.php");
    exit;
}


$pageTitle = $item["title"];
$section = null;

include("inc/header.php");?>

<div class="section page">

    <div class="wrapper">

        <div class="media-picture">
        <span>
            <img src="<?php echo $item["img"]; ?>" alt="<?php echo $item["title"]; ?>" width= "400px" />
        </span>
        </div>

        <div class="media-details">
            <h1><?php echo $item["title"] ?></h1>
            <table>
                <tr>
                    <th>Autor</th>
                    <td><?php echo $item["author"] ?></td>
                </tr>
                <tr>
                    <th>Categoría</th>
                    <td><?php echo $item["category"] ?></td>
                </tr>
                <tr>
                    <th>Editorial</th>
                    <td><?php echo $item["publisher"] ?></td>
                </tr>
                <tr>
                    <th>Año</th>
                    <td><?php echo $item["year"] ?></td>
                </tr>
                <tr>
                    <th>Etiquetado</th>
                    <td><?php echo implode(", ", $item["tags"])?></td>
                </tr>
            </table>
        </div>
        <div>
            <?php include('inc/comprar.php'); ?>
            <?php include('inc/participa.php'); ?>
            <?php include('inc/comprarDataList.php'); ?>
            <?php include('inc/login.php'); ?>
        </div>
    </div>

</div>



<?php include("inc/footer.php"); ?>
