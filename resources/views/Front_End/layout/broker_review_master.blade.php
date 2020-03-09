@include('Front_End.layout.includes.head')
<body>
<div id="ms-preload" class="ms-preload">
    <div id="status">
        <div class="load-new">
            <img src="{{asset('assets/img/loadspin.gif')}}" alt="">
        </div>
    </div>
</div>
@include('Front_End.layout.includes.header_bar')
@include('Front_End.layout.includes.header')
@include('Front_End.layout.includes.main_nav_bar')
@yield('broker_review_content')
@include('Front_End.layout.includes.broker_review_footer')

</body>
</html>