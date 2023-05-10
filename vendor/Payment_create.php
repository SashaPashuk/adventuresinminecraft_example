<?php

session_start();

require_once("database.php");
require_once("config.php");

$item_name = $_POST['item_name'];
$nickname = $_POST['nickname'];

$item_price = mysqli_query($mysqli, "SELECT * FROM `cards` WHERE `name` = '$item_name'");
if (mysqli_num_rows($item_price) == 0) {
    $_SESSION['error'] = "Предмет не найден в базе данных!";
    Header("Location: ../");
} elseif (mysqli_num_rows($item_price) == 1){
    $item_price = mysqli_fetch_assoc($item_price);
    Header('Location: https://oplata.qiwi.com/create?publicKey='.$Payment['Public_key'].'&comment='.$nickname.','.$item_name.'&amount='.$item_price['cost'].'&successUrl='.$Payment['successUrl'].'&account=1');
} else {
    Header("Location: ../");
}




