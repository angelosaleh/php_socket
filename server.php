<?php 


$port = 10000;
$sock = socket_create_listen($port); 
socket_getsockname($sock, $addr, $port); 
print "Server Listening on $addr:$port\n"; 

while($c = socket_accept($sock)) { 
   /* do something useful */ 
   socket_getpeername($c, $raddr, $rport);
   print "Received Connection from $raddr:$rport\n";
   $input =  socket_read($c, 1024000);
   print($input);
} 

socket_close($sock); 

 ?>