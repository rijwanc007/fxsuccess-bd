<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>FXSUCCESSBD</title>
    <meta name="description" content="Material Style Theme">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png?v=3')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Font Awesome Animation-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/font-animation.css')}}">
    <!-- Reveloution Slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution/css/layers.css')}}">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/preload.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins.min.css')}}">
    <!-- TYPEWRITER ADDON -->
    <script type="text/javascript" src="{{asset('assets/plugins/revolution/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/revolution/revolution-addons/typewriter/css/typewriter.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.light-blue-500.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Custom CSS & Signal Ticker -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/simplebar.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/app.css')}}">
    <style>
        .float {
            -webkit-animation-name: Floating;
            -webkit-animation-duration: 1.5s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: ease-in-out;
        }

        @-webkit-keyframes Floating{
            from {-webkit-transform:translate(0, 0px);}
            65% {-webkit-transform:translate(0, 15px);}
            to {-webkit-transform: translate(0, -0px);    }
        }

        .view{
            bottom: 5px;
        }

        .vanish{
            bottom:-1000px;
        }
        #hover-box{
            text-align: center;
            position: fixed;
            bottom: 0;
            z-index: 999;
            left: 0;
        }

        .robot img{
            height: 140px;
            width: auto;
            z-index: 10000;
        }
        .robot-inner-content img{
            height: 100px;
            width: 90px;
        }

        .robot{
            position: absolute;
            left: 5px;
            transition: 0.5s ease-in-out;
        }

        .robot-inner-content{
            background-color: #272727;
            padding: 50px 10px 10px;
            color: #fff;
            text-transform: uppercase;
            width: 250px;
            transition: 0.5s ease-in-out;
            position: absolute;
            left: 5px;
            box-shadow: 3px 8px 15px rgba(0, 0, 0, 0.44);
            border-radius: 5px;
        }

        .robot-inner-content p{
            line-height: 20px;
            margin-bottom: 0;
            font-weight: 500;
        }

        .robot-inner-content .btn{
            padding: 5px 12px;
            margin: 5px 0 0;
            font-weight: 600;
        }

        .inner-bot{
            position: absolute;
            top: -70px;
            left: 78px;
        }

        .modal .modal-dialog .modal-content.broker-robo-modal .modal-body{
            padding: 5px;
        }

        .modal .modal-dialog .modal-content.broker-robo-modal .modal-footer .btn{
            margin-left: 5px
        }

        .modal .modal-dialog .modal-content.broker-robo-modal .modal-header .modal-title{
            margin: 0 auto;
            padding: 0;
            font-weight: 500;
            text-transform: uppercase;
            color: #292626;
        }

        .broker-robo-modal .modal-header{
            background: #fff
        }

    </style>
    <script src="{{asset('assets/js/moment.js')}}"></script>
    <script src="{{asset('assets/js/moment-timezone.js')}}"></script>
    <script type="text/javascript">
        /***********************************************
         * Local Time script- By Dynamic Drive (http://www.dynamicdrive.com)
         * Please keep this notice intact
         * Visit http://www.dynamicdrive.com/ for this script and 100s more.
         ***********************************************/
        function showLocalTime(container, zoneString, formatString){
            var thisobj=this
            this.container=document.getElementById(container)
            this.localtime = moment.tz(new Date(), zoneString)
            this.formatString = formatString
            this.container.innerHTML = this.localtime.format( this.formatString )
            setInterval(function(){thisobj.updateContainer()}, 1000) //update container every second
        }

        showLocalTime.prototype.updateContainer=function(){
            this.localtime.second(this.localtime.seconds() + 1 )
            this.container.innerHTML = this.localtime.format( this.formatString )
        }

    </script>
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>

    <![endif]-->
</head>