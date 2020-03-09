@extends('Front_End.layout.master')
    @section('article_status','active')
    @section('content')
<style>
.pagination .page-item .page-link {
  background-color:#292626;
}
.pagination .page-item.active .page-link {
    color: red;
    background-color: white;
    border-color: #03a9f4;
}
</style>
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
                              <a class="withripple courseid" id="" href="{{url('/')}}">
      
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
                    <input type="checkbox" name="forex-brokers" data-value="l1" class="mobileToggle user-toggle" id="forex-brokers" checked="checked">
                    <label for="forex-brokers"></label>
                  </div>
                  <div class="hide-l1">
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
                <!-- Top Forex Brokers END -->

              </div>
              <!-- end Left-navigation -->
            </div>
          </div>
          <!-- Hide -->
          <div class="col-lg-6 col-sm-12 md-pl-1-half md-pr-1-half md-mt-1-half" id="seconddiv">
            <div class="mid-content position-relative">
              <i class="fa fa-align-justify side-toggle toggle-pos-new d-none d-lg-pro"></i>
              <header class="title-container">
                <h2 class="forex-header-second"><span>Forex Article</span></h2>
              </header>
              <div class="col-12 no-p analysis-section">
                  @if (count($articles) > 0)
                  <section class="articles">
                     @include('Front_End.partial')
                  </section>
                 @endif
              </div>
            </div>
          </div>
         {{-- <script>

            $(document).ready(function () {
             
              $('body').on('click', '.pagination a', function(e){
               e.preventDefault();
                var url = $(this).attr('href');
                //alert(url);
                $.get(url, function(data){
                  //console.log(data);
                  $('.article').html(data);
                });
              });
          })
         </script> --}}
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
                              <img src="{{asset('../assets/img/flag/aud.jpg')}}" class="banglaimg">Sydeny
                            </td>
                            <td>
                              <span class="badge badge-danger badge-edit">Closed</span>
                            </td>
                            <td class="clocktable text-center no-p"><span id="sydney"></span></td>
                          </tr>
                          <tr class="table table-resonsive lhsize3 ">
                            <td>
                              <img src="{{asset('../assets/img/flag/tokyo.png')}}" class="banglaimg">Tokyo
                            </td>
                            <td>
                              <span class="badge badge-danger badge-edit">Closed</span>
                            </td>
                            <td class="clocktable text-center no-p"><span id="tokyo"></span></td>
                          </tr>
                          <tr class="table table-resonsive lhsize3 ">
                            <td>
                              <img src="{{asset('../assets/img/flag/london.png')}}" class="banglaimg">London
                            </td>
                            <td>
                              <span class="badge badge-success badge-edit">Open</span>
                            </td>
                            <td class="clocktable text-center no-p"><span id="london"></span></td>
                          </tr>
                          <tr class="table table-resonsive lhsize3 ">
                            <td>
                              <img src="{{asset('../assets/img/flag/newyork.png')}}" class="banglaimg">New York
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
                    <ul class="custum-nav-indicator master-upper slave-sm-none nav nav-tabs nav-tabs-transparent indicator-primary market-panal-bg" role="tablist">
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
                <!-- Analysis END -->
                <!-- Top Forex Brokers BEGIN -->
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
                                          <img src="{{asset('../assets/img/add/best-fxvps.png')}}">
                                          </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>
                                          <a href="javascript:void(0)" target="_blank">
                                          <img src="{{asset('../assets/img/add/fxsvps.png')}}">
                                          </a>
                                       </td>
                                       <td>
                                          <a href="javascript:void(0)" target="_blank">
                                          <img src="{{asset('../assets/img/add/fxvpspro.png')}}">
                                          </a>
                                       </td>
                                    </tr>
                                   
                                 </tbody>
                              </table>
                  </div>
                </div>
                <!-- Top Forex Brokers END -->
                <!-- TradingView Widget BEGIN -->
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
    </div>

    <style>
       .jssocials-share-logo {
      color: white;
      font-size: .75em!important;
      width: 0.85em!important;
      }
     .jssocials-share {
        margin: 0.3em 0.3em 0.3em 0!important;
      }
      .jssocials-shares * {
        box-sizing: border-box;
        width: 45px;
        height: 25px;
        }
        </style>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" />
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-minima.css" />
        <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-plain.css" />
        <script>
         $("#RoundIcons").jsSocials({
            showLabel: false,
            showCount: false,
            shares: ["twitter", "facebook", "googleplus", "linkedin"]
        });
        </script>   
       
    @endsection
    
    @section('ticker_bottom')
      @include('Front_End.layout.includes.ticker_bottom')
    @endsection
      
