var url_kat = window.location.href;
$('document').ready(function(){

	if (url_kat == 'http://localhost/shop-new/www/') 
	{
		$('.list_categories').css({"display":"none"});
	}

	$('.table_clothes').hover(function(){
		$('.table_clothes').animate({"margin-top":"2.5%", "margin-left":"2.5%"}, 600);		
		$('.table_clothes img').animate({"width":"280px", "height":"155px"},600);
		$('.table_clothes p').animate({"margin-top":"-39%", "width":"280px"});
	}, function(){
		$('.table_clothes p').animate({"margin-top":"-37%", "width":"100%"});
		$('.table_clothes img').animate({"width":"270px", "height":"145px"},600);		
		$('.table_clothes').animate({"margin-top":"3%", "margin-left":"3%"}, 600);		
	});


	$('.table_footwear').hover(function(){
		$('.table_footwear').animate({"margin-top":"2.5%", "margin-left":"29.5%"}, 600);		
		$('.table_footwear img').animate({"width":"280px", "height":"155px"},600);
		$('.table_footwear p').animate({"margin-top":"-39%", "width":"280px"});
	}, function(){
		$('.table_footwear p').animate({"margin-top":"-37%", "width":"100%"});
		$('.table_footwear img').animate({"width":"270px", "height":"145px"},600);		
		$('.table_footwear').animate({"margin-top":"3%", "margin-left":"30%"}, 600);		
	});

	$('.table_bags').hover(function(){
		$('.table_bags').animate({"margin-top":"2.5%", "margin-left":"56.5%"}, 600);		
		$('.table_bags img').animate({"width":"280px", "height":"155px"},600);
		$('.table_bags p').animate({"margin-top":"-39%", "width":"280px"});
	}, function(){
		$('.table_bags p').animate({"margin-top":"-37%", "width":"100%"});
		$('.table_bags img').animate({"width":"270px", "height":"145px"},600);		
		$('.table_bags').animate({"margin-top":"3%", "margin-left":"57%"}, 600);		
	});

	$('.table_perfumery').hover(function(){
		$('.table_perfumery').animate({"margin-top":"19.5%", "margin-left":"2.5%"}, 600);		
		$('.table_perfumery img').animate({"width":"280px", "height":"155px"},600);
		$('.table_perfumery p').animate({"margin-top":"-39%", "width":"280px"});
	}, function(){
		$('.table_perfumery p').animate({"margin-top":"-37%", "width":"100%"});
		$('.table_perfumery img').animate({"width":"270px", "height":"145px"},600);		
		$('.table_perfumery').animate({"margin-top":"20%", "margin-left":"3%"}, 600);		
	});

	$('.table_goods_for_home').hover(function(){
		$('.table_goods_for_home').animate({"margin-top":"19.5%", "margin-left":"29.5%"}, 600);		
		$('.table_goods_for_home img').animate({"width":"280px", "height":"155px"},600);
		$('.table_goods_for_home p').animate({"margin-top":"-39%", "width":"280px"});
	}, function(){
		$('.table_goods_for_home p').animate({"margin-top":"-37%", "width":"100%"});
		$('.table_goods_for_home img').animate({"width":"270px", "height":"145px"},600);		
		$('.table_goods_for_home').animate({"margin-top":"20%", "margin-left":"30%"}, 600);		
	});

	$('.table_toys').hover(function(){
		$('.table_toys').animate({"margin-top":"19.5%", "margin-left":"56.5%"}, 600);		
		$('.table_toys img').animate({"width":"280px", "height":"155px"},600);
		$('.table_toys p').animate({"margin-top":"-39%", "width":"280px"});
	}, function(){
		$('.table_toys p').animate({"margin-top":"-37%", "width":"100%"});
		$('.table_toys img').animate({"width":"270px", "height":"145px"},600);		
		$('.table_toys').animate({"margin-top":"20%", "margin-left":"57%"}, 600);		
	});

	$('.table_accessories').hover(function(){
		$('.table_accessories').animate({"margin-top":"36.5%", "margin-left":"2.5%"}, 600);		
		$('.table_accessories img').animate({"width":"280px", "height":"155px"},600);
		$('.table_accessories p').animate({"margin-top":"-39%", "width":"265px"});
	}, function(){
		$('.table_accessories p').animate({"margin-top":"-37%", "width":"95%"});
		$('.table_accessories img').animate({"width":"270px", "height":"145px"},600);		
		$('.table_accessories').animate({"margin-top":"37%", "margin-left":"3%"}, 600);		
	});

	$('.table_phones_gadgets').hover(function(){
		$('.table_phones_gadgets').animate({"margin-top":"36.5%", "margin-left":"29.5%"}, 600);		
		$('.table_phones_gadgets img').animate({"width":"280px", "height":"155px"},600);
		$('.table_phones_gadgets p').animate({"margin-top":"-39%", "width":"280px"});
	}, function(){
		$('.table_phones_gadgets p').animate({"margin-top":"-37%", "width":"100%"});
		$('.table_phones_gadgets img').animate({"width":"270px", "height":"145px"},600);		
		$('.table_phones_gadgets').animate({"margin-top":"37%", "margin-left":"30%"}, 600);		
	});

	$('.table_chansery').hover(function(){
		$('.table_chansery').animate({"margin-top":"36.5%", "margin-left":"56.5%"}, 600);		
		$('.table_chansery img').animate({"width":"280px", "height":"155px"},600);
		$('.table_chansery p').animate({"margin-top":"-39%", "width":"280px"});
	}, function(){
		$('.table_chansery p').animate({"margin-top":"-37%", "width":"100%"});
		$('.table_chansery img').animate({"width":"270px", "height":"145px"},600);		
		$('.table_chansery').animate({"margin-top":"37%", "margin-left":"57%"}, 600);		
	});


});