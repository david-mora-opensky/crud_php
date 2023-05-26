<?php 

$servidor="localhost";
$db="crud_php";
$username="root";
$password="";


try {
    $conexion=new PDO("mysql:host=$servidor;dbname=$db",$username,$password);
    // echo "conexion exitosa";
} catch (Exception $e) {
    //throw $th;
    echo $e->getMessage();
}










?>