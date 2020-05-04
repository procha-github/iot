<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
$name = gethostname();
$time =date("d-m-Y | H:i:s");
echo "data: O servidor IoT é o {$name} \n\n"; 
echo "data: A data do servidor é {$time}. \n\n";
?>
