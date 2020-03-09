<script>
    $(document).ready(function(){

        if ($(window).width() < 768 ) {
            length = 570;
        }
        else{
            length = 2450;
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