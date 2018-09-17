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
	<div class="prays-content">
			<?php			
				$connection = new PDO('mysql:host=localhost;dbname=remont-pc;charset=utf8', 'root', '1812dokamul');
				echo '<table class="prays_table" border="1">';
				echo '<tr class="prays-nazv-uslugi">';
					echo '<td>Название услуги</td>';
					echo '<td>Цена</td>';
				echo '</tr>';
				echo '<tr class="prays-nazv">';
					echo '<td colspan="2">Диагностика компьютера</td>';
				echo '</tr>';
				foreach($connection->query('SELECT * FROM diagnostika_comp') as $prays_diagnostika) {
					echo '<tr>';
					echo '<td class="prays-usluga"><abbr title="Подробнее">' . $prays_diagnostika['opisanie'] . '</abbr></td>';
					echo '<td class="prays-cena">' . $prays_diagnostika['cena'] . '</td>';
					echo '</tr>';				
				}
				echo '<tr class="prays-nazv">';
					echo '<td colspan="2">Программный ремонт</td>';
				echo '</tr>';
				foreach($connection->query('SELECT * FROM program_remont') as $prays_prog_remont) {
					echo '<tr>';
					echo '<td class="prays-usluga"><abbr title="Подробнее">' . $prays_prog_remont['opisanie'] . '</abbr></td>';
					echo '<td class="prays-cena">' . $prays_prog_remont['cena'] . '</td>';
					echo '</tr>';
				}
				echo '<tr class="prays-nazv">';
					echo '<td colspan="2">Удаление вирусов</td>';
				echo '</tr>';
				foreach($connection->query('SELECT * FROM udalenie_virusov') as $prays_udal_virus) {
					echo '<tr>';
					echo '<td class="prays-usluga"><abbr title="Подробнее">' . $prays_udal_virus['opisanie'] . '</abbr></td>';
					echo '<td class="prays-cena">' . $prays_udal_virus['cena'] . '</td>';
					echo '</tr>';
				}
				echo '<tr class="prays-nazv">';
					echo '<td colspan="2">Настройка Интернета и Сети</td>';
				echo '</tr>';
				foreach($connection->query('SELECT * FROM nastroy_internet') as $prays_nastroy_internet) {
					echo '<tr>';
					echo '<td class="prays-usluga"><abbr title="Подробнее">' . $prays_nastroy_internet['opisanie'] . '</abbr></td>';
					echo '<td class="prays-cena">' . $prays_nastroy_internet['cena'] . '</td>';
					echo '</tr>';
				}
				echo '<tr class="prays-nazv">';
					echo '<td colspan="2">Настройка системы</td>';
				echo '</tr>';
				foreach($connection->query('SELECT * FROM nastroyka_system') as $prays_nastroyka_system) {
					echo '<tr>';
					echo '<td class="prays-usluga"><abbr title="Подробнее">' . $prays_nastroyka_system['opisanie'] . '</abbr></td>';
					echo '<td class="prays-cena">' . $prays_nastroyka_system['cena'] . '</td>';
					echo '</tr>';
				}
				echo '<tr class="prays-nazv">';
					echo '<td colspan="2">Аппаратный ремонт</td>';
				echo '</tr>';
				foreach($connection->query('SELECT * FROM apparatn_remont') as $prays_apparatn_remont) {
					echo '<tr>';
					echo '<td class="prays-usluga"><abbr title="Подробнее">' . $prays_apparatn_remont['opisanie'] . '</abbr></td>';
					echo '<td class="prays-cena">' . $prays_apparatn_remont['cena'] . '</td>';
					echo '</tr>';
				}
				
				echo '</table>';
			?>
			<div class="garantii">
				<ul>
					<li>По данным работам предоставляем гарантию на срок от 1 до 3 месяцев</li>
					<li>Точную цену на услуги Вы можете узнать позвонив по номеру <span class="garantii-number">+7 (937) 204-20-64</span></li>
					<li>Возможны скидки</li>
					<li>Индивидуальный подход к каждому</li>
				</ul>
			</div>	
		</div>
	<div class="klik-chtob-zakazat-fix">
		<div class="text-klik-chtob-zakazat-fix">Нажми, чтобы заказать звонок</div>
		<img src="img/18.png" class="img-klik-chtob-zakazat-fix">
	</div>
	<?php
		include "footer.php";
	?>
</body>
</html>