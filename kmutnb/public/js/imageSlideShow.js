$(function () {

  $('.next').on('click', function () {

      if($('.active').position().left == '0') {

          if($('.active').is(':last-child')) {

                  $('.slide:first').addClass('active').removeClass('left')
                  .siblings().removeClass('active left').addClass('right')

          } else {

              $('.active').next().addClass('active').removeClass('right')
              .siblings().removeClass('active').end()
              .prevAll().addClass('left');
          }

          var slideId = '#' + $('.active').attr('id');
          $('span[data-get =\"' + slideId + '\"]').addClass('clicked')
              .siblings().removeClass('clicked');
      }

  });

  $('.prev').on('click', function () {

      if($('.active').position().left == '0') {

          if($('.active').is(':first-child')) {

                  $('.slide:last').addClass('active').removeClass('right')
                  .siblings().removeClass('active right').addClass('left')

          } else {

              $('.active').prev().addClass('active').removeClass('left')
              .siblings().removeClass('active').end()
              .nextAll().addClass('right')
          }

          var slideId = '#' + $('.active').attr('id');
          $('span[data-get =\"' + slideId + '\"]').addClass('clicked')
              .siblings().removeClass('clicked');
      }
  });


  $('.bols span').on('click', function(){

      if($('.active').position().left == '0') {

          $(this).addClass('clicked').siblings().removeClass('clicked');

          $($(this).attr('data-get')).addClass('active').removeClass('left right')
          .prevAll().removeClass('active right').addClass('left').end()
          .nextAll().removeClass('active left').addClass('right');
      }
  });
  
});