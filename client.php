<?php 

$msg = "Hi I am a client";
$ipadd = "172.29.83.21";
$port = 10000;

$sock = socket_create(AF_INET, SOCK_STREAM, SOL_TCP); 
socket_connect($sock, $ipadd, $port); 

socket_send ( $sock , $msg , strlen($msg) , 0);
socket_close($sock); //Close socket

 ?>