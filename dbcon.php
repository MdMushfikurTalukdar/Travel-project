<?php
$dbhost = "localhost";
$dbname	= "travel"; // change this to be the name of your database
$dbuser	= "root"; // change this to be your DB username
$dbpass	= ""; //change this to be your password

try{
$conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

}catch(PDOException $err){
  echo "Database connection problem. ". $err->getMessage();
  exit();
}
?>