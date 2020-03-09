@extends('Front_End.layout.review_master')
@section('review_content')
         <div class="wrap wrap-broker">
            <div class="container">
               <!-- Broker Detail Header Parts -->
                  <div class="row">
                       
                     <!-- Broker Image Box -->
                     <div class="col-lg-3 d-none d-lg-block md-pr-1-half">
                        <div class="broker-imagebox h-brok img-left">
                           <div class="imagebox-inner">
                              <img src="{{url('/brokerimages/'.$broker_by_id->image)}}" alt="">
                              <div class="pic-shadow"></div>
                           </div>
                        </div>
                     </div>
                     <!-- Broker Image Box END -->
                     <!-- Broker Info Table -->
                     <div class="col-lg-47 col-md-6 tablet-8 lg-pl-0 md-pr-0 text-center">
                        <h2 class="short-info">FXTM info</h2>
                        <div class="info-container">
                           <div class="row">
                              <div class="col-lg-6 tab-pr-0 border-r">
                                 <ul class="reviewer-info-list">
                                    <li class="hoverOnLi" data-value="1">
                                       <strong>Website :</strong>
                                       <span class="regulation removeadd-1">
                                        <span>
                                       <a href="javascript:void(0)">{{$jsdecod->website}}</a>
                                     </span>
                                     </span>
                                    </li>
                                    <li>
                                       <strong>Established :</strong>
                                       {{$jsdecod->founder_in}}
                                    </li>
                                    <li class="hoverOnLi" data-value="2">
                                       <strong>Review info :</strong>
                                       <span class="regulation removeadd-2">
                                        <span>{{$jsdecod->broker_name}}</span>
                                     </span>
                                    </li>
                                    <li>
                                       <strong>Review Date :</strong>
                                       {{$broker_by_id->created_at}}
                                    </li>
                                 </ul>
                                 <button class="btn btn-raised btn-success real-ac" id="d-ipad">Open Real Account <i class="fa fa-chevron-circle-right"></i></button>
                              </div>
                              <div class="col-lg-6 tab-pl-0 d-ipad-none">
                                 <ul class="reviewer-info-list right">
                                    <li class="hoverOnLi" data-value="3">
                                       <strong>Regulation :{{$jsdecod->regulating_authority}}</strong>
                                       <span class="regulation removeadd-3">
                                        <span></span>
                                        </span>
                                    </li>
                                    <li>
                                       <strong>Country :</strong>
                                      
                                       {{$jsdecod->country}}
                                    </li>
                                    <li class="hoverOnLi" data-value="4">
                                       <strong>Reviewed By :</strong>
                                       <span class="regulation removeadd-4">
                                        <span>FXTUTOR</span>
                                      </span>
                                    </li>
                                    <li>
                                       <?php
                                           $result =  DB::table('reviews')
                                          ->where('brokerreview_id','=',$broker_by_id->id)
                                          ->avg('rating11');
                                       ?>
                                       <strong>Rating :</strong>
                                       <fieldset class="rating1">
                                          <input type="radio" id="star5" name="rating" value="5"@if(round($result)==5)checked="checked"@endif  disabled="disabled" checked="checked" />
                                          <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                          <input type="radio" id="star4half" name="rating" value="4.5"@if(round($result)==4.5)checked="checked"@endif disabled/>
                                          <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                          <input type="radio" id="star4" name="rating" value="4"@if(round($result)==4)checked="checked"@endif disabled/>
                                          <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                          <input type="radio" id="star3half" name="rating" value="3.5"@if(round($result)==3.5)checked="checked"@endif disabled/>
                                          <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                          <input type="radio" id="star3" name="rating" value="3"@if(round($result)==3)checked="checked"@endif disabled/>
                                          <label class="full" for="star3" title="Meh - 3 stars"></label>
                                          <input type="radio" id="star2half" name="rating" value="2.5"@if(round($result)==2.5)checked="checked"@endif disabled/>
                                          <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                          <input type="radio" id="star2" name="rating" value="2"@if(round($result)==2)checked="checked"@endif disabled/>
                                          <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                          <input type="radio" id="star1half" name="rating" value="1.5"@if(round($result)==1.5)checked="checked"@endif disabled/>
                                          <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                          <input type="radio" id="star1" name="rating" value="1"@if(round($result)==1)checked="checked"@endif disabled/>
                                          <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                          <input type="radio" id="starhalf" name="rating" value="0.5"@if(round($result)==0.5)checked="checked"@endif disabled/>
                                          <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                         
                                          <input type="radio" id="starhalf" name="rating" value="0" @if(round($result)==0)checked="checked"@endif disabled/>
                                          <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                          
                                       </fieldset>
                                       <span class="badge badge-primary1 r-badge">{{round($result)}}</span>
                                    </li>
                                 </ul>
                                 <button class="btn btn-raised demo-ac">Open Demo Account <i class="fa fa-chevron-circle-right"></i></button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Broker Info Table End -->
                     <!-- Top Brokers -->
                     <div class="col-lg-28 col-md-6 tablet-4 sm-mt-1 md-pl-1-half">
                      <h2 class="top-broker-header">Top FXTM Brokers</h2>
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
                     <!-- Top Brokers End -->
                  </div>
               <!-- Broker Detail Header Parts End -->
               <!-- Video And Highlighted Reviews -->
               <div class="row mt-1">
                  <!-- Video Player Div -->
                  <div class="col-lg-8 col-md-7 md-pr-1-half">
                     <div id="videoPlayerDiv"></div>
                  </div>
                <!-- Video Player Div End -->
                  <!-- Highlighted Review -->
                  <div class="col-lg-4 col-md-5 sm-mt-1">
                     <div class="row">
                        <div class="col-md-12 md-pl-0">
                           <div class="panel panel-highlighted-news no-mb">
                              <div class="panel-heading">
                                 <span class="glyphicon glyphicon-list-alt"></span>
                                 <span class="head text-uppercase">Recent Press Release</span>
                              </div>
                              <div class="panel-body highlighted-news-body">
                                 <div class="row">
                                    <ul class="brok news-ticker-images featured-news">
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)" class="fw-0">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="brok news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="brok news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)" class="fw-0">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="brok news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)" class="fw-0">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="brok news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)" class="fw-0">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="brok news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)" class="fw-0">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                       <li class="news-item">
                                          <div class="time-date">
                                             <span>
                                             <span class="color-medium-dark font-custum-weight text-uppercase">April 15, 2015 </span>
                                             </span>
                                             <span>
                                             <i class="zmdi zmdi-time  color-info"></i>
                                             <span class="color-medium-dark font-custum-weight">5:45 PM</span>
                                             <span class="text-uppercase font-custum-weight">
                                             <span class="mr-1-half color-info">source : </span>
                                             <a href="javacript:void(0)" class="brok news-source"> Live Squawk</a>
                                             </span>
                                             </span>
                                          </div>
                                          <a href="javascript:void(0)" class="fw-0">
                                          Best Trading Signal Strategy For Trading of forex learner and beginner to learn trade in a efficient way </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="panel-footer">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Highlighted Review End -->
               </div>
               <!-- Video And Highlighted Reviews End -->
               <!-- Broker Tabs -->
               <div class="forex-broker-info mt-1 mb-1">
                  <ul class="custum-nav-indicator slave-sm-none nav nav-tabs nav-tabs-transparent indicator-primary market-panal-bg review-detail" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link withoutripple active" href="#Glance" aria-controls="cat" role="tab" data-toggle="tab">
                        <i class="fa fa-exclamation-circle no-mr"></i> <span class="d-none d-sm-inline text-uppercase">FXTM at a glance</span>
                        </a>
                     </li>
                     @if(!empty($fx_rev))
                     <li class="nav-item">
                        <a class="nav-link withoutripple" href="#Review"  aria-controls="cat1" role="tab" data-toggle="tab">
                        <i class="fa fa-certificate no-mr"></i> <span class="d-none d-sm-inline text-uppercase">Review </span>
                        </a>
                     </li>
                     @endif
                     @if(!empty($broker_procon))
                     <li class="nav-item">
                        <a class="nav-link withoutripple" href="#pros-cons" aria-controls="cat2" role="tab" data-toggle="tab">
                        <i class="fa fa-deviantart no-mr"></i> <span class="d-none d-sm-inline text-uppercase">Pros & Cons </span>
                        </a>
                     </li>
                     @endif
                     <li class="nav-item">
                        <a class="nav-link withoutripple" href="#User-Reviews" aria-controls="cat2" role="tab" data-toggle="tab">
                        <i class="fa fa-star-half-o no-mr"></i> <span class="d-none d-sm-inline text-uppercase">User Reviews </span>
                        </a>
                     </li>
                  </ul>
                  <div class="panel-body">
                     <div class="tab-content">
                        <!-- Broker Review Table Tab -->
                        <div role="tabpanel" class="tab-pane active show fade" id="Glance">
                           <div class="broker-full-review-table-container">
                              <table class="broker-full-review-table mt-1">
                                 <tbody>
                                    <tr>
                                       <td colspan="2">COMPANY INFORMATION</td>
                                       <td colspan="2">ACCOUNT INFORMATION</td>
                                    </tr>
                                    <tr>
                                       <td>Broker Name</td>
                                       <td>{{$jsdecod->broker_name}}</td>
                                       <td>Segregated Account</td>
                                       <td>{{$jsdecod->segregeted_acc}}</td>
                                    </tr>
                                    <tr>
                                       <td>Website</td>
                                       <td>{{$jsdecod->website}}</td>
                                       <td>Islamic Account</td>
                                       <td>{{$jsdecod->islamic_acc}}</td>
                                    </tr>
                                    <tr>
                                       <td>Headquartered In</td>
                                       <td>{{$jsdecod->headquartered}}</td>
                                       <td>Institutional Account </td>
                                       <td>{{$jsdecod->institutional_acc}}</td>
                                    </tr>
                                    <tr>
                                       <td>Founded In</td>
                                       <td>{{$jsdecod->founder_in}}</td>
                                       <td>VIP Service</td>
                                       <td>{{$jsdecod->vip_service}}</td>
                                    </tr>
                                    <tr>
                                       <td>Regulating Authority</td>
                                       <td>{{$jsdecod->regulating_authority}}</td>
                                       <td>PAMM / MAM Account</td>
                                       <td>{{$jsdecod->pamm_mam}}</td>
                                    </tr>
                                    <tr>
                                       <td>US Clinets Accepted</td>
                                       <td>{{$jsdecod->us_client}}</td>
                                       <td>Depoist Option</td>
                                       <td>{{$jsdecod->deposite_option}}</td>
                                    </tr>
                                    <tr>
                                       <td>Broker Status</td>
                                       <td>{{$jsdecod->broker_status}}</td>
                                       <td>Withdrawal Option</td>
                                       <td>{{$jsdecod->withdrawal_opt}}</td>
                                    </tr>
                                    <tr>
                                       <td>Broker Type</td>
                                       <td>{{$jsdecod->broker_type}}</td>
                                       <td colspan="2">TRADING TERMS</td>
                                    </tr>
                                    <tr>
                                       <td>Telephone Number</td>
                                       <td>{{$jsdecod->telephone}}</td>
                                       <td>Trading Platform</td>
                                       <td>{{$jsdecod->trading_platform}}</td>
                                    </tr>
                                    <tr>
                                       <td>Fax Number</td>
                                       <td>{{$jsdecod->fax}}</td>
                                       <td>Precision Pricing</td>
                                       <td>{{$jsdecod->precision_pricing}}</td>
                                    </tr>
                                    <tr>
                                       <td>Email Support</td>
                                       <td>{{$jsdecod->email_support}}</td>
                                       <td>Type of Spread</td>
                                       <td>{{$jsdecod->spread_type}}</td>
                                    </tr>
                                    <tr>
                                       <td>International Office</td>
                                       <td>{{$jsdecod->international_office}}</td>
                                       <td>Commission</td>
                                       <td>{{$jsdecod->commission}}</td>
                                    </tr>
                                    <tr>
                                       <td>Web Site Language</td>
                                       <td>{{$jsdecod->web_language}}</td>
                                       <td>Scalping</td>
                                       <td>{{$jsdecod->scalping}}</td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">ACCOUNT INFORMATION</td>
                                       <td>Hedging</td>
                                       <td>{{$jsdecod->hedging}}</td>
                                    </tr>
                                    <tr>
                                       <td>Free Demo Account</td>
                                       <td>{{$jsdecod->demo_account}}</td>
                                       <td>Expert Advisors</td>
                                       <td>{{$jsdecod->expert_advisors}}</td>
                                    </tr>
                                    
                                    <tr>
                                       <td>Min. Deposit</td>
                                       <td>{{$jsdecod->min_deposit}}</td>
                                       <td>Lowest spread</td>
                                       <td>{{$jsdecod->lowest_spread}}</td>
                                    </tr>
                                    <tr>
                                       <td>ECN Deposit</td>
                                       <td>{{$jsdecod->ecn_deposit}}</td>
                                       <td>Trading Instruments</td>
                                       <td>{{$jsdecod->trading_instrument}}</td>
                                    </tr>
                                    <tr>
                                       <td>Account Currency</td>
                                       <td>{{$jsdecod->acc_currency}}</td>
                                       <td>One Click Execution</td>
                                       <td>{{$jsdecod->one_click_execution}}</td>
                                    </tr>
                                    <tr>
                                       <td>Maximum Leverage</td>
                                       <td>{{$jsdecod->max_leverage}}</td>
                                       <td>OCO Orders</td>
                                       <td>{{$jsdecod->oco_orders}}</td>
                                    </tr>
                                    <tr>
                                       <td>Minimul Order Vol.</td>
                                       <td>{{$jsdecod->min_order_vol}}</td>
                                       <td>Managed Account</td>
                                       <td>{{$jsdecod->managed_acc}}</td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">TRADING TERMS</td>
                                       <td>Email Alerts</td>
                                       <td>{{$jsdecod->email_alerts}}</td>
                                    </tr>
                                    <tr>
                                       <td>Interest on Margin</td>
                                       <td>{{$jsdecod->interest_margin}}</td>
                                       <td>Mobile Alerts</td>
                                       <td>{{$jsdecod->mobile_alerts}}</td>
                                    </tr>


                                    
                                    <tr>
                                       <td>OS Compatibility</td>
                                       <td>{{$jsdecod->os_compatibility}}</td>
                                       <td>Trailing Stops</td>
                                       <td>{{$jsdecod->trailing_stops}}</td>
                                    </tr>
                                    <tr>
                                       <td>Streaming News Feed</td>
                                       <td>{{$jsdecod->news_feed_stream}}</td>
                                       <td>Mobile Trading</td>
                                       <td>{{$jsdecod->mobile_trading}}</td>
                                    </tr>
                                    <tr>
                                       <td>Charting Package</td>
                                       <td>{{$jsdecod->charting_pack}}</td>
                                       <td>Web Based Trading</td>
                                       <td>{{$jsdecod->web_based_trading}}</td>
                                    </tr>
                                    <tr>
                                       <td>Trading Signal</td>
                                       <td>{{$jsdecod->trading_signal}}</td>
                                       <td colspan="2">CUSTOMER SUPPORT</td>
                                    </tr>
                                    <tr>
                                       <td>Market Commentary</td>
                                       <td>{{$jsdecod->market_commentary}}</td>
                                       <td>Customer Support Lang</td>
                                       <td>{{$jsdecod->customer_support_lang}}</td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">CUSTOMER SUPPORT</td>
                                       <td>Email+Phone support</td>
                                       <td>{{$jsdecod->email_hone_support}}</td>
                                    </tr>
                                    <tr>
                                       <td>Customer Service Hours</td>
                                       <td>{{$jsdecod->interest_margin}}</td>
                                       <td>Personal Account Manager</td>
                                       <td>{{$jsdecod->personal_acc_manager}}</td>
                                    </tr>
                                    <tr>
                                       <td>Place Trades Over the Phone</td>
                                       <td>{{$jsdecod->trade_over_phone}}</td>
                                       <td>Email Response time</td>
                                       <td>{{$jsdecod->customer_service_time}}</td>
                                    </tr>
                                    <tr>
                                       <td colspan="2">PROMOTION</td>
                                       <td colspan="2">PROMOTION</td>
                                    </tr>
                                    <tr>
                                       <td>No Deposit Bonus</td>
                                       <td>{{$jsdecod->deposit_bonus}}</td>
                                       <td>Trading Tools</td>
                                       <td>{{$jsdecod->trading_tools}}</td>
                                    </tr>
                                    <tr>
                                       <td>Bonus for First Deposit</td>
                                       <td>{{$jsdecod->first_deposite_bonus}}</td>
                                       <td>Other Promotion</td>
                                       <td>{{$jsdecod->other_promotion}}</td>
                                    </tr>
                                    <tr>
                                       <td>Free VPS</td>
                                       <td>{{$jsdecod->free_vps}}</td>
                                       <td>Close trade over the phone</td>
                                       <td>{{$jsdecod->trade_close_over_phone}}</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                        <!-- Broker Review Table Tab End-->
                        <!-- Broker Review Tab -->
                        @if(!empty($fx_rev))
                        <div role="tabpanel" class="tab-pane fade" id="Review">
                           <div class="review-container" id="review-con">
                                {!!$fx_rev->fxreview!!}
                           </div>
                        </div>
                        @endif
                        <!-- Broker Review Tab End -->
                        <!-- Pros and cons tab -->
                        @if(!empty($broker_procon))
                        <div role="tabpanel" class="tab-pane fade" id="pros-cons">
                           <table class="procon mt-1" id="procon">
                              <thead>
                                 <tr>
                                    <th>Pros</th>
                                    <th>Cons</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td><p>{!!$jsonprocon->pros!!}</p></td>
                                    <td><p>{!!$jsonprocon->cons!!}</p></td>
                                 </tr>
                               </tbody>
                           </table>
                        </div>
                        @endif
                        <!-- Pros and cons tab End-->
                        <!-- User Review Tab -->
                        <div role="tabpanel" class="tab-pane fade" id="User-Reviews">
                           <!--Rating Start-->
                           <?php
                                 $reviews = DB::table('reviews')->select('email','id','brokerreview_id','name','comment','rating11','posted_at','likes_count')->where('brokerreview_id','=',$broker_by_id->id)->orderBy('id','desc')->get();
                                
                                 $result =  DB::table('reviews')
                                          ->where('brokerreview_id','=',$broker_by_id->id)
                                          ->avg('rating11');

                                 $rting_info_under2 = DB::table('reviews')
                                          ->select('rating11', DB::raw('count(*) as total'))
                                          ->where('brokerreview_id','=',$broker_by_id->id)
                                          ->whereBetween('rating11', [1, 1.9])
                                          ->groupBy('rating11')
                                          ->get()->toArray();
                                  $rting_info_2 = DB::table('reviews')
                                          ->select('rating11', DB::raw('count(*) as total'))
                                          ->where('brokerreview_id','=',$broker_by_id->id)
                                          ->whereBetween('rating11', [2,2.9])
                                          ->groupBy('rating11')
                                          ->get()->toArray();
                                 $rting_info_3 = DB::table('reviews')
                                          ->select('rating11', DB::raw('count(*) as total'))
                                          ->where('brokerreview_id','=',$broker_by_id->id)
                                          ->whereBetween('rating11', [3,3.9])
                                          ->groupBy('rating11')
                                          ->get();
                                 $rting_info_4 = DB::table('reviews')
                                          ->select('rating11', DB::raw('count(*) as total'))
                                          ->where('brokerreview_id','=',$broker_by_id->id)
                                          ->whereBetween('rating11', [4,4.9])
                                          ->groupBy('rating11')
                                          ->get();
                                 $rting_info_5 = DB::table('reviews')
                                          ->select('rating11', DB::raw('count(*) as total'))
                                          ->where('brokerreview_id','=',$broker_by_id->id)
                                          ->whereBetween('rating11', [5,5.9])
                                          ->groupBy('rating11')
                                          ->get();
                             
                                          echo'<pre>';
                                          // print_r($rting_info_3half);
                                       echo'</pre>';
                                  $review_count = count($reviews);
                           
                           ?>
                            <style>
                                 span.social {
                                               border: 1px solid #2653cc;
                                               background: #2653cc;
                                               color: white;
                                               padding: 2px 14px;
                                               border-radius: 4px;
                                               margin: 8px;
                                           }
                                         span.sociallink{
                                           border: 1px solid #2653cc;
                                               background: #2653cc;
                                               color: white;
                                               padding: 2px 14px;
                                               border-radius: 4px;
                                               margin: 8px;
                                         }
                               </style>
                 
                           <div class="container-full fixed-gap mt-1">
                              <div class="card text-dark-brown" style="background-color:#f5f5f5;">
                                 <div class="row mr-1 ml-1">
                                    <div class="col-md-4 position-relative text-center pb-1 border-right">
                                       <h2 class="rate-header text-uppercase fw-600">Broker Rating</h2>
                                       <div class="rating-number">{{round($result)}}</div>
                                       <div class="rating-stat">
                                          Avarage Rating
                                          <fieldset class="rating1 ratingstar-pos" align="center">
                                             <input type="radio" id="star30" name="rating5" value="5"@if(round($result)==5)checked="checked"@endif disabled="disabled"/>
                                             <label class="full" for="star30" title="Awesome - 5 stars"></label>
                                             <input type="radio" id="star31half" name="rating5" value="4.5"@if(round($result)==4.5)checked="checked"@endif disabled="disabled" />
                                             <label class="half" for="star31half" title="Pretty good - 4.5 stars"></label>
                                             <input type="radio" id="star40" name="rating5" value="4"@if(round($result)==4)checked="checked"@endif disabled="disabled" />
                                             <label class="full" for="star40" title="Pretty good - 4 stars"></label>
                                             <input type="radio" id="star41half" name="rating5" value="3.5"@if(round($result)==3.5)checked="checked"@endif disabled="disabled" />
                                             <label class="half" for="star41half" title="Meh - 3.5 stars"></label>
                                             <input type="radio" id="star42" name="rating5" value="3"@if(round($result)==3)checked="checked"@endif disabled="disabled" />
                                             <label class="full" for="star42" title="Meh - 3 stars"></label>
                                             <input type="radio" id="star42half" name="rating5" value="2.5"@if(round($result)==2.5)checked="checked"@endif disabled="disabled" />
                                             <label class="half" for="star42half" title="Kinda bad - 2.5 stars"></label>
                                             <input type="radio" id="star43" name="rating5" value="2"@if(round($result)==2)checked="checked"@endif disabled="disabled" />
                                             <label class="full" for="star43" title="Kinda bad - 2 stars"></label>
                                             <input type="radio" id="star43half" name="rating5" value="1.5"@if(round($result)==1.5)checked="checked"@endif disabled="disabled" />
                                             <label class="half" for="star43half" title="Meh - 1.5 stars"></label>
                                             <input type="radio" id="star44" name="rating5" value="1"@if(round($result)==1)checked="checked"@endif disabled="disabled" />
                                             <label class="full" for="star44" title="Sucks big time - 1 star"></label>
                                             <input type="radio" id="star44half" name="rating5" value="0.5"@if(round($result)==0.5)checked="checked"@endif disabled="disabled" />
                                             <label class="half" for="star44half" title="Sucks big time - 0.5 stars"></label>
                                          </fieldset>
                                       </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 col mt-3 status-title">
                                      <div class="progress">
                                        
                                       <div class="progress-bar rating-bar" role="progressbar" aria-valuenow="<?php if(count($rting_info_5)>0){$val5 = 100*($rting_info_5[0]->total/$review_count);echo $val5;} else{$val5= 0;} ?>%" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $val5;?>%;">
                                             
                                             @if(count($rting_info_5)>0){{$rting_info_5[0]->total}}@else{{'0'}}@endif
                                          </div>
                                       </div>
                                       <div class="progress">
                                             <?php if(count($rting_info_4)>0){$val4 = 100*($rting_info_4[0]->total/$review_count);} else{$val4= 0;} ?>
                                       <div class="progress-bar progress-bar-success rating-bar" role="progressbar" aria-valuenow="{{$val4}}" aria-valuemin="0" aria-valuemax="100"
                                             style="width: {{$val4}}%">
                                             @if(count($rting_info_4)>0){{$rting_info_4[0]->total}}@else{{'0'}}@endif
                                          </div>
                                       </div>
                                       <div class="progress">
                                          
                                             <?php if(count($rting_info_3)>0){$val3 = 100*($rting_info_3[0]->total/$review_count);} else{$val3= 0;}?>
                                       <div class="progress-bar progress-bar-info rating-bar" role="progressbar" aria-valuenow="{{$val3}}" aria-valuemin="0" aria-valuemax="100"
                                       style="width: {{$val3}}%">
                                             @if(count($rting_info_3)>0){{$rting_info_3[0]->total}}@else{{'0'}}@endif
                                          </div>
                                       </div>
                                       <div class="progress">
                                             <?php if(count($rting_info_2)>0){$val2 = 100*($rting_info_2[0]->total/$review_count);} else{$val2= 0;}?>
                                          <div class="progress-bar progress-bar-warning " role="progressbar" aria-valuenow="{{$val2}}" aria-valuemin="0" aria-valuemax="100"
                                             style="width: {{$val2}}%">
                                             @if(count($rting_info_2)>0){{$rting_info_2[0]->total}}@else{{'0'}}@endif
                                          </div>
                                       </div>
                                       <div class="progress">
                                             <?php if(count($rting_info_under2)>0){$valunder = 100*($rting_info_under2[0]->total/$review_count);} else{$valunder= 0;}?>

                                          <div class="progress-bar progress-bar-danger rating-bar" role="progressbar" aria-valuenow="{{$valunder}}" aria-valuemin="0" aria-valuemax="100"
                                             style="width: {{$valunder}}%">
                                             @if(count($rting_info_under2)>0){{$rting_info_under2[0]->total}}@else{{'0'}}@endif
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-3 md-pl-0">
                                       <div class="rating-pos d-none d-md-block">
                                          <div class="rating-distance">
                                             <fieldset class="rating1 ratingstar-pos1">
                                                <input type="radio" id="star50" name="rating6" value="5" disabled="disabled" checked="checked" />
                                                <label class="full" for="star50" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star50half" name="rating6" value="4 and a half" disabled="disabled" />
                                                <label class="half" for="star50half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star51" name="rating6" value="4" disabled="disabled" />
                                                <label class="full" for="star51" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star51half" name="rating6" value="3 and a half" disabled="disabled" />
                                                <label class="half" for="star51half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star52" name="rating6" value="3" disabled="disabled" />
                                                <label class="full" for="star52" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star52half" name="rating6" value="2 and a half" disabled="disabled" />
                                                <label class="half" for="star52half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star53" name="rating6" value="2" disabled="disabled" />
                                                <label class="full" for="star53" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star53half" name="rating6" value="1 and a half" disabled="disabled" />
                                                <label class="half" for="star53half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star54" name="rating6" value="1" disabled="disabled" />
                                                <label class="full" for="star54" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="star54half" name="rating6" value="half" disabled="disabled" />
                                                <label class="half" for="star54half" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                             <?php echo round($val5);?>%
                                          </div>
                                          <div class="rating-distance">
                                             <fieldset class="rating1 ratingstar-pos1">
                                                <input type="radio" id="star60" name="rating7" value="5" disabled="disabled"  />
                                                <label class="full" for="star60" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star60half" name="rating7" value="4 and a half" disabled="disabled" />
                                                <label class="half" for="star60half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star61" name="rating7" value="4" disabled="disabled" checked="checked"/>
                                                <label class="full" for="star61" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star61half" name="rating7" value="3 and a half" disabled="disabled" />
                                                <label class="half" for="star61half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star62" name="rating7" value="3" disabled="disabled" />
                                                <label class="full" for="star62" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star62half" name="rating7" value="2 and a half" disabled="disabled" />
                                                <label class="half" for="star62half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star63" name="rating7" value="2" disabled="disabled" />
                                                <label class="full" for="star63" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star63half" name="rating7" value="1 and a half" disabled="disabled" />
                                                <label class="half" for="star63half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star64" name="rating7" value="1" disabled="disabled" />
                                                <label class="full" for="star64" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="star64half" name="rating7" value="half" disabled="disabled" />
                                                <label class="half" for="star64half" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                             <?php echo round($val4);?>%

                                          </div>
                                          <div class="rating-distance">
                                             <fieldset class="rating1 ratingstar-pos1">
                                                <input type="radio" id="star70" name="rating8" value="5" disabled="disabled"  />
                                                <label class="full" for="star70" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star70half" name="rating8" value="4 and a half" disabled="disabled" />
                                                <label class="half" for="star70half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star71" name="rating8" value="4" disabled="disabled" />
                                                <label class="full" for="star71" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star71half" name="rating8" value="3 and a half" disabled="disabled" />
                                                <label class="half" for="star71half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star72" name="rating8" value="3" disabled="disabled" checked="checked" />
                                                <label class="full" for="star72" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star72half" name="rating8" value="2 and a half" disabled="disabled" />
                                                <label class="half" for="star72half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star73" name="rating8" value="2" disabled="disabled"  />
                                                <label class="full" for="star73" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star73half" name="rating8" value="1 and a half" disabled="disabled" />
                                                <label class="half" for="star73half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star74" name="rating8" value="1" disabled="disabled" />
                                                <label class="full" for="star74" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="star74half" name="rating8" value="half" disabled="disabled" />
                                                <label class="half" for="star74half" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                             <?php echo round($val3);?>%
                                             
                                          </div>
                                          <div class="rating-distance">
                                             <fieldset class="rating1 ratingstar-pos1">
                                                <input type="radio" id="star80" name="rating9" value="5" disabled="disabled"  />
                                                <label class="full" for="star80" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star80half" name="rating9" value="4 and a half" disabled="disabled" />
                                                <label class="half" for="star80half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star81" name="rating9" value="4" disabled="disabled" />
                                                <label class="full" for="star81" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star81half" name="rating9" value="3 and a half" disabled="disabled" />
                                                <label class="half" for="star81half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star82" name="rating9" value="3" disabled="disabled" />
                                                <label class="full" for="star82" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star82half" name="rating9" value="2 and a half" disabled="disabled" />
                                                <label class="half" for="star82half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star83" name="rating9" value="2" disabled="disabled" checked="checked" />
                                                <label class="full" for="star83" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star83half" name="rating9" value="1 and a half" disabled="disabled" />
                                                <label class="half" for="star83half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star84" name="rating9" value="1" disabled="disabled" />
                                                <label class="full" for="star84" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="star84half" name="rating9" value="half" disabled="disabled" />
                                                <label class="half" for="star84half" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                             <?php echo round($val2);?>%
                                          </div>
                                          <div class="rating-distance">
                                             <fieldset class="rating1 ratingstar-pos1">
                                                <input type="radio" id="star90" name="rating10" value="5" disabled="disabled" />
                                                <label class="full" for="star90" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star90half" name="rating10" value="4 and a half" disabled="disabled"/>
                                                <label class="half" for="star90half" title="Pretty good - 4.5 stars"></label>
                                                <input type="radio" id="star91" name="rating10" value="4" disabled="disabled" />
                                                <label class="full" for="star91" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star91half" name="rating10" value="3 and a half" disabled="disabled" />
                                                <label class="half" for="star91half" title="Meh - 3.5 stars"></label>
                                                <input type="radio" id="star92" name="rating10" value="3" disabled="disabled" />
                                                <label class="full" for="star92" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star92half" name="rating10" value="2 and a half" disabled="disabled" />
                                                <label class="half" for="star92half" title="Kinda bad - 2.5 stars"></label>
                                                <input type="radio" id="star93" name="rating10" value="2" disabled="disabled" />
                                                <label class="full" for="star93" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star93half" name="rating10" value="1 and a half" disabled="disabled" />
                                                <label class="half" for="star93half" title="Meh - 1.5 stars"></label>
                                                <input type="radio" id="star94" name="rating10" value="1" disabled="disabled" />
                                                <label class="full" for="star94" title="Sucks big time - 1 star"></label>
                                                <input type="radio" id="star94half" name="rating10" value="half" disabled="disabled" />
                                                <label class="half" for="star94half" title="Sucks big time - 0.5 stars"></label>
                                             </fieldset>
                                             <?php echo round($valunder);?>%
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="container-full mt-1-half text-dark-brown">
                              <div class="row mr-1 ml-1">
                                 <div class="col-md-12 master-review">
                                    <h2 class="only-mt-1 fw-600 text-uppercase">Reviews</h2>
                                    <?php 
                                       $timestart = Session::get('user_start') ;
                                       ?>
                                       @if (time() -  $timestart < 300) 
                                       <h4 style="color:#3eb7ee">You Can Comment now - <span style="color:#03a9f4;font-weight:bold;">{{Session::get('user_name')}}</span></h4>
                                       @else
                                        <?php Session::flush();?>
                                       <h4 style="color:#3eb7ee">You have to login for commenting---<a href='{{url('/social/facebook/')}}'><span class="social"><i class="fa fa-facebook"></i></span></a>||<a href='{{url('/social/linkedin/')}}'><span class="sociallink"><i class="fa fa-linkedin"></i></span></a></h4>
                                       @endif
                                  {!!Form::open(['url'=>'/social/reviewstore/','method' => 'post','enctype'=>'multipart/form-data','id'=>'formreview'])!!}

                                    <div class="d-inline-flex ratingstar-pos1">
                                       <fieldset class="rating1">
                                          <input type="radio" class="rate" id="star1100" name="rating11" value="5" />
                                          <label class="full" for="star1100" title="Awesome - 5 stars"></label>
                                          <input type="radio" class="rate" id="star1100half" name="rating11" value="4.5"/>
                                          <label class="half" for="star1100half" title="Pretty good - 4.5 stars"></label>
                                          <input type="radio" class="rate" id="star1101" name="rating11" value="4"/>
                                          <label class="full" for="star1101" title="Pretty good - 4 stars"></label>
                                          <input type="radio" class="rate" id="star1101half" name="rating11" value="3.5"/>
                                          <label class="half" for="star1101half" title="Meh - 3.5 stars"></label>
                                          <input type="radio" class="rate" id="star1102" name="rating11" value="3"/>
                                          <label class="full"  for="star1102" title="Meh - 3 stars"></label>
                                          <input type="radio" class="rate" id="star1102half" name="rating11" value="2.5"/>
                                          <label class="half"  for="star1102half" title="Kinda bad - 2.5 stars"></label>
                                          <input type="radio" class="rate" id="star1103" name="rating11" value="2"/>
                                          <label class="full"  for="star1103" title="Kinda bad - 2 stars"></label>
                                          <input type="radio" class="rate" id="star1103half" name="rating11" value="1.5"/>
                                          <label class="half" for="star1103half" title="Meh - 1.5 stars"></label>
                                          <input type="radio" class="rate" id="star1104" name="rating11" value="1"/>
                                          <label class="full" for="star1104" title="Sucks big time - 1 star"></label>
                                          <input type="radio" class="rate" id="star1104half" name="rating11" value="0.5"/>
                                          <label class="half" for="star1104half" title="Sucks big time - 0.5 stars"></label>
                                       </fieldset>
                                       <span class="badge badge-primary2">5.0</span>
                                    </div>
                                    <input type="hidden" id="ms-form-user" name="email" class="form-control u_mail" value="{{Session::get('user_email')}}" >
                                    <input type="hidden" id="ms-form-user"  name="broker_id" class="form-control bro_id" value="{{$broker_by_id->id}}">
                                    <input type="hidden" id="ms-form-user"  name="name" class="form-control u_name" value="{{Session::get('user_name')}}">
                                    <input type="text" id="ms-form-user" class="form-control cmnt" name="comment" placeholder="Write a Review">
                                    {{-- <a href="javascript:void(0)" class="btn btn-raised btn-primary pull-right">Submit</a> --}}
                                    <button type="submit" id="reviewbtn" style="border: 1px solid #03a9f4;" class="btn btn-primary pull-right">Submit</button>

                                    {!!Form::close()!!}
                                 </div>
                                 <div class="col-md-12" id ="reviewcomment">
                                  @foreach ($reviews as $review)
                                   <div class="mb-1  container-fluid reviewer">
                                    <div class="row">
                                       <div class="col-md-2 col-12">
                                          <div>
                                             <i class="zmdi zmdi-time mr-1"></i><?php $date = $review->posted_at; echo date('h:i:s a Y-m-d', strtotime($date));?>
                                          </div>
                                          <div>{{$review->name}}</div>
                                       </div>
                                       <div class="col-md-10 col-12 ">
                                          <div class="d-inline-flex ratingstar-pos1">
                                                 <fieldset class="rating1">
                                                      <input type="radio" id="star100{{$loop->index +1}}" name="rating11{{$loop->index +1}}" chk="{{$review->rating11}}" value="5"@if($review->rating11==5)checked="checked"@endif disabled="disabled"  />
                                                      <label class="full" for="star100" title="Awesome - 5 stars"></label>
                                                      <input type="radio" id="star100half{{$loop->index +1}}" name="rating11{{$loop->index +1}}" chk="{{$review->rating11}}" value="4.5" disabled="disabled"/>
                                                      <label class="half" for="star100half" title="Pretty good - 4.5 stars"></label>
                                                      <input type="radio" id="star101{{$loop->index +1}}" name="rating11{{$loop->index +1}}" chk="{{$review->rating11}}" value="4"@if($review->rating11==4)checked="checked"@endif />
                                                      <label class="full" for="star101" title="Pretty good - 4 stars"></label>
                                                      <input type="radio" id="star101half{{$loop->index +1}}" name="rating11{{$loop->index +1}}" chk="{{$review->rating11}}" value="3.5"@if($review->rating11==3.5)checked="checked"@endif disabled="disabled"/>
                                                      <label class="half" for="star101half" title="Meh - 3.5 stars"></label>
                                                      <input type="radio" id="star102{{$loop->index +1}}" name="rating11{{$loop->index +1}}" chk="{{$review->rating11}}" value="3"@if($review->rating11==3)checked="checked"@endif />
                                                      <label class="full" for="star102" title="Meh - 3 stars"></label>
                                                      <input type="radio" id="star102half{{$loop->index +1}}" name="rating11{{$loop->index +1}}" chk="{{$review->rating11}}" value="2.5"@if($review->rating11==2.5)checked="checked"@endif />
                                                      <label class="half" for="star102half" title="Kinda bad - 2.5 stars"></label>
                                                      <input type="radio" id="star103{{$loop->index +1}}" name="rating11{{$loop->index +1}}" chk="{{$review->rating11}}" value="2"@if($review->rating11==2)checked="checked"@endif />
                                                      <label class="full" for="star103" title="Kinda bad - 2 stars"></label>
                                                      <input type="radio" id="star103half{{$loop->index +1}}" name="rating11{{$loop->index +1}}" chk="{{$review->rating11}}" value="1.5"@if($review->rating11==1.5)checked="checked"@endif disabled="disabled"/>
                                                      <label class="half" for="star103half{{$loop->index +1}}" title="Meh - 1.5 stars"></label>
                                                      <input type="radio" id="star104{{$loop->index +1}}" name="rating11{{$loop->index +1}}" value="1"@if($review->rating11==1)checked="checked"@endif chk="{{$review->rating11}}" disabled="disabled"/>
                                                      <label class="full" for="star104" title="Sucks big time - 1 star"></label>
                                                      <input type="radio" id="star104half{{$loop->index +1}}" name="rating11{{$loop->index +1}}" chk="{{$review->rating11}}" value="0.5"@if($review->rating11==1)checked="checked"@endif disabled="disabled"/>
                                                      <label class="half" for="star104half" title="Sucks big time - 0.5 stars"></label>
                                                   </fieldset>
                                             
                                             <span class="badge badge-primary2">5.0</span>
                                            
                                          </div>
                                          <p>{!!$review->comment!!}
                                          </p>
                                          <button  onclick="actOnChirp(event);" data-chirp-id="{{$review->id }}">Like</button>
                                          <span  id="likes-count-{{ $review->id }}">{{$review->likes_count }}</span>
                  
                                       </div>
                                    </div>
                                 </div>
                               @endforeach
                             </div>
                            </div>
                           
                        </div>
                           <!--Review End-->
                        </div>
                        <!-- User Review Tab End -->
                     </div>
                  </div>
               </div>
               <!-- Broker Tabs End-->
               <script src="{{ asset('js/app.js') }}"></script>
     <script>
        var updateChirpStats = {
           Like: function (chirpId) {
               document.querySelector('#likes-count-' + chirpId).textContent++;
           },
 
           Unlike: function(chirpId) {
               document.querySelector('#likes-count-' + chirpId).textContent--;
           }
       };
 
 
       var toggleButtonText = {
           Like: function(button) {
               button.textContent = "Unlike";
           },
 
           Unlike: function(button) {
               button.textContent = "Like";
           }
       };
 
       var actOnChirp = function (event) {
           var chirpId = event.target.dataset.chirpId;
           var action = event.target.textContent;
           toggleButtonText[action](event.target);
           updateChirpStats[action](chirpId);
           axios.post('/like/' + chirpId + '/act',
               { action: action });
       };
       Echo.channel('chirp-events')
          .listen('ReviewAction', function (event) {
                console.log(event);
                var action = event.action;
                updateChirpStats[action](event.chirpId);
          });
    </script>
            </div>
         </div>
         <script>
               $('#formreview').on('submit',function(e){
                  e.preventDefault();
                  var email = $('#formreview').find('.u_mail').val();
                  var name = $('#formreview').find('.u_name').val();
                 var comt = $('#formreview').find('.cmnt').val();
                 //var rat = $('#formreview').find('.rate').val();
                 var checkbox =  $('input[name=rating11]:checked').val();
                 //alert(typeof checkbox);
                
               if (typeof checkbox ==='undefined'){
                  alert("please rate this");
               } else if(email == '' && name == ''){

                 alert('You Have to Login first');

               }else if(comt==''){
                 alert('Please write your comment');
               } 
               else{
                  
                      var data = $(this).serialize();
                       var url = $(this).attr('action');
                       $.post(url,data,function(data){
                        
                         $('#formreview').trigger('reset');
                         $('#formreview').load(location.href + ' #reviewcomment');

                       })
                   }
               });
             </script>
         <div id="playlists" style="display:none;">
            <li data-source="playlist1" data-playlist-name="BROKER VIDEOS" data-thumbnail-path="{{asset('assets/css/video-styles/thumbnails/large1.jpg')}}">
               <p class="minimalDarkCategoriesTitle"><span class="minimialDarkBold">Title: </span>Broker Videos</p>
               <p class="minimalDarkCategoriesType"><span class="minimialDarkBold">Type: </span>HTML</p>
               <p class="minimalDarkCategoriesDescription"><span class="minimialDarkBold">Description: </span>Created using html elements, videos are loaded and played from the server.</p>
            </li>
         </div>
                   
         <ul id="playlist1" style="display:none;">
            @if(!empty($broker_vid))
            @foreach ($jsonvid->program as $item)
                     <?php
                         $vid_link = explode('/',$item->link);
                        //  print_r();
                        //  exit;
                     ?>
               <li data-thumb-source="https://img.youtube.com/vi/{{$vid_link[4]}}/0.jpg" data-video-source="https://www.youtube.com/embed/{{$vid_link[4]}}" data-poster-source="https://img.youtube.com/vi/gl1aHhXnN1k/0.jpg" data-start-at-time="00:00:10" data-stop-at-time="00:05:20">
                  <div data-video-short-description="">
                     <div>
                        <p class="minimalDarkThumbnailTitle">START / STOP AT TIME EXAMPLE</p>
                     <p class="minimalDarkThumbnailDesc">{!!$item->description!!}</p>
                     </div>
                  </div>
                  <div data-video-long-description="">
                     <div>
                        <p class="minimalDarkVideoTitleDesc">MP3 STICKY PLAYER</p>
                        <p class="minimalDarkVideoMainDesc">Each video can contain a detailed description, the description can be formatted with CSS as you like. The description window and description button can be disabled individually for each video or globally for all videos.</p>
                        <p class="minimalDarkLink">For more information about this please follow <a href="http://www.webdesign-flash.ro/p/msp/" target="_blank">this link</a></p>
                     </div>
                  </div>
               </li>
            @endforeach
            @endif
         </ul>
@section('ticker_bottom')
    @include('Front_End.layout.includes.ticker_bottom')
@endsection
         <div class="modal" id="myModalEditCom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg animated zoomIn animated-3x" role="document">
               <div class="modal-content modal1-bg">
                  <div class="modal-header modal-header-bg-signal">
                        <h3 class="modal-title" id="myModalLabel">Edit Your Comment</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                        <i class="zmdi zmdi-close"></i>
                        </span>
                        </button>
                     </div>
                  <div class="modal-body no-pb">
                                    <form action="" class="review-form form-group field-radius is-empty no-m no-p">
                                       <p class="form-group no-m no-p">
                                          <textarea rows="5" class="form-control form-custom" placeholder="Edit Your Comment" name="edit-comment" ></textarea>
                                       </p>
                                     </form>
                                 </div>
                              
                  
                  <div class="modal-footer">
                        <button type="button" class="btn btn-raised btn-primary-modal mr-1-half" data-dismiss="modal">Update</button>
                        <button type="button" class="btn btn-raised btn-primary-modal" data-dismiss="modal">Close</button>
                     </div>
               </div>
            </div>
         </div>
       
@endsection
