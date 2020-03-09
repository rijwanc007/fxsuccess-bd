<nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-blue1 no-mb">
    <div class="container container-full">
        <div class="ms-title fxsuccess-logo fxsuccess-logo-sm d-lg-none d-md-none d-sm-block">
            <a href="{{url('/')}}" class="text-white">
                <h1 class="animated fadeInRight animation-delay-6 logo-font">
                    <span class="logo-border"></span>
                    <span class="logo-border"></span>
                    <span class="logo-border"></span>
                    <img src="{{asset('assets/img/torus.png')}}" alt="Torus" class="torus-img">
                    <span class="fx">FX</span>
                    <span class="position-relative fw-600 cap-pos">SUCCESS
                <i class="fa fa-graduation-cap"></i></span>
                    <span class="bd">
                <span class="bd-link"></span>
                <span class="bd-text">BD</span>
                </span>
                </h1>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav ml auto ">
                <li class="nav-item text-uppercase @yield('home_status')">
                    <a href="{{url('/')}}" role="button" aria-haspopup="true" aria-expanded="false" data-name="home">
                        <i class="fa fa-home fa-custom-x"></i>HOME
                    </a>
                </li>
                <li class="nav-item text-uppercase @yield('analysis_status')">
                    <a href="{{url('/fxanaysis')}}" role="button" aria-haspopup="true" aria-expanded="false" data-name="free courses">Forex analysis</a>
                </li>
                <li class="nav-item @yield('article_status') text-uppercase">
                    <a href="{{url('/test')}}" role="button" aria-haspopup="true" aria-expanded="false" data-name="article">Forex article</a>
                </li>
                <li class="nav-item text-uppercase @yield('forex_signal_status')">
                    <a href="{{url('/forex-signal')}}" role="button" aria-haspopup="true" aria-expanded="false" data-name="free courses">Forex Signals</a>
                </li>
                <li class="nav-item dropdown text-uppercase @yield('forex_broker_status')">
                    <a href="javascript:void(0)" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown"
                       role="button" aria-haspopup="true" aria-expanded="false" data-name="fxtutor">Forex Broker
                        <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu drop-nav-fix">
                        <li>
                            <a class="dropdown-item text-uppercase" href="{{url('/allbrokers')}}">Broker Review</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item text-uppercase @yield('forex_forum_status')">
                    <a href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false" data-name="daily signal">Forex Forum</a>
                </li>
                <li class="nav-item text-uppercase @yield('faq_status')">
                    <a href="{{url('/fxquestion')}}" role="button" role="button" aria-haspopup="true" aria-expanded="false" data-name="services">FAQ</a>
                </li>
                <li class="nav-item text-uppercase @yield('contact_status')">
                    <a href="{{url('/contact')}}" role="button" role="button" aria-haspopup="true" aria-expanded="false" data-name="services">Contact</a>
                </li>
            </ul>
        </div>
        <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu d-md-none d-lg-none d-sm-block">
            <i class="zmdi zmdi-menu"></i>
        </a>
    </div>
    <!-- container -->
</nav>
<div class="extra-container">
    <div class="container-fluid currency-slider-iframe">
        <iframe src="https://www.currency.me.uk/remote/CUK-LFOREXRTICKER-2.php?ws=http://www.fxtutor.net/&amp;s=1&amp;f=verdana&amp;fc=ffffff&amp;fs=12px&amp;mbg=03357B&amp;bs=no&amp;bc=03357B&amp;vc=fff&amp;lc=eee&amp;lhc=1E5881" height="30" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="width: 100%;position: relative;top: -2px"></iframe>
    </div>
</div>