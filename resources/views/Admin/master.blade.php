<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Fxsuccess</title>

        <!-- Vendor styles -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="{{asset('admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendors/bower_components/animate.css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendors/bower_components/select2/dist/css/select2.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css')}}">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
       
        <!-- App styles -->
        <link rel="stylesheet" href="{{asset('admin/css/app.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/custom.css')}}">
    </head>
<style>
    .dataTables_length>label select {
    color: #b18d23 !important;
}
</style>
    <body data-sa-theme="1" onload="startTime()">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <h1><a href="{{url('/admin-panel')}}">Fxsuccess</a></h1>
                </div>
                <ul class="top-nav">

                        <li class="hidden-xl-up"><a href="" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

                        <li class="dropdown">
                            <a href="" data-toggle="dropdown" class="top-nav__notify"><i class="zmdi zmdi-email"></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                                <div class="dropdown-header">
                                    Messages
    
                                    <div class="actions">
                                        <a href="" class="actions__item zmdi zmdi-plus"></a>
                                    </div>
                                </div>
    
                                <div class="listview listview--hover">
                                        <?php
                                        use App\Message;
                                        $messages = Message::orderBy('id', 'DESC')->get();
                                        count($messages);
                                        ?>
                                    @foreach ($messages as $message)
                                     <a href="" class="listview__item">
                                        <div class="listview__content">
                                            <div class="listview__heading">
                                               {{$message->name}}
                                            <small>{{$message->created_at}}</small>
                                            </div>
                                            <p>{!!str_limit($message->message, $limit = 150, $end = '...')!!}</p>
                                        </div>
                                    </a>
                                    @endforeach
    
                                <a href="{{route('message.index')}}" class="view-more">View all messages</a>
                                </div>
                            </div>
                        </li>
                  <li class="dropdown hidden-xs-down">
                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                           
                        </div>
                    </li>

                    <li class="hidden-xs-down">
                        <a href="" class="top-nav__themes" data-sa-action="aside-open" data-sa-target=".themes"><i class="zmdi zmdi-palette"></i></a>
                    </li>

                </ul>

                <div class="clock hidden-md-down">
                    <div class="time">
                        <span id='time_hours'></span>
                        <span id='time_min' ></span>
                        <span id='time_sec'></span>
                    </div>
                </div>
            </header>

            <aside class="sidebar">
                <div class="scrollbar-inner">

                    <div class="user">
                        @if(Auth::user())
                        <div class="user__info" data-toggle="dropdown">
                            <div>
                                <div class="user__info" data-toggle="dropdown">
                            <div>
                                <div class="user__name"{{Auth::user()->name}}></div>
                                <div class="user__email">{{Auth::user()->email}}</div>
                            </div>
                        </div>

                        </div>
                        </div>
                        @else
                            <?php return redirect('admin-panel') ?>
                        
                        @endif

                        <div class="dropdown-menu">
                           
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                             </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class=""><a href="{{url('/admin-panel')}}"><i class="zmdi zmdi-home"></i> Home</a></li>

                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-view-week"></i>Category</a>
                               <ul>
                               <li><a href="{{route('category.index')}}">Manage Catetories</a></li>
                            </ul>
                        </li>

                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-view-list"></i> Course</a>
                            <ul>
                            <li><a href="{{route('course.index')}}">Manage Courses</a></li>
                            <li><a href="{{route('course.create')}}">Create Course</a></li>
                             
                            </ul>
                        </li>
                        <li class="navigation__sub">
                                <a href=""><i class="zmdi zmdi-view-list"></i> Article</a>
                                <ul>
                                <li><a href="{{route('article.index')}}">Manage Article</a></li>
                                <li><a href="{{route('article.create')}}">Create Article</a></li>
                                 
                                </ul>
                            </li>

                            <li class="navigation__sub">
                                <a href=""><i class="zmdi zmdi-view-list"></i> Analysis</a>
                                <ul>
                                <li><a href="{{route('analysis.index')}}">Manage Analysis</a></li>
                                <li><a href="{{route('analysis.create')}}">Create Analysis</a></li>
                                 
                                </ul>
                            </li>
                            <li class="navigation__sub">
                                <a href=""><i class="zmdi zmdi-view-list"></i> Question</a>
                                <ul>
                                <li><a href="{{route('question.index')}}">Manage Question</a></li>
                                <li><a href="{{route('question.create')}}">Create Question</a></li>
                                </ul>
                            </li>
                            <li class="navigation__sub">
                                    <a href=""><i class="zmdi zmdi-view-list"></i> Broker Options</a>
                                    <ul>
                                    <li><a href="{{url('/brokerlist/')}}">Manage Broker</a></li>
                                   </ul>
                            </li>
                            <li class="navigation__sub">
                                <a href=""><i class="zmdi zmdi-view-list"></i>Press</a>
                                <ul>
                                <li><a href="{{route('Press_Release.index')}}">Manage Press</a></li>
                                <li><a href="{{route('Press_Release.create')}}">Create Press</a></li>
                               </ul>
                        </li>
                        <li class="navigation__sub">
                            <a href=""><i class="zmdi zmdi-view-list"></i> Advertisement</a>
                            <ul>
                            <li><a href="{{route('advertisement.index')}}">Manage Add</a></li>
                            <li><a href="{{route('advertisement.create')}}">Create Add</a></li>
                           </ul>
                    </li>
                    </ul>
                </div>
            </aside>

            <div class="themes">
    <div class="scrollbar-inner">
        <a href="" class="themes__item active" data-sa-value="1"><img src="{{asset('admin/img/bg/1.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="2"><img src="{{asset('admin/img/bg/2.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="3"><img src="{{asset('admin/img/bg/3.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="4"><img src="{{asset('admin/img/bg/4.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="5"><img src="{{asset('admin/img/bg/5.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="6"><img src="{{asset('admin/img/bg/6.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="7"><img src="{{asset('admin/img/bg/7.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="8"><img src="{{asset('admin/img/bg/8.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="9"><img src="{{asset('admin/img/bg/9.jpg')}}" alt=""></a>
        <a href="" class="themes__item" data-sa-value="10"><img src="{{asset('admin/img/bg/10.jpg')}}" alt=""></a>
    </div>
</div>
            <section class="content">
            @yield('content')
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="{{asset('admin/img/browsers/chrome.png')}}" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="{{asset('admin/img/browsers/firefox.png')}}" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="{{asset('admin/img/browsers/opera.png')}}" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="{{asset('admin/img/browsers/safari.png')}}" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="{{asset('admin/img/browsers/edge.png')}}" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="{{asset('admin/img/browsers/ie.png')}}" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        {{-- <script src="{{asset('admin/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>

        <script src="{{asset('admin/vendors/bower_components/salvattore/dist/salvattore.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/flot.curvedlines/curvedLines.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/jqvmap/dist/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script> --}}
       
        <script src="{{asset('admin/vendors/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js')}}"></script>

        <script src="{{asset('admin/vendors/bower_components/salvattore/dist/salvattore.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/flot.curvedlines/curvedLines.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/jqvmap/dist/jquery.vmap.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/peity/jquery.peity.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
        <script src="{{asset('admin/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('admin/js/app.min.js')}}"></script>

        <!-- App functions and actions -->
        {{-- <script src="{{asset('admin/js/app.min.js')}}"></script> --}}
        <script>
            

            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                if (h > 12) {
                    h = h - 12;
                }
                if(h==0){
                    h=12;
                }
                document.getElementById('time_hours').innerHTML =h;
                document.getElementById('time_min').innerHTML =m;
                document.getElementById('time_sec').innerHTML =s;
                var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
                if (i < 10) {i = "0" + i};
                return i;
            }
        </script>
    </body>
</html>