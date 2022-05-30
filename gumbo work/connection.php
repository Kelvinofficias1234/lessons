<?php
$server ='localhost';
$user_name ='root';
$password ='';
$db ='market';

//create connection

$conn =mysqli_connect("localhost","root","","market");
//check connection

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}else{
    echo "";
}

?>