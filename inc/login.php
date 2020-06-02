<?php

$name = "Roberto";
$email = "robert.c@gmail.gmail.com";
$password = "12345678";

if(isset($_GET["email"]) && isset($_GET["password"]) && $_GET["email"] == $email AND $_GET["password"] == $password) {
    echo "Hello " . $name;
}
if(isset($_GET["userid"])) {
    $userid = $_GET["userid"];
    echo "Your user id is " . $userid;
} else {

    echo '<h3>¿Quién eres?</h3>

    <form method="get" action="../inc/login.php?userid=101" target="_self">
        <fieldset>
           <legend>Login:</legend>
            <label for="email">Email:</label><br/>
            <input class="login" type="email" name="email" id="email"><br/>
            <label for="password">Contraseña:</label><br/>
            <input class="login" type="password" name="password" id="password">
            <button type="submit" class="Entrar">Entrar</button>
        </fieldset>
    </form>';
}
