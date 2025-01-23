<?php

$pdo = new PDO("mysql:host=localhost; dbname = jour08","root","");
$sql = "SELECT * FROM etudiant" ;
$query = $pdo-> prepare ($sql);
$query -> execute ();  

$tab=$query ->fetchAll(PDO::FETCH_ASSOC);
 var_dump($tab);



?> 
