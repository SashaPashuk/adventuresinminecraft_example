<?php


require_once("database.php");
$i = 0;
$cards_Foreach = mysqli_query($mysqli, "SELECT * FROM `cards`");
$cards_Foreach = mysqli_fetch_all($cards_Foreach);


$x = 0;
$orders_Foreach = mysqli_query($mysqli, "SELECT * FROM `pay_log` ORDER BY id DESC LIMIT 5");
$orders_Foreach = mysqli_fetch_all($orders_Foreach);