$(document).ready(function () {
    var speed = 100;
    $('.listaPrincipala > li.sublist > a').click(function(e){
      e.preventDefault();
      if ( ! $(this).parent().hasClass('active') ){
        $('.listaPrincipala li ul').slideUp(speed);
        $(this).next().slideToggle(speed);
        $('.listaPrincipala li').removeClass('active');
        $(this).parent().addClass('active');
      } else {
        $(this).next().slideToggle(speed);
        $('.listaPrincipala li').removeClass('active');
      }
    });
  });
  