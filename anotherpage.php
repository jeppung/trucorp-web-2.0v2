<?php
$link = new mysqli("172.21.0.2", "root", "dbpass123", "Trucorp");

echo 'Jumlah total users pada database: '; 
if($result = $link->query("SELECT * FROM users")){
        	$num = $result->num_rows;
		echo $num;
        }
?>
