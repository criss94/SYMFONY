//inicializo el slider para las noticias
$(document).ready(function(){
    if (screen.width <= 767) {
      $('.slideNoticias').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });  
    }else if(screen.width <= 1199){
      $('.slideNoticias').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
    }else{
      $('.slideNoticias').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
      });
    }
});