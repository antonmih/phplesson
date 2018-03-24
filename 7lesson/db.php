<?php
$dbn = 'mysql:host=127.0.0.1; dbname=test';
$dbh = new PDO($dbn, 'root', '');
$sth = $dbh->prepare('SELECT * FROM persons');
$sth->execute();
$data = $sth->fetchAll();
var_dump($data);
?>