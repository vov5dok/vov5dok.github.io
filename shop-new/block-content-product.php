<div class="conversion-path">
		
</div>

<div class="content-product">

	<?php

		require_once('function/bd-connect.php');

		$type = $_GET['type'];
		$query = "";
		try {
			echo '<div class="product"><ul class="product_ul">';
			foreach ($pdo->query('SELECT * FROM `product` WHERE type_product = '.$type.' ') as $catalog) {
				echo '
						<li>							
							<div class="img-product">
								<img src="img/product/'.$catalog["img_glavn"].'" />
							</div>
							<div class="title-buy-price">
								<div class="title-ssylka">
									<a class="title-product" href="">'.$catalog["title"].'</a>
								</div>
								<div class="buy-like">
									<div class="knopka-buy-product">
										<a href="">Купить</a>
									</div>
									<div class="knopka-like">
										<img src="img/img-like-prod.png">
									</div>
								</div>									
								<div class="price-sale">
									<div class="price-product-home">'.$catalog["price"].'
										<span class="rub-price-home"> руб.</span>
									</div>
									<div class="rub-price-old">'.$catalog["old_price"].' руб.</div>
									<div class="rub-price-sale">'.$catalog["sale"].'</div>
								</div>									
							</div>							
						</li>
					';
			};
			echo "</ul></div>";	
		} catch (PDOException $e) {
			echo "Ошибка выполнения запроса: " . $e->getMessage();
		}

	?>

</div>