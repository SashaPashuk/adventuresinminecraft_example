<?php
 
require_once ("config.php"); 
require_once ("database.php");
require_once ("includes/Rcon.php");
use Thedudeguy\Rcon;

$secret_key = $Payment['Secret_key']; 

$sha256_hash_header = $_SERVER['HTTP_X_API_SIGNATURE_SHA256']; 

$entity_body = file_get_contents('php://input');  
$array_body = json_decode($entity_body, 1);      

$amount_currency = $array_body['bill']['amount']['currency'];
$amount_value = $array_body['bill']['amount']['value'];
$billId = $array_body['bill']['billId'];
$siteId = $array_body['bill']['siteId'];
$status_value = $array_body['bill']['status']['value'];
$comment = $array_body['bill']['comment'];
$nickname = explode(",", $comment);
$item_info = mysqli_query($mysqli, "SELECT * FROM `cards` WHERE `name` = '$nickname[1]'");
$item_info = mysqli_fetch_assoc($item_info);
$command = str_replace("{username}", "$nickname[0]", ''.$item_info['command'].'');

$invoice_parameters = $amount_currency . '|' . $amount_value . '|' . $billId . '|' . $siteId . '|' . $status_value;
 
$sha256_hash = hash_hmac('sha256', $invoice_parameters, $secret_key); 

if ($sha256_hash_header == $sha256_hash && !empty($sha256_hash_header) && $status_value == 'PAID') { 
    $rcon = new Rcon($server['ip'], $server['rcon_port'], $server['rcon_password'], 10);
    if($rcon->connect()){
        $rcon->sendCommand($command);
    }
    mysqli_query($mysqli, "INSERT INTO `pay_log` (`username`, `product`, `cost`) VALUES ('$nickname[0]', '$nickname[1]', '".$item_info['cost']."')");
    http_response_code(200);
}

?>