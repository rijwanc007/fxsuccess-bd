@extends('Front_End.layout.master')
@section('home_status','active')
@section('carousel')
  @include('Front_End.layout.includes.carousel')
  @endsection
@section('ticker')
  @include('Front_End.layout.includes.ticker')
  @endsection
@section('content')
  <div class="container-fluid mb-1-half mt-1-half" style="background-color: #f5f5f5">
    <div class="row">
      <div class="col-lg-3 col-sm-6 md-pr-1-half" id="firstdiv">
        <div class="row">
          <!-- Start Left-navigation -->
          <div class="col-lg-12 col-sm-12 order-md-2 order-lg-3">
            <div class="mb-1-half card card-warning1">
              <div class="card-header conurl" align="center">
                <h4 class="card-title" style="font-size: 18px">
                  <a role="button ">
                      <span class="text-white">
                      <i class="fa fa-graduation-cap no-mr"></i>
                      <strong class="text-uppercase">Forex School</strong>
                      </span>
                  </a>
                </h4>
              </div>
            </div>
            <div class="ms-collapse no-mb" id="accordion5" role="tablist" aria-multiselectable="true">
                @foreach($newArr as $key=>$val)
                  <?php
                      $tab_val = $loop->index+1;
                  ?>
                  <div class="card card-primary3 lbg3 conurl no-mt mb-1-half">
                    <div class="card-header" role="tab" id="{{$tab_val}}">
                      <h4 class="card-title">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" href="#{{$tab_val}}5" aria-expanded="<?php echo ($tab_val == 1  ? 'true' : 'false') ?>" aria-controls="{{$tab_val}}5">
                        <i class="fa fa-chain-broken"></i> {{$key}}</a>
                      </h4>
                    </div>
                    
                     <div id="{{$tab_val}}5" class="card-collapse collapse <?php echo ($tab_val == 1  ? 'show' : ' ') ?> num-spacing" role="tabpanel" aria-labelledby="{{$tab_val}}" data-parent="#accordion5">
                      <ul>
                        @foreach ($val as $courseid=>$coursetitle)
                        <li>
                          <a class="withripple courseid" id="{{$coursetitle['id']}}" href="javascript:void(0)">
  
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i>{{$coursetitle['title']}} </span>
                          </a>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  
                  </div>
                 @endforeach
              </div>

            <!-- Top Forex Brokers BEGIN -->
            <div class="position-relative mb-1-half">
              <h4 class="trading-session-header mt-1-half">Top Forex Brokers</h4>
              <div class="toggleWrapper">
                <input type="checkbox" name="forex-brokers" data-value="l1" class="mobileToggle user-toggle" id="forex-brokers">
                <label for="forex-brokers"></label>
              </div>
              <div class="hide-l1 right-widget-hide">
                <table class="top-broker-table left-tab">
                  <tbody>
                  @if(!empty($first_broker))
                  <tr>
                    <td class="text-success width-50">
                      <div class="position-relative-align">
                        <i class="fa fa-star"></i>
                        <span>1</span>
                      </div>
                    </td>
                    <td>
                      <div class="table-broker-img glass">
                        <img src="{{url('/brokerimages/'.$first_broker->image)}}" alt="FXCC_FXBNP">
                      </div>
                    </td>
                    <?php
                    $first_broker_top = json_decode($first_broker->broker_info)
                    ?>
                    <td><a href="javascript:void(0)">{{$first_broker_top->broker_name}}</a></td>
                  <td class="review"><a href="{{url('show-broker/'.$first_broker->id)}}">Review</a></td>
                  </tr>
                  @endif
                  @if(!empty($second_broker))
                  <tr>
                    <td class="text-info width-50">
                      <div class="position-relative-align">
                        <i class="fa fa-star"></i>
                        <span>2</span>
                      </div>
                    </td>
                    <td>
                      <div class="table-broker-img glass">
                        <img src="{{url('/brokerimages/'.$second_broker->image)}}" alt="ironfx-logo">
                      </div>
                    </td>
                    <?php
                    $second_broker_top = json_decode($second_broker->broker_info)
                    ?>
                    <td><a href="javascript:void(0)">{{$second_broker_top->broker_name}}</a></td>
                    <td class="review"><a href="{{url('/show-broker/'.$second_broker->id)}}">Review</a></td>
                  </tr>
                  @endif
                  @if(!empty($third_broker))
                  <tr>
                    <td class="text-warning width-50">
                      <div class="position-relative-align">
                        <i class="fa fa-star"></i>
                        <span>3</span>
                      </div>
                    </td>
                    <td>
                      <div class="table-broker-img glass">
                        <img src="{{url('/brokerimages/'.$third_broker->image)}}" alt="Pepperstone">
                      </div>
                    </td>
                    <?php
                    $third_broker_top = json_decode($third_broker->broker_info)
                    ?>
                    <td><a href="javascript:void(0)">{{$third_broker_top->broker_name}}</a></td>
                    <td class="review"><a href="{{url('/show-broker/'.$third_broker->id)}}">Review</a></td>
                  </tr>
                  @endif
             
                  <tr class="footer">
                    <td colspan="4"><a href="{{url('/allbrokers')}}">Read More Broker Review</a></td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
           </div>
       
       </div>
      </div>
      <!-- Hide -->
      <div class="col-lg-6 col-sm-12 md-pl-1-half md-pr-1-half md-mt-1-half" id="seconddiv">
          <div class="mid-content ">
            <header class="title-container">
                <h2 class="forex-header">FXSUCCESSBD তে আপনাকে স্বাগতম</h2>
            </header>
            <div class="school-content">
                <div id="mycourse">
                <h4>FXSUCCESSBD কি ?</h4>
                <div class="border-combo">
                  <p class="line-green"></p>
                  <p class="line-rellow"></p>
                </div>
                <p>
                  FXSUCCESSBD বাংলা ভাষায় একটি বেতিক্রমধর্মী অনলাইন ফরেক্স কমিউনিটি  এবং ট্রেডিং এডুকেশন পোর্টাল যেখানে ফরেস্ক্ররে খারাপ এবং ভাল দুই দিক নিয়েই পর্যালচনা করা হয়েছে এবং চেষ্টা করা হয়েছে সঠিক INFORMATION তুলে ধারার চেষ্টা করা হয়েছে। কাথাটি অপ্রিয় হলেও সত্য য়ে ফরেক্স একটি অত্যন্ত ঝুকি সম্পূর্ন ব্যবসায় যেখানে প্রায় ৯৫% মানুষ লসের সম্মুখিন হয়। খুটি নাটি না জেনে, ঝুকি সংক্রান্ত বিষয়গুলো পর্যালচনা না করে, সঠীকভাবে ট্রেডিং না শিখে, ডোমো না করে শুধু মাত্র অন্যের কথায় প্রলভীত হয়ে অসংখ্য মানুষ বিভিন্নভাবে লসের সম্মুখীন হচ্ছে যেটা কখনও কারও কাম্য হতে পারে না।
                </p>
                <h4>FXSUCCESSBD-র লক্ষ্য এবং কেন এই ফরেক্স স্কুলঃ</h4>
                <div class="border-combo">
                  <p class="line-green"></p>
                  <p class="line-rellow"></p>
                </div>
                <p>
                  FXSUCCESSBD কাউকে ফরেক্স ট্রেডিংয়ে অনুপ্রাণিত করে না বরং ফরেক্স  ট্রেডিংয়ের যাবতীয় ঝুকির দিকগুলোকে তুলে ধরে নতুনদেরকে সতেচন হতে সহায়তা করে। যারা বর্তমানে ফরেক্স ট্রেডিং করছেন, শুধুমাত্র তাদের জন্যই  FXSUCCESSBD একটি আলোচনা এবং অ্যানালাইসিস পোর্টাল। ফরেক্স ট্রেডিংয়ে লিভারেজ থাকার কারনে স্বভাবগত ভাবে এই ব্যবসায়ে ঝুকি বিদ্যমান।  কিন্তু যারা ফরেক্স ট্রেডিংয়ের যাবতীয় ঝুকি সম্পর্কে সচেতন এবং বর্তমানে ফরেক্স ট্রেডিং করছেন, FXSUCCESSBD শুধুমাত্র তাদের ফরেক্স ট্রেডিংয়ে  সহযোগিতা প্রদানের চেষ্টা করে যাচ্ছে।
                </p>
                <p>
                  ফরেক্স ট্রেডিংয়ে সফল হওয়া হলো অনেক দিনের পরিশ্রম, সাধনা এবং অনেক অনেক অনুশীলনের ফসল সুতরাং কোন লভনীয় বিজ্ঞাপনে বা কারও দেখানও ১০০% লাভের আশায় প্রলভীত না হওবার জন্য সবাইক অনুরোধ জানান হচ্ছে। মনে রাখবেন আপনার লস কারার সামর্থ্য না থাকলে কখনই ফরেক্স মার্কেটে বিনিয়োগ করবেন না।
                </p>
    
              </div>
          </div>
           <div class="carousel-wrap">
            <div class="popular-carousel-header">
              <span>Recent Article</span>
            </div>
              <div class="owl-carousel">
                @foreach ($all_articles as $article)
                    
               
                <div class="item">
                  <div class="zoom-img owl-image-container">
                  <img src="{{url('/articleimages/'.$article->image)}}">
                  <span class="image-inner-text">Forex article</span>
                  </div>
                  <div class="article-detail">
                  <span class="bottom-title"><a href="{{url('/test/'.$article->id)}}">{{$article->title}}</a></span>
                  <span class="article-text">{!!str_limit($article->description, $limit = 50, $end = '')!!}</span> <a href="{{url('/test/'.$article->id)}}"  class="text-light-blue">Read More</a>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
        </div>
      </div>
      {{-- <div class="col-lg-6 col-sm-12 md-pl-1-half md-pr-1-half md-mt-1-half" id="seconddiv">
          <div class="mid-content">
            <h2 class="forex-header">FXSUCCESSBD তে আপনাকে স্বাগতম</h2>
            <div class="school-content">
              <div id="mycourse">
              <h4>FXSUCCESSBD কি ?</h4>
              <div class="border-combo">
                <p class="line-green"></p>
                <p class="line-rellow"></p>
              </div>
              <p>
                FXSUCCESSBD বাংলা ভাষায় একটি বেতিক্রমধর্মী অনলাইন ফরেক্স কমিউনিটি  এবং ট্রেডিং এডুকেশন পোর্টাল যেখানে ফরেস্ক্ররে খারাপ এবং ভাল দুই দিক নিয়েই পর্যালচনা করা হয়েছে এবং চেষ্টা করা হয়েছে সঠিক INFORMATION তুলে ধারার চেষ্টা করা হয়েছে। কাথাটি অপ্রিয় হলেও সত্য য়ে ফরেক্স একটি অত্যন্ত ঝুকি সম্পূর্ন ব্যবসায় যেখানে প্রায় ৯৫% মানুষ লসের সম্মুখিন হয়। খুটি নাটি না জেনে, ঝুকি সংক্রান্ত বিষয়গুলো পর্যালচনা না করে, সঠীকভাবে ট্রেডিং না শিখে, ডোমো না করে শুধু মাত্র অন্যের কথায় প্রলভীত হয়ে অসংখ্য মানুষ বিভিন্নভাবে লসের সম্মুখীন হচ্ছে যেটা কখনও কারও কাম্য হতে পারে না।
              </p>
              <h4>FXSUCCESSBD-র লক্ষ্য এবং কেন এই ফরেক্স স্কুলঃ</h4>
              <div class="border-combo">
                <p class="line-green"></p>
                <p class="line-rellow"></p>
              </div>
              <p>
                FXSUCCESSBD কাউকে ফরেক্স ট্রেডিংয়ে অনুপ্রাণিত করে না বরং ফরেক্স  ট্রেডিংয়ের যাবতীয় ঝুকির দিকগুলোকে তুলে ধরে নতুনদেরকে সতেচন হতে সহায়তা করে। যারা বর্তমানে ফরেক্স ট্রেডিং করছেন, শুধুমাত্র তাদের জন্যই  FXSUCCESSBD একটি আলোচনা এবং অ্যানালাইসিস পোর্টাল। ফরেক্স ট্রেডিংয়ে লিভারেজ থাকার কারনে স্বভাবগত ভাবে এই ব্যবসায়ে ঝুকি বিদ্যমান।  কিন্তু যারা ফরেক্স ট্রেডিংয়ের যাবতীয় ঝুকি সম্পর্কে সচেতন এবং বর্তমানে ফরেক্স ট্রেডিং করছেন, FXSUCCESSBD শুধুমাত্র তাদের ফরেক্স ট্রেডিংয়ে  সহযোগিতা প্রদানের চেষ্টা করে যাচ্ছে।
              </p>
              <p>
                ফরেক্স ট্রেডিংয়ে সফল হওয়া হলো অনেক দিনের পরিশ্রম, সাধনা এবং অনেক অনেক অনুশীলনের ফসল সুতরাং কোন লভনীয় বিজ্ঞাপনে বা কারও দেখানও ১০০% লাভের আশায় প্রলভীত না হওবার জন্য সবাইক অনুরোধ জানান হচ্ছে। মনে রাখবেন আপনার লস কারার সামর্থ্য না থাকলে কখনই ফরেক্স মার্কেটে বিনিয়োগ করবেন না।
              </p>
  
            </div>
          </div>
          </div>
          <div class="carousel-wrap">
              <div class="popular-carousel-header">
                <span>Recent Article</span>
              </div>
                <div class="owl-carousel">
                  <div class="item">
                    <div class="zoom-img owl-image-container">
                    <img src="assets/img/av.jpg">
                    <span class="image-inner-text">Forex article</span>
                    </div>
                    <div class="article-detail">
                    <span class="bottom-title"><a href="javascript:void(0)">How to open your account in fxsuccessbd</a></span>
                    <span class="article-text">BDIPP's goal is not to inspire on forex trading. We have recently noticed that some people or groups are tempted to have huge or guaranteed profits through forex trading. They are joining them for the commission, talking about 100% income or giving signals. But Forex trading can never be guaranteed</span> <a href="article/article-detail.html" target="_blank" class="text-light-blue">Read More</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="zoom-img owl-image-container">
                    <img src="assets/img/av.jpeg">
                    <span class="image-inner-text">Forex article</span>
                  </div>
                    <div class="article-detail">
                    <span class="bottom-title"><a href="javascript:void(0)">How to open your account in fxsuccessbd</a></span>
                    <span class="article-text">BDIPP's goal is not to inspire on forex trading. We have recently noticed that some people or groups are tempted to have huge or guaranteed profits through forex trading. They are joining them for the commission, talking about 100% income or giving signals. But Forex trading can never be guaranteed</span> <a href="article/article-detail.html" target="_blank" class="text-light-blue">Read More</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="zoom-img owl-image-container">
                    <img src="assets/img/city.jpg">
                    <span class="image-inner-text">Forex article</span>
                  </div>
                    <div class="article-detail">
                    <span class="bottom-title"><a href="javascript:void(0)">How to open your account in fxsuccessbd</a></span>
                    <span class="article-text">BDIPP's goal is not to inspire on forex trading. We have recently noticed that some people or groups are tempted to have huge or guaranteed profits through forex trading. They are joining them for the commission, talking about 100% income or giving signals. But Forex trading can never be guaranteed</span> <a href="article/article-detail.html" target="_blank" class="text-light-blue">Read More</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="zoom-img owl-image-container">
                    <img src="assets/img/exp.jpg">
                    <span class="image-inner-text">Forex article</span>
                  </div>
                    <div class="article-detail">
                    <span class="bottom-title"><a href="javascript:void(0)">How to open your account in fxsuccessbd</a></span>
                    <span class="article-text">BDIPP's goal is not to inspire on forex trading. We have recently noticed that some people or groups are tempted to have huge or guaranteed profits through forex trading. They are joining them for the commission, talking about 100% income or giving signals. But Forex trading can never be guaranteed</span> <a href="article/article-detail.html" target="_blank" class="text-light-blue">Read More</a>
                    </div>
                  </div>
                  <div class="item">
                    <div class="zoom-img owl-image-container">
                    <img src="assets/img/city.jpg">
                    <span class="image-inner-text">Forex article</span>
                  </div>
                    <div class="article-detail">
                    <span class="bottom-title"><a href="javascript:void(0)">How to open your account in fxsuccessbd</a></span>
                    <span class="article-text">BDIPP's goal is not to inspire on forex trading. We have recently noticed that some people or groups are tempted to have huge or guaranteed profits through forex trading. They are joining them for the commission, talking about 100% income or giving signals. But Forex trading can never be guaranteed</span> <a href="article/article-detail.html" target="_blank" class="text-light-blue">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
      </div> --}}
        
      <div class="col-lg-3 col-sm-6 col md-pl-1-half" id="thirddiv">
        <div class="row">
          <!-- Start Right-navigation -->
          <div class="col-lg-12 col-md-12 col-sm-12 order-md-2 order-lg-3">
            <div class="row signal-table">
              <div class="col-md-12 ">
                <div class="position-relative">
                  <h4 class="trading-session-header">TRADING SESSION</h4>
                  <div class="toggleWrapper">
                    <input type="checkbox" name="toggle1" data-value="1" class="mobileToggle user-toggle" id="toggle1" checked>
                    <label for="toggle1"></label>
                  </div>
                  <div class="hide-1">
                    <table class="downborder1 lbg3 conurl text-left v-middle">
                      <tr class="table table-resonsive lhsize3 ">
                        <td>
                          <img src="{{asset('assets/img/flag/aud.jpg')}}" class="banglaimg">Sydeny
                        </td>
                        <td>
                          <span class="badge badge-danger badge-edit">Closed</span>
                        </td>
                        <td class="clocktable text-center no-p"><span id="sydney"></span></td>
                      </tr>
                      <tr class="table table-resonsive lhsize3 ">
                        <td>
                          <img src="{{asset('assets/img/flag/tokyo.png')}}" class="banglaimg">Tokyo
                        </td>
                        <td>
                          <span class="badge badge-danger badge-edit">Closed</span>
                        </td>
                        <td class="clocktable text-center no-p"><span id="tokyo"></span></td>
                      </tr>
                      <tr class="table table-resonsive lhsize3 ">
                        <td>
                          <img src="{{asset('assets/img/flag/london.png')}}" class="banglaimg">London
                        </td>
                        <td>
                          <span class="badge badge-success badge-edit">Open</span>
                        </td>
                        <td class="clocktable text-center no-p"><span id="london"></span></td>
                      </tr>
                      <tr class="table table-resonsive lhsize3 ">
                        <td>
                          <img src="{{asset('assets/img/flag/newyork.png')}}" class="banglaimg">New York
                        </td>
                        <td>
                          <span class="badge badge-warning badge-edit">Closing</span>
                        </td>
                        <td class="clocktable text-center no-p"><span id="newyork"></span></td>
                      </tr>
                      <script type="text/javascript">
                          new showLocalTime("sydney", "Australia/Sydney", "hh:mm:ss A (ddd)")
                          new showLocalTime("tokyo", "Asia/Tokyo", "hh:mm:ss A (ddd)")
                          new showLocalTime("london", "Europe/London", "hh:mm:ss A (ddd)")
                          new showLocalTime("newyork", "America/New_York", "hh:mm:ss A (ddd)")
                      </script>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- Analysis -->
            <div class="position-relative">
              <h4 class="trading-session-header mt-1-half">Market Analysis</h4>
              <div class="toggleWrapper">
                <input type="checkbox" name="technical-analysis" data-value="4" class="mobileToggle user-toggle" id="technical-analysis" checked>
                <label for="technical-analysis"></label>
              </div>
              <div class="hide-4">
                <ul class="custum-nav-indicator master-upper nav nav-tabs nav-tabs-transparent indicator-primary market-panal-bg" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link withoutripple active" href="#recent" aria-controls="cat" role="tab" data-toggle="tab">
                      <span>Recent</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link withoutripple" href="#popular"  aria-controls="cat1" role="tab" data-toggle="tab">
                      <span>Popular</span>
                    </a>
                  </li>
                </ul>
                <div class="panel-body  ">
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active show fade" id="recent">
                      <div class="recent-analysis-container" data-simplebar>
                        <ul class="profile-list">

                          @foreach ($recent_analysis as $recentanalysis)
                          <?php
                          $analysis = DB::table('visits')->where('visitable_id','=',$recentanalysis->id)->get();
                          $analysis_com_cntrec = DB::table('comments')->where('analysis_id','=',$recentanalysis->id)->get();

                         ?>
                              
                         <li>
                            <div class="analysis-icon">
                              <img src="{{url('/upload/images/'.$recentanalysis->image)}}" alt="..." class="pro-img">
                            </div>
                            <div class="analysis-discription">
                              <div class="right-info-container">
                              <h4 class="profile-name conurl"><a href="{{url('/fxanaysis/'.$recentanalysis->id)}}">{{$recentanalysis->title}}</a></h4>
                              <p class="discription">{!!str_limit($recentanalysis->description,$limit =25,$end='')!!}</p>
                                <p class="vc-num">
                                      <span class="bp-view">
                                      <i class="fa fa-comments mr10"></i>
                                      <span id="ip_view"><?php if(!empty($analysis_com_cntrec)){echo count($analysis_com_cntrec);}?></span>
                                      </span>
                                  <span class="bp-view">
                                      <i class="fa fa-eye mr10"></i>
                                  <span id="ip_view"><?php if(!empty($analysis)){echo count($analysis);}?></span>
                                      </span>
                                </p>
                              </div>
                            </div>
                          </li>
                          @endforeach
                         </ul>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="popular">
                      <div class="recent-analysis-container">
                          <ul class="profile-list">
                              @foreach ($show_popular as $popular)
                                <?php
                                 $analysispop = DB::table('visits')->where('visitable_id','=',$popular->id)->get();
                                 $analysis_com_cntpop = DB::table('comments')->where('analysis_id','=',$popular->id)->get();
                                ?>
                               <li>
                                <div class="analysis-icon">
                                  <img src="{{url('/upload/images/'.$popular->image)}}" alt="..." class="pro-img">
                                </div>
                                <div class="analysis-discription">
                                  <div class="right-info-container">
                                    <h4 class="profile-name conurl"><a href="{{url('/fxanaysis/'.$popular->id)}}">{{$popular->title}}</a></h4>
                                    <p class="discription">{!!str_limit($popular->description,$limit =25,$end='')!!}</p>
                                    <p class="vc-num">
                                      <span class="bp-view">
                                      <i class="fa fa-comments mr10"></i>
                                      <span id="ip_view"><?php if(!empty($analysis_com_cntpop)){echo count($analysis_com_cntpop);}?></span>
                                      </span>
                                      <span class="bp-view">
                                      <i class="fa fa-eye mr10"></i>
                                      <span id="ip_view"><?php if(!empty($analysispop)){echo count($analysispop);}?></span>
                                      </span>
                                    </p>
                                  </div>
                                </div>
                              </li>
                              @endforeach
                            </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="position-relative">
                <h4 class="trading-session-header mt-1-half">Advertisement</h4>
                <div class="toggleWrapper">
                  <input type="checkbox" name="forex-cross-rates" data-value="5" class="mobileToggle user-toggle" id="forex-cross-rates" checked>
                  <label for="forex-cross-rates"></label>
                </div>
                <div class="hide-5">
                    <table class="ad-table">
                        <tbody>
                           <tr>
                              <td colspan="2">
                                 <a href="javascript:void(0)" target="_blank">
                                 <img src="{{url('addimage/'.$first_img['advertisement'])}}">
                                 </a>
                              </td>
                           </tr>
                            <tr>
                              @foreach($left_advertisement as $advertisement)
                              <td>
                                 <a href="javascript:void(0)" target="_blank">
                                 <img src="{{url('addimage/'.$advertisement['advertisement'])}}">
                                 </a>
                              </td>
                              @endforeach
                           </tr>
                        </tbody>
                     </table>
                </div>
              </div>
              
            <div class="position-relative">
              <h4 class="trading-session-header mt-1-half">Market Summary</h4>
              <div class="toggleWrapper">
                <input type="checkbox" name="market-summary" data-value="2" class="mobileToggle user-toggle" id="market-summary">
                <label for="market-summary"></label>
              </div>
              <div class="hide-2 right-widget-hide">
                <div class="tradingview-widget-container">
                  <div class="tradingview-widget-container__widget"></div>
                  <script type="text/javascript" src="{{asset('https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js')}}" async>
                      {
                          "showChart": true,
                          "locale": "en",
                          "width": "100%",
                          "height": 500,
                          "largeChartUrl": "",
                          "plotLineColorGrowing": "rgba(60, 188, 152, 1)",
                          "plotLineColorFalling": "rgba(255, 74, 104, 1)",
                          "gridLineColor": "rgba(233, 233, 234, 1)",
                          "scaleFontColor": "rgba(214, 216, 224, 1)",
                          "belowLineFillColorGrowing": "rgba(60, 188, 152, 0.05)",
                          "belowLineFillColorFalling": "rgba(255, 74, 104, 0.05)",
                          "symbolActiveColor": "rgba(242, 250, 254, 1)",
                          "tabs": [
                          {
                              "title": "Indices",
                              "symbols": [
                                  {
                                      "s": "INDEX:SPX",
                                      "d": "S&P 500"
                                  },
                                  {
                                      "s": "INDEX:IUXX",
                                      "d": "Nasdaq 100"
                                  },
                                  {
                                      "s": "INDEX:DOWI",
                                      "d": "Dow 30"
                                  },
                                  {
                                      "s": "INDEX:NKY",
                                      "d": "Nikkei 225"
                                  },
                                  {
                                      "s": "INDEX:DAX",
                                      "d": "DAX Index"
                                  },
                                  {
                                      "s": "OANDA:UK100GBP",
                                      "d": "FTSE 100"
                                  }
                              ],
                              "originalTitle": "Indices"
                          },
                          {
                              "title": "Commodities",
                              "symbols": [
                                  {
                                      "s": "CME_MINI:ES1!",
                                      "d": "E-Mini S&P"
                                  },
                                  {
                                      "s": "CME:E61!",
                                      "d": "Euro"
                                  },
                                  {
                                      "s": "COMEX:GC1!",
                                      "d": "Gold"
                                  },
                                  {
                                      "s": "NYMEX:CL1!",
                                      "d": "Crude Oil"
                                  },
                                  {
                                      "s": "NYMEX:NG1!",
                                      "d": "Natural Gas"
                                  },
                                  {
                                      "s": "CBOT:ZC1!",
                                      "d": "Corn"
                                  }
                              ],
                              "originalTitle": "Commodities"
                          },
                          {
                              "title": "Forex",
                              "symbols": [
                                  {
                                      "s": "FX:EURUSD"
                                  },
                                  {
                                      "s": "FX:GBPUSD"
                                  },
                                  {
                                      "s": "FX:USDJPY"
                                  },
                                  {
                                      "s": "FX:USDCHF"
                                  },
                                  {
                                      "s": "FX:AUDUSD"
                                  },
                                  {
                                      "s": "FX:USDCAD"
                                  }
                              ],
                              "originalTitle": "Forex"
                          }
                      ]
                      }
                  </script>
                </div>
              </div>
            </div>
            <!-- TradingView Widget END -->
            <!-- TradingView Widget Calender BEGIN -->
            <div class="position-relative">
              <h4 class="trading-session-header mt-1-half">Economic Calender</h4>
              <div class="toggleWrapper">
                <input type="checkbox" name="eco-calender" data-value="3" class="mobileToggle user-toggle" id="eco-calender">
                <label for="eco-calender"></label>
              </div>
              <div class="hide-3 right-widget-hide">
                <div class="tradingview-widget-container">
                  <div class="tradingview-widget-container__widget"></div>
                  <script type="text/javascript" src="{{asset('https://s3.tradingview.com/external-embedding/embed-widget-events.js')}}" async>
                      {
                          "width": "100%",
                          "height": 400,
                          "locale": "en",
                          "importanceFilter": "-1,0,1"
                      }
                  </script>
                </div>
              </div>
            </div>
            <!-- TradingView Widget Calender END -->
          </div>
          <!-- end Left-navigation -->
        </div>
      </div>
    </div>
  </div>
   <script>
        $(document).ready(function(){

           $(".courseid").click(function(){
               var crsid = $(this).attr('id'); 
               //alert(crsid);
              $.get('/singlecourse/'+crsid,function(data){
                 console.log(data);
                    if ($(window).width() < 768 ) {
                        length = 350;
                    }

                    else{
                        length = 2600;
                    }
             
                  $('#mycourse').replaceWith('<div class="moretext"  id="mycourse"><h4>'+data.title+'</h4><div class="border-combo"><p class="line-green"></p><p class="line-rellow"></p></div><p>'+(data.description)+'</p></div>')
                 
                  var cHtml = $(".moretext").html();
                  var cText = $(".moretext").html().substr(0, length).trim();
                  //console.log(cHtml);
                  
                  if(cHtml.length>length){
                      $(".moretext").addClass("compressed").html(cText + "... <a href='javascript:void(0)' data-target='#description' id='toggle' class='reply exp see-more-button'>Read More <i class=' fa fa-chevron-down'></i></a>");
                      window.handler = function()
                   {
                     $('.exp').click(function(){

                        if ($(".moretext").hasClass("compressed"))
                        {
                            $(".moretext").html(cHtml + "<a href='javascript:void(0)' data-target='#description' id='toggle' class='exp reply see-more-button no-ml'>Read Less <i class= 'fa fa-chevron-up'></i></a>");
                            $(".moretext").removeClass("compressed");
                            $('.moretext p').last().addClass('no-m');
                            handler();
                            return false;
                        } else {
                           $(".moretext").addClass("compressed");
                            $(".moretext").html(cText  + "...<a href='javascript:void(0)' data-target='#description' id='toggle' class='exp reply see-more-button less'>Read More <i class=' fa fa-chevron-down'></i></a>" );
                            $(".moretext p:last-child").css('margin-bottom','0');
                            handler();
                            return false;
                       }
                    });

                   }
                  handler();
                  
                  
                  } 
              
              });

            });
        
      });
    </script>
  @endsection
@section('ticker_bottom')
  @include('Front_End.layout.includes.ticker_bottom')
  @endsection
