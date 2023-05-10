<?php

require_once("config.php");
require ("includes/MinecraftPing.php");
require ("includes/MinecraftPingException.php");

use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;

try {
    $Query = new MinecraftPing($server['ip'], $server['port']);
}
catch (MinecraftPingException $e) {
    die("Не удалось подключиться к серверу!");
}

$server_info = $Query->Query();
$online = $server_info['players']['online'];

if(!empty($server['domain'])){
    $ip = $server['domain'];
}

if(empty($server['domain'])){
    $ip = $server['ip'].':'.$server['port'];
}

?>