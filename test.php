<?php 

include 'db.php';

$statement = $pdo->query("SELECT * FROM login");
$row = $statement->fetch(PDO::FETCH_ASSOC);
echo "<pre>" . print_r($row, 1) . "</pre>";
foreach($pdo->query('SELECT * FROM login') as $row){
	echo "<pre>" . print_r($row, 1) . "</pre>";
}

?>