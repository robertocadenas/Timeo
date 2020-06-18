<?php


function get_feedback_html($content_id, $feedback, $content, $people) {
    $output = "<h3>Comments:</h3>";
    foreach($feedback as $item) {
        if($item['content_related'] == $content_id) {
            $output .= "<p>" . $people[$item['member']]['fullname'] . " said: <q>" . $item['comment'] . "</q></p>";
        }
    }
    return $output;
}

function get_book_html($id, $item){

    $output = "<p>Title: " . $item['title']
    . "</p><li><a href='content_detail.php?id=". $id . "'><img src='"
    . $item['img'] . "'"
    .  " alt='"
    . $item["title"]
    . "' width = 250px/>"
    . "<p>View details</p>"
    . "</a></li>";

    return $output;
}


function get_link_html($id, $item, $people){

    $autors_list = "";
    $count = 1;
    foreach ($item["author"] as $id) {
        if ($count > 1) {
        $autors_list .= ", ";
        }
        $autors_list .= "<a href='people_detail.php?id=" . $id . "'>";
        $autors_list .= $people[$id]['fullname'];
        $autors_list .= "</a>";
        $count += 1;
    }
    $autors_list .= ".";

    $output = "<p>"
    . "<a href='content_detail.php?id=". $id . "'>"
    . $item["title"]
    . "</a> by "
    . $autors_list
    . "</p>";

    return $output;
}

function get_people_html($id, $person){

    $output = "<p>Name: " . $person['fullname']
    . "</p><li><a href='people_detail.php?id=". $id . "'><img src='"
    . $person['photo'] . "'"
    .  " alt='"
    . $person["fullname"]
    . "' width = 250px/>"
    . "<p>View details</p>"
    . "</a></li><br/>";

    return $output;
}

function get_company_html($id, $item){

    $output = "<p>"
    . "<a href='company_detail.php?id=". $id . "'>"
    . $item["name"]
    . "</a></p>";

    return $output;
}

function get_content_related_html($content, $people, $id_content, $related_content) {

    $autors_list = "";
    $count = 1;
    foreach ($content[$id_content]["author"] as $id) {
        if ($count > 1) {
        $autors_list .= ", ";
        }
        $autors_list .= "<a href='people_detail.php?id=" . $id . "'>";
        $autors_list .= $people[$id]['fullname'];
        $autors_list .= "</a>";
        $count += 1;
    }
    $autors_list .= ".";

    foreach($related_content as $id) {

        echo "<p>"
        . "<a href='content_detail.php?id=". $id . "'>"
        . $content[$id]["title"]
        . "</a> by "
        . $autors_list
        . "</p>";

        }
    }

function array_content($content, $type) {
    $output = array();
    foreach($content as $id => $item) {
        if (strtolower($type) == strtolower($item["type"])) {
            $sort = $item["title"];
            $sort = ltrim($sort, "El ");
            $sort = ltrim($sort, "La ");
            $sort = ltrim($sort, "Un ");
            $sort = ltrim($sort, "Una ");
            $output[$id] = $sort;

        }
    }

    asort($output);
    return array_keys($output);
}

function array_people($people, $type) {
    $output = array();
    foreach($people as $id => $item) {
        if (strtolower($type) == strtolower($item["type"])) {
            $sort = $item["fullname"];
            $output[$id] = $sort;

        }
    }

    asort($output);
    return array_keys($output);
}

function array_company($company, $type) {
    $output = array();
    foreach($company as $id => $item) {
        if (strtolower($type) == strtolower($item["type"])) {
            $sort = $item["name"];
            $output[$id] = $sort;

        }
    }

    asort($output);
    return array_keys($output);
}


function array_category($catalog, $section) {
    $output = array();

    foreach($catalog as $id => $item) {
        if($section == null OR strtolower($section) == strtolower($item["section"])) {
            //echo $section;
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


//no se usa
function array_search_query($catalog, $query) {
    $output = array();

    foreach($catalog as $id => $item) {
        if(strtolower($query) == strtolower($item["title"])
         OR strtolower($query) == strtolower($item["author"])) {
            //echo $section;
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
