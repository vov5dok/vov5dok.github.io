<!DOCTYPE html>
<html>
<head>
	<title>Ремонт компьютеров и ноутбуков в Самаре</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
	include "header.php";
	include "nav.php";
?>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<div class="otzyv-content">
	<div class="otzyv-title">
		<p>Оставить отзыв</p>
	</div>
	<span class="skryt-form-otzyv"><--Скрыть форму--></span>
	<div class="otzyv-form">
		<form method="POST" name="form1">
			<p><label for="name" class="otzyv-form-name">Ваше Имя и Фамилия (мин.2 символа): </p>
			<p><input type="text" name="name" id="name" class="text-form-name" placeholder="Введите Имя"></label></p>
			<p><label for="text" class="otzyv-form-text">Ваш отзыв (мин. 2 символа): </p>
			<p><textarea name="text" id="text" cols="30" rows="7" class="otzyv-form-decoration" placeholder="Ваш отзыв"></textarea></label></p>
			<p><input type="submit" class="otzyv-submit" name="submit" value="Отправить"></p>
		</form>
	</div>

	<div class="otzyv-table">

		<div class="otzyv-block">
			<div class="otzyv-click-left">
				<img src="img/20.png">
			</div>
			<div class="otzyv-vyvod-bd">
			<!--	<?php
					$db = new PDO ('mysql:host=localhost; dbname=my_bd', 'root', '1812dokamul');
					$db->exec("SET NAMES UTF8");			
					foreach($db->query('SELECT Name, Data, Text FROM otzyv') as $row) {
						echo '<div class="otzyv-withdraval">';
						echo '<div class="otzyv-name-data">';
						echo '<div class="otzyv-name-withdraval">' . $row['Name'] . '</div>';
						echo '<div class="otzyv-data-withdraval">' . $row['Data'] . '</div>';
						echo '</div>';
						echo '<div class="otzyv-text-withdraval clear">' . $row['Text'] . '</div>';
						echo '</div><br>';					
					}
				?>-->
			</div>
			<div class="otzyv-click-right">
				<img src="img/19.png">
			</div> 
		</div>
		
	</div>

<!--	
	<?php
		error_reporting(E_ALL ^ E_NOTICE);
		if(count($_POST)>0)
		{
			$name = trim($_POST['name']);
			$text = trim($_POST['text']);
			$date = date("Y:m:d H-i-s");
			
			if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Проверка, была ли отправлена форма наш код
				$name = htmlspecialchars($_POST['name']);
				$text = htmlspecialchars($_POST['text']);
			}
		}
		else {
			echo '';
		}
			
		function clean($value = "") {
			$value = trim($value); // Удаление пробелов из начала и конца строки
			$value = stripslashes($value); // Удаление экранированных символов
			$value = strip_tags($value); // Удаление HTML и PHP тегов
			$value = htmlspecialchars($value); // Преобразование специальных символов
	
			return $value;
		}
	
		function check_length($value = "", $min, $max) {
			$result = (mb_strlen($value) < $min || mb_strlen($value) > $max); // mb_strlen необходима для проверки длины строки
			return !$result;
		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Проверка, была ли отправлена форма наш код
			$name=isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : "";
			$text=isset($_POST['text']) ? htmlspecialchars(trim($_POST['text'])) : "";
	
			if (!empty($name) && !empty($text)){ //Проверка на зполнение всех форм
				if (check_length($name, 2, 25) && check_length($text, 2, 1000)) { // Установили ограничения по количеству символов в переменной
					echo '<div class="otz-error">Спасибо за сообщение!</div>';
				}
				else {
					echo '<div class="otz-error">Введите данные корректно!</div>';
				}
			}
			else {
				echo '<div class="otz-error">Заполните все поля!</div>';
			}
		}
		else {
				echo '<div class="otz-error">Заполните все поля!</div>';
		}
		$db = new PDO ('mysql:host=localhost; dbname=my_bd', 'root', '1812dokamul');
		$db->exec("SET NAMES UTF8");
		$query = $db -> prepare("INSERT INTO otzyv (Name, Text, Data) VALUES (:name, :text, :date)");
		$values = [':name' => $name, ':text' => $text, ':date' => $date];
		$query->execute($values);
		unset($date);
		unset($_POST);
		$msg = 'Спасибо за отзыв! Обращайтесь к нам еще!';
	?>
	-->
	<div class="klik-chtob-zakazat-fix">
		<div class="text-klik-chtob-zakazat-fix">Нажми, чтобы заказать звонок</div>
		<img src="img/18.png" class="img-klik-chtob-zakazat-fix">
	</div>
	
</div>
<?php
	include "footer.php";
?>
</body>
</html>