@php
use App\Advertisement;
$head_advertisement = Advertisement::where('position','=','Head')->orderBy('id','DESC')->take(1)->get();
@endphp
<header class="ms-header ms-header-primary ">
    <!--ms-header-primary-->
    <div class="container container-full position-relative">
        <div class="ms-title fxsuccess-logo">
            <a href="{{url('/')}}">
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
         @foreach($head_advertisement as $advertisement)
        <div class="top-add">
            <a href="javascript:void(0)">
                <img src="{{url('addimage/'.$advertisement->advertisement)}}"  alt="FX VPS Animation" height="50px" width="600">
            </a>
        </div>
        @endforeach


        <div class="header-right surround-border d-lg-none d-md-none d-sm-block">
            <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-10">
                <i class="zmdi zmdi-menu heart-beat"></i>
            </a>
        </div>
    </div>
</header>