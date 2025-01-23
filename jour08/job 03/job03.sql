<sql

$pdo = new PDO("mysql:host=localhoslt; dbname = jour08"; "charset utf-8" ;"root"; "");
$sql = "SELECT * FROM etudiant" ;
$query = $pdo-> prepare ($sql);
$query -> execute();  



sql> 



