<?php
$pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret');

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo "Version MySQL : " . $row['Value'];