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
    });
    $(document).ready(function () {
        if ($(window).width() <= 991 && $(window).width() > 767) {
            $("#thirddiv").remove().insertBefore("#seconddiv");
        }
    });
    $('.side-toggle').click(function(){
        $('#thirddiv').fadeToggle();
        $('#seconddiv').toggleClass('no-pr');
        $('#seconddiv').toggleClass('col-lg-6 col-lg-9');
    });
</script>
