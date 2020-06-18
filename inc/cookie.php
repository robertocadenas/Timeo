<?php
session_start();

echo $_SESSION['userid'];

if (isset($_POST['seller'])) {
    $seller = $_POST['seller'];
}

if(isset($_GET['shop_item'])) {
    $cookie_name = $seller;
    $cookie_value = $_SESSION['item_id'];
    // setcookie($cookie_name, $_SESSION['item']['name'], strtotime('+30 days'), '/');
    //setcookie($cookie_name, implode(':', $_SESSION['item']['name']), '/');
    //setcookie('nombre_de_prueba', 'Roberto C', '');
    setcookie($cookie_name, '111', time()+30*24*60*60, '/');
    //setcookie($seller, $seller, time()+30*24*60*60, '/');
    header('location: /shopping_cart.php');
    exit;
}
