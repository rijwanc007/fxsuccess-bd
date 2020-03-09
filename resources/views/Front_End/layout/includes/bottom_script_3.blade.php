<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
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
    $(".carouselTicker").carouselTicker({
        speed: 2,
        delay: 30,
        reverse: true
    });
    $('.side-toggle').click(function(){
        $('#thirddiv').fadeToggle();
        $('#seconddiv').toggleClass('no-pr');
        $('#seconddiv').toggleClass('col-lg-6 col-lg-9');
        $('.toggle-adjust-left').toggleClass('col-md-3 col-md-4');
        $('.toggle-adjust-right').toggleClass('col-md-9 col-md-8');
    });
</script>
