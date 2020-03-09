
  
      $('.user-toggle').on('change',function(){
        var rightWidget = $(this).attr('data-value');
        $('.hide-'+rightWidget).toggleClass('mb-neg-1');
         if($(this).is(':checked')){
          $('.hide-'+rightWidget).slideDown();
        }
        else{
          $('.hide-'+rightWidget).slideUp();
        }
      })
 // Right Side Widget Toggle End 
 

 // Owl
$('.owl-carousel').owlCarousel({
          loop: true,
          margin: 5,
          nav: true,
          dots: false,
          navText: [
            "<i class='fa fa-chevron-left'></i>",
            "<i class='fa fa-chevron-right'></i>"
          ],
          autoplay: true,
          autoplayHoverPause: true,
          autoplayTimeout:2000,
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 3,
            },
            1000: {
              items: 3
            }
          }
        })

// Article 
$('.article-text').each(function(){
      var discriptionText = $(this).text();
        if (discriptionText.length > 60) {
        var truncated = discriptionText.trim().substring(0, 62) + '…';
        $(this).text(truncated);
        }
        })

// Regulated Button JS
 function clickHere(x){
          x.innerHTML = "Click Here";
          x.classList.add("btn-success");
          x.classList.remove("btn-primary");
         }
         
         function Regulate(x){
          x.innerHTML = "Regulated";
          x.classList.remove("btn-success");
          x.classList.add("btn-primary");
         }

// Broker Section Sidebar
$(".toggling-brok").on("click", function(){
             $("#layer").toggleClass("collapsed-broker-menu shadow");
             $(".toggling-brok.glyphicon").toggleClass("glyphicon-menu-left");
             $(".toggling-brok.glyphicon").toggleClass("glyphicon-menu-right");
            
         });

         /*Dropdown Menu*/
         $('.dropdown-new').click(function () {
         $(this).attr('tabindex', 1).focus();
         $(this).toggleClass('active');
         $(this).find('.dropdown-menu-new').slideToggle(300);
         });
         // $('.dropdown-new').focusout(function () {
         //     $(this).removeClass('active');
         //     $(this).find('.dropdown-menu-new').slideUp(300);
         // });
         $('.dropdown-new .dropdown-menu-new li').click(function () {
         $(this).parents('.dropdown-new').find('span').text($(this).text());
         $(this).parents('.dropdown-new').find('input').attr('value', $(this));
         });
         /*End Dropdown Menu*/

// Review Detail Table
