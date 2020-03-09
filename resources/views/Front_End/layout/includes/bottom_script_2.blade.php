<script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')}}"></script>
<script src="{{asset('')}}assets/js/plugins.min.js"></script>
<script type="text/javascript" src="{{asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
<script>
    $(document).ready(function(){
        var i, lis = document.getElementById("review-con").getElementsByTagName("li");

        for( i=0; i<lis.length ; i++){
            lis[i].insertAdjacentHTML("afterbegin","<i class='fa fa-dot-circle-o position-relative mr-1-half pull-left' style=' top:5px '></i> ");
        };
    });
    $(document).ready(function(){
        var j, table = document.getElementById("procon").getElementsByTagName("td");

        for( j=0; j<table.length ; j++){
            table[j].insertAdjacentHTML("afterbegin","<i class='fa fa-dot-circle-o position-relative mr-1-half pull-left' style=' top:2px '></i> ");
        };
    })
</script>
<script>
    $(document).ready(function(){

        targetnext = $(".broker-full-review-table td[colspan ='2']").next().css({
            'background-color':'#ffffff',
            'text-transform':'uppercase',
            'font-weight':'700'
        });

        $('.broker-full-review-table td').each(function() {
            var text = $(this).text();
            if(text == 'No'){
                $(this).html('<i class="fa fa-times-circle text-danger"></i> No');
            }

            if(text.substring(0, 3) == 'Yes'){
                $(this).prepend('<i class="fa fa-check-circle text-success"></i> ');
            }
        });
        if ($(window).width() <768){
            $('#Glance').css('overflow','auto');
        }
    })
</script>
<script type="text/javascript" src="{{asset('assets/css/video-styles/java/FWDUVPlayer.js')}}"></script>
<script type="text/javascript">
    FWDUVPUtils.onReady(function(){
        var yn;
        if($(window).width()<=768){
            yn="no";
        }
        else{
            yn="yes"
        }
        new FWDUVPlayer({
            //main settings
            instanceName:"player1",
            parentId:"videoPlayerDiv",
            playlistsId:"playlists",
            mainFolderPath:"assets/css/video-styles",
            skinPath:"classic_skin_dark",
            displayType:"responsive",
            initializeOnlyWhenVisible:"no",
            fillEntireVideoScreen:"no",
            privateVideoPassword:"428c841430ea18a70f7b06525d4b748a",
            useHEXColorsForSkin:"no",
            normalHEXButtonsColor:"#FF0000",
            selectedHEXButtonsColor:"#000000",
            useDeepLinking:"yes",
            showPreloader:"yes",
            rightClickContextMenu:"disabled",
            addKeyboardSupport:"yes",
            autoScale:"yes",
            showButtonsToolTip:"yes",
            stopVideoWhenPlayComplete:"no",
            playAfterVideoStop:"no",
            autoPlay:"no",
            loop:"no",
            shuffle:"no",
            showErrorInfo:"yes",
            maxWidth:2000,
            maxHeight:552,
            volume:.8,
            buttonsToolTipHideDelay:1.5,
            backgroundColor:"#000000",
            videoBackgroundColor:"#000000",
            posterBackgroundColor:"#000000",
            buttonsToolTipFontColor:"#5a5a5a",
            //logo settings
            showLogo:"no",
            hideLogoWithController:"yes",
            logoPosition:"topRight",
            logoLink:"http://www.webdesign-flash.ro/",
            logoMargins:5,
            //playlists/categories settings
            showPlaylistsSearchInput:"no",
            usePlaylistsSelectBox:"yes",
            showPlaylistsButtonAndPlaylists:"no",
            showPlaylistsByDefault:"no",
            thumbnailSelectedType:"opacity",
            startAtPlaylist:0,
            buttonsMargins:0,
            thumbnailMaxWidth:350,
            thumbnailMaxHeight:350,
            horizontalSpaceBetweenThumbnails:40,
            verticalSpaceBetweenThumbnails:40,
            inputBackgroundColor:"#333333",
            inputColor:"#999999",
            //playlist settings
            showPlaylistButtonAndPlaylist:"yes",
            playlistPosition:"right",
            showPlaylistByDefault:yn,
            showPlaylistName:"yes",
            showSearchInput:"no",
            showLoopButton:"yes",
            showShuffleButton:"yes",
            showNextAndPrevButtons:"yes",
            showThumbnail:"yes",
            forceDisableDownloadButtonForFolder:"yes",
            addMouseWheelSupport:"yes",
            startAtRandomVideo:"no",
            stopAfterLastVideoHasPlayed:"yes",
            folderVideoLabel:"VIDEO ",
            playlistRightWidth:310,
            playlistBottomHeight:599,
            startAtVideo:0,
            maxPlaylistItems:50,
            thumbnailWidth:70,
            thumbnailHeight:70,
            spaceBetweenControllerAndPlaylist:2,
            spaceBetweenThumbnails:2,
            scrollbarOffestWidth:10,
            scollbarSpeedSensitivity:.5,
            playlistBackgroundColor:"#000000",
            playlistNameColor:"#FFFFFF",
            thumbnailNormalBackgroundColor:"#1b1b1b",
            thumbnailHoverBackgroundColor:"#313131",
            thumbnailDisabledBackgroundColor:"#272727",
            searchInputBackgroundColor:"#000000",
            searchInputColor:"#bdbdbd",
            youtubeAndFolderVideoTitleColor:"#FFFFFF",
            folderAudioSecondTitleColor:"#999999",
            youtubeOwnerColor:"#bdbdbd",
            youtubeDescriptionColor:"#bdbdbd",
            mainSelectorBackgroundSelectedColor:"disable",
            mainSelectorTextNormalColor:"#FFFFFF",
            mainSelectorTextSelectedColor:"#FFFFFF",
            mainButtonBackgroundNormalColor:"#212021",
            mainButtonBackgroundSelectedColor:"#212021",
            mainButtonTextNormalColor:"#FFFFFF",
            mainButtonTextSelectedColor:"#FFFFFF",
            //controller settings
            showController:"yes",
            showControllerWhenVideoIsStopped:"yes",
            showNextAndPrevButtonsInController:"no",
            showPlaybackRateButton:"yes",
            showVolumeButton:"yes",
            showTime:"yes",
            showQualityButton:"yes",
            showInfoButton:"no",
            showDownloadButton:"no",
            showShareButton:"no",
            showEmbedButton:"no",
            showFullScreenButton:"yes",
            disableVideoScrubber:"no",
            repeatBackground:"no",
            controllerHeight:37,
            controllerHideDelay:3,
            startSpaceBetweenButtons:10,
            spaceBetweenButtons:10,
            scrubbersOffsetWidth:2,
            mainScrubberOffestTop:16,
            timeOffsetLeftWidth:2,
            timeOffsetRightWidth:3,
            timeOffsetTop:0,
            volumeScrubberHeight:80,
            volumeScrubberOfsetHeight:12,
            timeColor:"#bdbdbd",
            youtubeQualityButtonNormalColor:"#bdbdbd",
            youtubeQualityButtonSelectedColor:"#FFFFFF",
            //advertisement on pause window
            aopwTitle:"Advertisement",
            aopwWidth:400,
            aopwHeight:240,
            aopwBorderSize:6,
            aopwTitleColor:"#FFFFFF",
            //subtitle
            subtitlesOffLabel:"Subtitle off",
            //popup add windows
            showPopupAdsCloseButton:"yes",
            //embed window and info window
            embedAndInfoWindowCloseButtonMargins:0,
            borderColor:"#333333",
            mainLabelsColor:"#FFFFFF",
            secondaryLabelsColor:"#bdbdbd",
            shareAndEmbedTextColor:"#5a5a5a",
            inputBackgroundColor:"#000000",
            inputColor:"#FFFFFF",
            //loggin
            isLoggedIn:"yes",
            playVideoOnlyWhenLoggedIn:"yes",
            loggedInMessage:"Please login to view this video.",
            //audio visualizer
            audioVisualizerLinesColor:"#0099FF",
            audioVisualizerCircleColor:"#FFFFFF",
            //playback rate / speed
            defaultPlaybackRate:1, //0.25, 0.5, 1, 1.25, 1.2, 2
            //cuepoints
            executeCuepointsOnlyOnce:"no",
            //annotations
            showAnnotationsPositionTool:"no",
            //ads
            openNewPageAtTheEndOfTheAds:"no",
            adsButtonsPosition:"left",
            skipToVideoText:"You can skip to video in: ",
            skipToVideoButtonText:"Skip Ad",
            adsTextNormalColor:"#bdbdbd",
            adsTextSelectedColor:"#FFFFFF",
            adsBorderNormalColor:"#444444",
            adsBorderSelectedColor:"#FFFFFF"
        });
    });

</script>
<!-- Setup video player end-->
<!-- Broker New Ticker -->
<script src="{{asset('assets/js/jquery.bootstrap.newsbox.js')}}"></script>
<script type="text/javascript">
    $(function () {
        $(".news-ticker-images").bootstrapNews({
            newsPerPage: 4,
            navigation: true,
            autoplay: false, //true
            direction: 'up', // up or down
            animationSpeed: 'normal',
            newsTickerInterval: 4000, //4 secs
            pauseOnHover: true,
            onStop: null,
            onPause: null,
            onReset: null,
            onPrev: null,
            onNext: null,
            onToDo: null
        });
    });
</script>
<!-- Broker New Ticker End -->
<!-- Carosel Ticker -->
<script src="{{asset('assets/js/jquery.carouselTicker.js')}}"></script>
<script src="{{asset('assets/js/start.js')}}"></script>
<script>
    $(".carouselTicker").carouselTicker({
        // animation speed
        speed: 2,
        // animation delay
        delay: 30,
        // RTL or LTR
        reverse: true
    });
</script>
<!-- Carosel Ticker End -->
<!-- FXTM info adjustment for ipad -->
<script>
    if ($(window).width() == 768){
        $('#d-ipad').addClass('ipad-ac').after('<button class="btn btn-raised demo-ac ipad-ac">Open Demo Account <i class="fa fa-chevron-circle-right"></i></button>');
    }
</script>
<!-- FXTM info adjustment for ipad End -->

<script>
    $('.progress-bar').each(function(){
        var progress = $(this).attr('aria-valuenow');
        if(progress<3){
            $(this).css('width','2%');
        }
    })
</script>

<script>
    $('.hoverOnLi').each(function(){
        var targetHover = $(this).attr('data-value');
        var text_length = $('.removeadd-'+targetHover+'.regulation span').text().length;
        var lengthCompare;
        if(targetHover == 1){
            lengthCompare = 104;
        }
        else if(targetHover == 2 || targetHover == 4){
            lengthCompare = 15;
        }
        else{
            lengthCompare = 18;
        }
        if(text_length>lengthCompare){
            $(this).hover(function(){
                $('.removeadd-'+targetHover).removeClass('regulation');
                $(this).addClass('text-left').css('line-height','20px');
            },function(){
                $('.removeadd-'+targetHover).addClass('regulation');
                $(this).removeClass('text-left').removeAttr('style');
            })
        }

    })
</script>