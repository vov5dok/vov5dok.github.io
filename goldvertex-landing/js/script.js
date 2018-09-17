$("document").ready( function(){
   $(".block-product").click( function(){
       $(".block-close-site").css({"display":"block"}, 0.5);
       $(".form-inquiry").css({"display":"block"}, 1000);
   });
    
    $(".block-close-form img").click( function(){
       $(".block-close-site").css({"display":"none"}, 1000);
       $(".form-inquiry").css({"display":"none"}, 1000);
   });
    $("a").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        $('html, body').animate({ scrollTop: destination }, 600);
        return false;
    });
});

