@include('Front_End.layout.includes.head')
<body>
        <script type="text/javascript">

            $(function() {
                $('body').on('click', '.pagination a', function(e) {
                    e.preventDefault();            
                    var url = $(this).attr('href');  
                    getArticles(url);
                    window.history.pushState("", "", url);
                });
            
                function getArticles(url) {
                    $.ajax({
                        url : url  
                    }).done(function (data) {
                        $('.reviews').html(data);  
                    }).fail(function () {
                        alert('Review could not be loaded.');
                    });
                }
            });
            
            </script>   
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
@yield('review_content')
@yield('ticker_bottom')
@include('Front_End.layout.includes.footer')
@include('Front_End.layout.includes.bottom_script_2')

    {{-- @yield('js') --}}
</body>
</html>