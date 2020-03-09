@extends('Admin.master')
@section('content')
<header class="content__title">
        <a href="{{url('/addreview/'.$broker_info->id)}}" class="custom-button">Add Review</a>
        <a href="{{url('/addprocon/'.$broker_info->id)}}" class="custom-button">Add Pros&Cons</a>
        <a href="{{url('/addvideo/'.$broker_info->id)}}" class="custom-button">Add Video</a>
        <select name='position' class="setposition" id="{{$broker_info->id}}" >
                <option style="color:black">Select Position</option>
        <option style="color:black"  value="first" @if($broker_info->position =='first') selected ='selected' @endif>First</option>
                <option style="color:black"  value="second"@if($broker_info->position =='second') selected ='selected' @endif>Second</option>
                <option style="color:black"  value="third"@if($broker_info->position =='third') selected ='selected' @endif>Third</option>
        </select>
        <style>
            .setposition{
                padding: 5px 5px 7px 5px;
                background: #66000b;
                border: 1px solid #66000b;
                color: #ddd;
                font-weight: bolder;
                border-radius: 3px;
            }
        </style>
    </header>
    <script>
           $(document).ready(function (e) {
            $('.setposition').on('change', function(e) {
            var id = $(this).attr("id");
            var position = e.target.value;
           
            // alert(id);
            $.get('/updaterank/'+id +'/'+position,function (data) {
                   console.log(data);
                })
            });
        });
    
    </script>
    <div class="card">
            <div class="panel-body">
                    <div class="tab-content">
                        <!-- Step-1 -->
                        <div role="tabpanel" class="tab-pane active show fade" >
                            <div class="container review-form-container">
                                <h2>COMPANY INFORMATION</h2>
                                {!!Form::open(['url' => '/updatebroker/'.$broker_info->id,'method' => 'patch','enctype'=>'multipart/form-data','class'=>'review-form form-group field-radius is-empty'])!!}
                                
                                 <label for="broker-logo">Broker Logo</label>
                                  <img src="{{url('/brokerimages/'.$broker_info->image)}}" width="100" height="50"/>
                                    <p class="form-group no-m custom-up-field">
                                        <input type="text" class="form-control broker-logo-name" readonly required="required">
                                        <span class="browse-btn" data-target="#broker-logo-up">Browse</span>
                                        <input type="file" name="broker-logo" id="broker-logo-up" class="upfile-hidden">
                                    </p>
                                
                                    {{-- <div class="form-group">
                                        <input type="file" class="form-control" name="image">
                                    </div> --}}
                                    <label for="broker-name">Broker Name</label>
                                    
                                    <p class="form-group no-m">
                                    <input required="required" type="text" class="form-control form-custom" value="{{$jsdecod->broker_name}}" name="broker_name" >
                                    </p>

                                    <label for="broker-name">Country</label>
                                    
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom" value="{{$jsdecod->country}}" name="country" >
                                    </p>
                                    <p class="form-group no-m">
                                            <input  type="hidden" class="form-control form-custom"name="status" value="{{$broker_info->status}}">
                                    </p>

                                    <label for="website">WEBSITE</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom" value="{{$jsdecod->website}}" name="website" >
                                    </p>

                                    <label for="headquartered">HEADQUARTERED IN </label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom" value="{{$jsdecod->headquartered}}" name="headquartered" >
                                    </p>

                                    <label for="founder-in">FOUNDED IN</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom" value="{{$jsdecod->founder_in}}" name="founder_in" >
                                    </p>

                                    <label for="regulating-authority">REGULATING AUTHORITY</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom"  value="{{$jsdecod->regulating_authority}}" name="regulating_authority" >
                                    </p>

                                    <label for="clients-us">US CLINETS ACCEPTED</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="us_client" value="yes"@if($jsdecod->us_client=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="us_client" value="no"@if($jsdecod->us_client=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="broker-status">BROKER STATUS</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->broker_status}}" name="broker_status" >
                                    </p>

                                    <label for="broker-type">BROKER TYPE</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->broker_type}}" name="broker_type" >
                                    </p>

                                    <label for="telephone">TELEPHONE NUMBER</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->telephone}}" name="telephone" >
                                    </p>

                                    <label for="fax">FAX NUMBER</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->fax}}" name="fax" >
                                    </p>

                                    <label for="email-support">EMAIL SUPPORT</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="email" class="form-control form-custom no-m" value="{{$jsdecod->email_support}}" name="email_support" >
                                    </p>

                                    <label for="international-office">INTERNATIONAL OFFICE</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m"  value="{{$jsdecod->international_office}}" name="international_office" >
                                    </p>

                                    <label for="web-language">WEB SITE LANGUAGE</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->web_language}}" name="web_language" >
                                    </p>
                               
                                <h2>ACCOUNT INFORMATION</h2>
                               
                                    <label for="demo-account">FREE DEMO ACCOUNT</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="demo_account" value="yes"@if($jsdecod->demo_account=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="demo_account" value="no"@if($jsdecod->demo_account=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="min-deposit">MIN. DEPOSIT</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->min_deposit}}" name="min_deposit" >
                                    </p>

                                    <label for="ecn-deposit">ECN DEPOSIT</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="ecn_deposit" value="yes"@if($jsdecod->ecn_deposit=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="ecn_deposit" value="no"@if($jsdecod->ecn_deposit=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="acc-currency">ACCOUNT CURRENCY</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->acc_currency}}" name="acc_currency" >
                                    </p>

                                    <label for="max-leverage">MAXIMUM LEVERAGE</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->max_leverage}}" name="max_leverage" >
                                    </p>

                                    <label for="min-order-vol">MINIMUL ORDER VOL.</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->min_order_vol}}" name="min_order_vol" >
                                    </p>
                              
                                <h2>TRADING TERMS</h2>
                               
                                     <label for="interest-margin">INTEREST ON MARGIN</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="interest_margin" value="yes"@if($jsdecod->interest_margin=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="interest_margin" value="no"@if($jsdecod->interest_margin=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="os-compatibility">OS COMPATIBILITY</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->os_compatibility}}" name="os_compatibility" >
                                    </p>

                                    <label for="news-feed-stream">STREAMING NEWS FEED</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="news_feed_stream" value="yes" @if($jsdecod->news_feed_stream=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="news_feed_stream" value="no"@if($jsdecod->news_feed_stream=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="charting-pack">CHARTING PACKAGE</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="charting_pack" value="yes"@if($jsdecod->charting_pack=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="charting_pack" value="no"@if($jsdecod->charting_pack=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="trading-signal">TRADING SIGNAL</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="trading_signal" value="yes"@if($jsdecod->trading_signal=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="trading_signal" value="no"@if($jsdecod->trading_signal=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                 <label for="market-commentary">MARKET COMMENTARY</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="market_commentary" value="yes"@if($jsdecod->market_commentary=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="market_commentary" value="no"@if($jsdecod->market_commentary=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>
                             
                                <h2>CUSTOMER SUPPORT</h2>
                                  <label for="customer-service-time">CUSTOMER SERVICE HOURS</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->customer_service_time}}" name="customer_service_time" >
                                    </p>

                                    <label for="trade-over-phone">PLACE TRADES OVER THE PHONE</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="trade_over_phone" value="yes"@if($jsdecod->trade_over_phone=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="trade_over_phone" value="no"@if($jsdecod->trade_over_phone=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>
                                   
                          
                                <h2>PROMOTION</h2>
                               
                                    <label for="deposit-bonus">DEPOSIT BONUS</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->deposit_bonus}}" name="deposit_bonus" >
                                    </p>

                                    <label for="first-deposite-bonus">BONUS FOR FIRST DEPOSIT</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->first_deposite_bonus}}" name="first_deposite_bonus" >
                                    </p>

                                    <label for="free-vps">FREE VPS</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="free_vps" value="yes"@if($jsdecod->free_vps=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="free_vps" value="no"@if($jsdecod->free_vps=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>
                                <h2>ACCOUNT INFORMATION</h2>
                                  <label for="segregeted-acc">SEGREGATED ACCOUNT</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="segregeted_acc" value="yes"@if($jsdecod->segregeted_acc=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="segregeted_acc" value="no"@if($jsdecod->segregeted_acc=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="islamic-acc">ISLAMIC ACCOUNT</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="islamic_acc" value="yes"@if($jsdecod->islamic_acc=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="islamic_acc" value="no"@if($jsdecod->islamic_acc=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="institutional-acc">INSTITUTIONAL ACCOUNT</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="institutional_acc" value="yes"@if($jsdecod->institutional_acc=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="institutional_acc" value="no"@if($jsdecod->institutional_acc=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="vip-service">VIP SERVICE</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="vip_service" value="yes"@if($jsdecod->vip_service=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="vip_service" value="no"@if($jsdecod->vip_service=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="pamm-mam">PAMM / MAM ACCOUNT</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom" value="{{$jsdecod->pamm_mam}}" name="pamm_mam" >
                                    </p>

                                    <label for="deposite-option">DEPOIST OPTION</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom" value="{{$jsdecod->deposite_option}}" name="deposite_option" >
                                    </p>

                                    <label for="withdrawal-opt">WITHDRAWAL OPTION</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom" value="{{$jsdecod->withdrawal_opt}}" name="withdrawal_opt" >
                                    </p>
                               
                                <h2>TRADING TERMS</h2>
                               
                                    <label for="trading-platform">TRADING PLATFORM</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->trading_platform}}" name="trading_platform" >
                                    </p>

                                    <label for="precision-pricing">PRECISION PRICING</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->precision_pricing}}" name="precision_pricing" >
                                    </p>

                                    <label for="spread-type">TYPE OF SPREAD</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->spread_type}}" name="spread_type" >
                                    </p>

                                    <label for="commission">COMMISSION</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="commission" value="yes"@if($jsdecod->commission=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="commission" value="no"@if($jsdecod->commission=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="scalping">SCALPING</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="scalping" value="yes"@if($jsdecod->scalping=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="scalping" value="no"@if($jsdecod->scalping=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="hedging">HEDGING</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="hedging" value="yes"@if($jsdecod->hedging=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="hedging" value="no"@if($jsdecod->hedging=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="expert-advisors">EXPERT ADVISORS</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="expert_advisors" value="yes"@if($jsdecod->expert_advisors=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="expert_advisors" value="no"@if($jsdecod->expert_advisors=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="lowest-spread">LOWEST SPREAD</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->lowest_spread}}" name="lowest_spread" >
                                    </p>

                                    <label for="trading-instrument">TRADING INSTRUMENTS</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->trading_instrument}}" name="trading_instrument" >
                                    </p>

                                    <label for="one-click-execution">ONE CLICK EXECUTION</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="one_click_execution" value="yes"@if($jsdecod->one_click_execution=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="one_click_execution" value="no"@if($jsdecod->one_click_execution=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="oco-orders">OCO ORDERS</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="oco_orders" value="yes"@if($jsdecod->oco_orders=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="oco_orders" value="no"@if($jsdecod->oco_orders=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="managed-acc">MANAGED ACCOUNT</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="managed_acc" value="yes"@if($jsdecod->managed_acc=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="managed_acc" value="no"@if($jsdecod->managed_acc=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="email-alerts">EMAIL ALERTS</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="email_alerts" value="yes"@if($jsdecod->email_alerts=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="email_alerts" value="no"@if($jsdecod->email_alerts=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="mobile-alerts">Mobile ALERTS</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="mobile_alerts" value="yes"@if($jsdecod->mobile_alerts=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="mobile_alerts" value="no"@if($jsdecod->mobile_alerts=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="trailing-stops">TRAILING STOPS</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="trailing_stops" value="yes"@if($jsdecod->trailing_stops=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="trailing_stops" value="no"@if($jsdecod->trailing_stops=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="mobile-trading">MOBILE TRADING</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="mobile_trading" value="yes"@if($jsdecod->mobile_trading=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="mobile_trading" value="no"@if($jsdecod->mobile_trading=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="web-based-trading">WEB BASED TRADING</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="web_based_trading" value="yes"@if($jsdecod->web_based_trading=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="web_based_trading" value="no"@if($jsdecod->web_based_trading=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>
                             
                                <h2>CUSTOMER SUPPORT</h2>
                               
                                   <label for="customer-support-lang">CUSTOMER SUPPORT LANG</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->customer_support_lang}}" name="customer_support_lang" >
                                    </p>

                                    <label for="email-hone-support">EMAIL+PHONE SUPPORT</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="email_hone_support" value="yes"@if($jsdecod->email_hone_support=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="email_hone_support" value="no"@if($jsdecod->email_hone_support=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="personal-acc-manager">PERSONAL ACCOUNT MANAGER</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="personal_acc_manager" value="yes"@if($jsdecod->personal_acc_manager=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="personal_acc_manager" value="no"@if($jsdecod->personal_acc_manager=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="customer-service-time">CUSTOMER SERVICE HOURS</label>
                                    <p class="form-group no-m">
                                        <input required="required" type="text" class="form-control form-custom no-m" value="{{$jsdecod->customer_service_time}}" name="customer_service_time" >
                                    </p>
                              
                                <h2>PROMOTION</h2>
                              <label for="trading-tools">TRADING TOOLS</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="trading_tools" value="yes"@if($jsdecod->trading_tools=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="trading_tools" value="no"@if($jsdecod->trading_tools=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="other-promotion">OTHER PROMOTION</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="other_promotion" value="yes"@if($jsdecod->other_promotion=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="other_promotion" value="no"@if($jsdecod->other_promotion=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>

                                    <label for="trade-close-over-phone">CLOSE TRADE OVER THE PHONE</label>
                                    <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="trade_close_over_phone" value="yes"@if($jsdecod->trade_close_over_phone=="yes")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">Yes</span>
                                        </label>
                                        <label class="mr-1 radiofix">
                                            <input required="required" type="radio"  name="trade_close_over_phone" value="no"@if($jsdecod->trade_close_over_phone=="no")checked="checked"@endif>
                                            <span class="redio-check"></span>
                                            <span class="ac-name">No</span>
                                        </label>
                                    </p>
                              </div>
                      </div>
                <button type="submit" class="btn btn-danger btn-lg btn-block blockbtn">Update Info</button>
            {!!Form::close()!!}

   
@endsection
