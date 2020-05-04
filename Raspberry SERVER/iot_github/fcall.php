<?php
// change all ip 192.168.1.100 to your ip esp8266 adress
//chnage all 8080 to your esp8266 port
	if(isset($_POST['RELAY_OFF'])) {
  RELAY_1_OFF_FUNC();
  sleep(1);
		RELAY_2_OFF_FUNC();
  sleep(1);
		RELAY_3_OFF_FUNC();
  sleep(1);
		RELAY_4_OFF_FUNC();
  sleep(1);
    RELAY_1_OFF_FUNC_STRING();
  sleep(1);
		RELAY_2_OFF_FUNC_STRING();
  sleep(1);
		RELAY_3_OFF_FUNC_STRING();
  sleep(1);
		RELAY_4_OFF_FUNC_STRING();
  sleep(1);
  ESP_ECHO_FUNC();
	}
	if(isset($_POST['RELAY_1_ON'])) {
        RELAY_1_ON_FUNC();
		sleep(1);
		RELAY_1_ON_FUNC_STRING();
		ESP_ECHO_FUNC();
    }
	if(isset($_POST['RELAY_1_OFF'])) {
        RELAY_1_OFF_FUNC();
		sleep(1);
		RELAY_1_OFF_FUNC_STRING();
	ESP_ECHO_FUNC();
    }
	if(isset($_POST['RELAY_2_ON'])) {
        RELAY_2_ON_FUNC();
				sleep(1);
				RELAY_2_ON_FUNC_STRING();
  ESP_ECHO_FUNC();
    }
	if(isset($_POST['RELAY_2_OFF'])) {
        RELAY_2_OFF_FUNC();
				sleep(1);
				RELAY_2_OFF_FUNC_STRING();
  ESP_ECHO_FUNC();
    }
	if(isset($_POST['RELAY_3_ON'])) {
        RELAY_3_ON_FUNC();
				sleep(1);
				RELAY_3_ON_FUNC_STRING();
  ESP_ECHO_FUNC();
    }
	if(isset($_POST['RELAY_3_OFF'])) {
        RELAY_3_OFF_FUNC();
				sleep(1);
				RELAY_3_OFF_FUNC_STRING();
  ESP_ECHO_FUNC();
    }
	if(isset($_POST['RELAY_4_ON'])) {
       	RELAY_4_ON_FUNC();
				sleep(1);
				RELAY_4_ON_FUNC_STRING();
  ESP_ECHO_FUNC();
	}
	if(isset($_POST['RELAY_4_OFF'])) {
        RELAY_4_OFF_FUNC();
				sleep(1);
				RELAY_4_OFF_FUNC_STRING();
  ESP_ECHO_FUNC();
    }
function RELAY_1_ON_FUNC(){
    if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the hexadecimal data
    $message = "\xa0\x01\x01\xa2";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_1_ON \n";
      
     
    }
function RELAY_1_OFF_FUNC(){
            if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the hexadecimal data
    $message = "\xa0\x01\x00\xa1";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_1_OFF \n";
    }
function RELAY_2_ON_FUNC(){
    if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , $adress , $port))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the hexadecimal data
    $message = "\xa0\x02\x01\xa3";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_2_ON \n";
      
     
    }
function RELAY_2_OFF_FUNC(){
            if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the hexadecimal data
    $message = "\xa0\x02\x00\xa2";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_2_OFF \n";
    }
function RELAY_3_ON_FUNC(){
    if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the hexadecimal data
    $message = "\xa0\x03\x01\xa4";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_3_ON \n";
      
     
    }
function RELAY_3_OFF_FUNC(){
            if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the hexadecimal data
    $message = "\xa0\x03\x00\xa3";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_3_OFF \n";
    }
function RELAY_4_ON_FUNC(){
    if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the hexadecimal data
    $message = "\xa0\x04\x01\xa5";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_4_ON \n";
    }
function RELAY_4_OFF_FUNC(){
            if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the hexadecimal data
    $message = "\xa0\x04\x00\xa4";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}
echo "Message send successfully RELAY_4_OFF \n";

    }
function ESP_ECHO_FUNC(){
            if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the hexadecimal data
    $message = "\x00\x00\x00\x00";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}
/*echo "Message send successfully esp_echo_test \n"; */
echo '<script type="text/javascript">alert("Command sent!");
window.history.go(-1);</script>';
    }
function RELAY_1_ON_FUNC_STRING(){
    if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the message to esp8266 
    $message = "ESP062_1_ON";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_1_ON \n";
      
     
    }
function RELAY_1_OFF_FUNC_STRING(){
            if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the message to esp8266 
    $message = "ESP062_1_OFF";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_1_OFF \n";

    }
function RELAY_2_ON_FUNC_STRING(){
    if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the message to esp8266 
    $message = "ESP062_2_ON";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_2_ON \n";
      
     
    }
function RELAY_2_OFF_FUNC_STRING(){
            if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the message to esp8266 
    $message = "ESP062_2_OFF";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_2_OFF \n";

    }
function RELAY_3_ON_FUNC_STRING(){
    if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the message to esp8266 
    $message = "ESP062_3_ON";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_3_ON \n";
      
     
    }
function RELAY_3_OFF_FUNC_STRING(){
            if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the message to esp8266 
    $message = "ESP062_3_OFF";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_3_OFF \n";

    }
function RELAY_4_ON_FUNC_STRING(){
    if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the message to esp8266 
    $message = "ESP062_4_ON";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_4_ON \n";
      
     
    }
function RELAY_4_OFF_FUNC_STRING(){
            if(!($sock = socket_create(AF_INET, SOCK_STREAM, getprotobyname("tcp"))))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Couldn't create socket: [$errorcode] $errormsg \n");
}

    echo "Socket created \n";

    //Connect socket to remote server
    if(!socket_connect($sock , '192.168.1.100' , 8080))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not connect: [$errorcode] $errormsg \n");
}

    echo "Connection established \n";
    //Is this proper representation of the message to esp8266 
    $message = "ESP062_4_OFF";

    //Send the message to the server
    if( ! socket_send ( $sock , $message, strlen($message) , 0))
{
    $errorcode = socket_last_error();
    $errormsg = socket_strerror($errorcode);

    die("Could not send data: [$errorcode] $errormsg \n");
}

echo "Message send successfully RELAY_4_OFF \n";

    }
?>
