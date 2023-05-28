<?php 
$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "rosant_farma";
$conn = new mysqli($hostName,$userName,$password,$dbName);

if(!$conn){
    die("Koneksi gagal : ".mysqli_connect_error());
}
?>