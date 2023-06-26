<?php

$host = "localhost";
$database = "contacts_app";
$user = "root";
$password =  "";

try {
  $connection = new PDO ("mysql:host=$host;dbname=$database",$user, $password);
      // test solo quitar los //
 //foreach ($connection->query("SHOW DATABASES") as $row) {
 //   print_r($row);
 // }
 // die();
} catch (PDOException $e ){
  die("PDO Connection Error: " . $e->getMessage());
}
