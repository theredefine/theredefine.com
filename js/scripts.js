  function neue_slider() {

    var my_slider_counter = 0,
        curr_slide = 0,
        t_slide;

      
      $('#slideshow img').each(function() {
          $(this).addClass('slide_' + my_slider_counter);
          my_slider_counter++;
      });

      function home_switch_slide() {
          if (curr_slide >= my_slider_counter) {
              curr_slide = 0;
          } else if (curr_slide < 0) {
              curr_slide = (my_slider_counter - 1);
          }
          $('.slide_' + curr_slide).fadeIn(500);
      }

      function hide_curr_slide() {
          $('.slide_' + curr_slide).stop();
          $('.slide_' + curr_slide).fadeOut(1500);
      }

      function next_slide_slider(jump_to_slide) {
          hide_curr_slide();
          if (jump_to_slide === null) {
              curr_slide++;
          } else {
              curr_slide = jump_to_slide;
          }
          t_slide = setTimeout(home_switch_slide, 0);

      }

      function prev_slide_slider(jump_to_slide) {
          hide_curr_slide();

          if (jump_to_slide === null) {
              curr_slide--;
          } else {
            curr_slide = jump_to_slide;
            }
           t_slide = setTimeout(home_switch_slide, 0);
        }
        

        $('.slide_prev').click(function() {
            prev_slide_slider();
            clearInterval(intervalID_slide);
              intervalID_slide = setInterval(next_slide_slider, 8000);
          });
        $('.slide_next').click(function() {
            next_slide_slider();
            clearInterval(intervalID_slide);
            intervalID_slide = setInterval(next_slide_slider, 8000);
        });
     intervalID_slide = setInterval(next_slide_slider, 8000);
}


    $(document).ready(function() {

          $('.header_menu li').hover(
              function() {
                  $('ul:first', this).css('display', 'block');
              },
              function() {
                  $('ul:first', this).css('display', 'none');
              }
              );

          $('.home_post_box').hover(
              function() {
                  $(this).find('.home_post_text').css('display', 'block');
              },
              function() {
                  $(this).find('.home_post_text').css('display', 'none');
              }
            );

          $('#slideshow_cont').hover(
              function() {
                  $('.slide_prev').css('display', 'block');
                  $('.slide_next').css('display', 'block');
              },
              function() {
                  $('.slide_prev').css('display', 'none');
                  $('.slide_next').css('display', 'none');
              }
              );

          neue_slider();
          
      });
