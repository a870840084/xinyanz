<?php  
error_reporting(E_ALL);  
$service_port = 65520;  //这里是端口号
$address = '0.0.0.0';//这里输入服务器端IP地址

//↓创建 TCP/IP socket  
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);  
if ($socket < 0) {  
        echo "socket创建失败原因: " . socket_strerror($socket) . "</br>";  
} else {  
        echo "socket创建成功.</br>";  //socket创建成功
}  
$result = socket_connect($socket, $address, $service_port);  
if ($result < 0) {  
        echo "SOCKET连接失败原因: ($result) " . socket_strerror($result) . "</br>";  
} else {  
        echo "socket连接成功.</br>";  //socket连接成功
}  
//发送命令
$in = "测试内容";//发送内容
socket_write($socket, $in, strlen($in));

 echo socket_recvfrom($socket);
    
socket_close($socket);//结束socket


?> 


