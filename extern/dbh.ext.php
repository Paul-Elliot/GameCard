<?php 

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "quizDB";
//connexion à notre BD
$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!$conn){
    die("Connection Failed!".mysqli_connect_error());
}