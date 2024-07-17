<?php

$host="localhost";
$user="root";
$password="";
$db="quiz";


try{
    $conn=new PDO("mysql:host=$host;dbname=$quiz",$user,$password);

}catch(Exception $e){
    echo"smth is wrong with db";
}

?>