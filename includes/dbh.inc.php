<?php

$serverName ="localhost";
$dbUserName ="root";
$dbPassword ="";
$dbName ="loginsystem";

$conn = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

if(!$conn){
    die("Connection Error" . mysqli_connect_error());
}