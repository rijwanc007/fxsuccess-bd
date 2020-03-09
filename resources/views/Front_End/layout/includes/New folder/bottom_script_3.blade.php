<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
<script src="{{asset('assets/js/footable.js')}}"></script>
<script src="{{asset('../assets/js/simplebar.js')}}"></script>
<script src="{{asset('assets/js/jquery.carouselTicker.js')}}"></script>
<script src="{{asset('assets/js/start.js')}}"></script>
<script src="{{asset('assets/js/plugins.min.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/js/portfolio.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script>
    (function($) {
        function doAnimations(elems) {
            var animEndEv = "webkitAnimationEnd animationend";
            elems.each(function() {
                var $this = $(this),
                    $animationType = $this.data("animation");
                $this.addClass($animationType).one(animEndEv, function() {
                    $this.removeClass($animationType);
                });
            });
        }
        var $myCarousel = $("#carouselExampleIndicators"),
            $firstAnimatingElems = $myCarousel
                .find(".carousel-item:first")
                .find("[data-animation ^= 'animated']");
        $myCarousel.carousel();
        doAnimations($firstAnimatingElems);
        $myCarousel.on("slide.bs.carousel", function(e) {
            var $animatingElems = $(e.relatedTarget).find(
                "[data-animation ^= 'animated']"
            );
            doAnimations($animatingElems);
        });
    })(jQuery);
</script>
<script>
    $(".carouselTicker").carouselTicker({
        speed: 2,
        delay: 30,
        reverse: true
    });
</script>
<script>
    $(document).ready(function () {
        if ($(window).width() <= 991 && $(window).width() >599) {
            $("#thirddiv").remove().insertBefore("#seconddiv");
        }
    })
</script>
<script>
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
</script>
<script>
    $('.side-toggle').click(function(){
        $('#thirddiv').fadeToggle();
        $('#seconddiv').toggleClass('no-pr');
        $('#seconddiv').toggleClass('col-lg-6 col-lg-9');
        $('.toggle-adjust-left').toggleClass('col-md-3 col-md-4');
        $('.toggle-adjust-right').toggleClass('col-md-9 col-md-8');
    })
</script>
<script>
    $(document).ready(function(){

        if ($(window).width() < 768 ) {
            length = 570;
        }

        else{
            length = 2600;
        }

        cHtml = $(".school-content").html();
        cText = $(".school-content").html().substr(0, length).trim();

        if(cHtml.length>length){

            $(".school-content").addClass("compressed").html(cText + "... <a href='javascript:void(0)' data-target='#description' id='toggle' class='reply exp see-more-button'>Read More <i class=' fa fa-chevron-down'></i></a>");
            window.handler = function()
            {
                $('.exp').click(function(){
                    if ($(".school-content").hasClass("compressed"))
                    {
                        $(".school-content").html(cHtml + "<a href='javascript:void(0)' data-target='#description' id='toggle' class='exp reply see-more-button no-ml'>Read Less <i class= 'fa fa-chevron-up'></i></a>");
                        $(".school-content").removeClass("compressed");
                        $('.school-content p').last().addClass('no-m');
                        handler();
                        return false;
                    }
                    else
                    {
                        $(".school-content").html(cText  + "...<a href='javascript:void(0)' data-target='#description' id='toggle' class='exp reply see-more-button'>Read More <i class=' fa fa-chevron-down'></i></a>" );
                        $(".school-content").addClass("compressed");
                        $(".school-content p:last-child").css('margin-bottom','0');
                        handler();
                        return false;
                    }
                });
            }
            handler();
        }

    });
</script>
<script>
    $('.side-toggle').click(function(){
        $('#thirddiv').fadeToggle();
        $('#seconddiv').toggleClass('no-pr');
        $('#seconddiv').toggleClass('col-lg-6 col-lg-9');
    })
</script>




