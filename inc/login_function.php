<?php


include("data/people.php");


/* Functions */

function search_user($people, $email, $password) {

    foreach($people as $id => $person) {
        if($person['email'] == $email && $person['password'] == $password) {
            return $id;
        }
    }
    echo '<p>User not found</p>';
    return null;
}

/* Script */

if(!isset($userid)) {
    if(isset($_POST["email"]) && isset($_POST["password"])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $userid = search_user($people, $email, $password);
        if ($userid == null) {
            echo 'Null user';
        } else {
            $_SESSION['userid'] = $userid;
        }
    }
}



if(isset($userid) && $userid != null) {
        echo '<h2>Profile:</h2>'
        . '<a href="people_detail.php?id=' . $userid . '">' . $people[$userid]['fullname'] . '</a>'
        . '<p>You can <a href="index.php?end=1">close your session</a></p>';

} else {

    echo '<h2>Login</h2>
    <p>Put this roberto.cadenas@testmail.com 12345678 (users here: data_users.php)</p>
    <form method="post" action="login.php" target="_self">
            <label for="email">Email:</label><br/>
            <input class="login" type="email" name="email" id="email"><br/>
            <label for="password">Password:</label><br/>
            <input class="login" type="password" name="password" id="password">
            <button type="submit" class="Entrar">Entrar</button>
    </form>';
}
