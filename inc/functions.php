<?php

function get_item_html($id, $item){

    $output = "<p>" . $item['title']
    . "</p><li><a href='detalle.php?id=". $id . "'><img src='"
    . $item['img'] . "'"
    .  " alt='"
    . $item["title"]
    . "' width = 250px/>"
    . "<p>View details</p>"
    . "</a></li>";

    return $output;
}


function array_category($catalog, $section) {
    $output = array();

    foreach($catalog as $id => $item) {
        if($section == null OR strtolower($section) == strtolower($item["section"])) {
            echo $section;
            // $output[] = $id;
            /*  TN: Step 1: Create an Associative Array for Sorting
            teacher note: Instead of $output being a simple indexed array,
            we will change this to an associative array with the key being the ID and the value being the item Title. */
            $sort = $item["title"]; // Lo utilizamos para ordenar por el título
            // TN: Step 3: Trim "The ", "A ", "An " from the beginning of the title
            $sort = ltrim($sort, "El ");
            $sort = ltrim($sort, "La ");
            $sort = ltrim($sort, "Un ");
            $sort = ltrim($sort, "Una ");
            $output[$id] = $sort;
        }
    }

    // TN: Step 2: Sort the Array by Value and Return Only the Keys
    asort($output);
    return array_keys($output);
}
