<?php 
	$options = array( PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf-8');
	try {
		$pdo = new PDO('mysql:host=localhost;dbname=shop-new', 'shop-new-user', '1812dokamul', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, $options]);
		$pdo->exec("set names utf8");
	}
	catch (PDOException $e) {
		echo "Невозможно установить соединение с базой данных";
	}

?>
