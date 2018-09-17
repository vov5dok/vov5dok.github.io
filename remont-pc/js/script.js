var urlStr = document.location.pathname;


$('document').ready(function(){

//функция для появления и скрытия формы заявки на ремонт компьютера
  $('.zayavka_1, .klik-chtob-zakazat-fix').click(function(){
    $('.fon-content').animate({"opacity":"0.2"}, 'slow');
    $('.vslyv-okno-zayavka').show('slow');
  });
  $('.vsplyv-okno-img-close, .otmena-zayavka-submit').click(function(){
    $('.vslyv-okno-zayavka').hide('slow');
    $('.fon-content').animate({"opacity":"1.0"}, 'slow');
  });

//функция управления навигационным меню

  if (urlStr=="/remont-pc/index.php") {
    $('.nav-li-1 a').css({
      "color":"#73FFD5",
      "font-style":"italic",
      "font-size":"21px"
    });
  } else if (urlStr=="/remont-pc/prays.php") {
      $('.nav-li-2 a').css({
        "color":"#73FFD5",
        "font-style":"italic",
        "font-size":"21px"
      });
    } else if (urlStr=="/remont-pc/otzyv.php") {
        $('.nav-li-3 a').css({
          "color":"#73FFD5",
          "font-style":"italic",
          "font-size":"21px"
        });
      } else if (urlStr=="/remont-pc/kontakty.php") {
          $('.nav-li-4 a').css({
            "color":"#73FFD5",
            "font-style":"italic",
            "font-size":"21px"
          });
        }

// функция встплывающего окна на заявку

  $('.otzyv-title').click(function(){
    $('.otzyv-form, .skryt-form-otzyv').show('slow');
  });
  $('.skryt-form-otzyv').click(function(){
    $('.otzyv-form, .skryt-form-otzyv').hide('slow');
  });

});


//функция асинхронной загрузки вкладок по меню

$('.nav-li-1').click(function(){
  $('')
});