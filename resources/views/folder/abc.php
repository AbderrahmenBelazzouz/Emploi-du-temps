<?php

session_start();

@$id= NULL ; 
@$name = 'gregory';
@$prenom = 'fffffffff';
@$birth = '2000-11-11';
@$arrive = '2001-01-01';


$name=$name."";
$prenom=$prenom."";
$birth=$birth."";
$arrive=$arrive."";


$host="localhost";

$username="root";
$password="";

$database="registration";

$pdo=new PDO("mysql:host=$host;dbname=$database",$username,$password);


$result = $pdo->prepare("insert into employe (id, nom, prenom, date_naissance, date_arrivee) VALUES (NULL,?, ?,?, ?)");
$result->execute(array($name , $prenom, $birth , $arrive));


echo 'chicke legs' ;




?>