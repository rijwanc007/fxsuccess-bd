<div id="layer" class="collapsed-broker-menu">
    <div class="container">
        <div class="row" id="main-row">
            <div class="col-md-12" id="side-bar-broker">
                <div class="row mb-65">
                    <div class="col-md-6">
                        <h4>
                            Broker List
                        </h4>
                        <?php
                            use App\Brokerreview;
                            $all_broker_name = Brokerreview::where('status','=',2)->orderBy('id', 'DESC')->get();
                        ?>
                        <ul>
                            @foreach ($all_broker_name as $broker_inforamtion)
                            <?php
                                $broker_name = json_decode($broker_inforamtion->broker_info);
                            ?>
                           
                            <li>
                            <a href="{{url('show-broker',$broker_inforamtion->id)}}">{{$broker_name->broker_name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>
                            More In Reviews
                        </h4>
                        <ul>
                            <li>
                                <a href="broker-review.html">Forex Broker By Type</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Forex Signal Reviews</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Forex Products Reviews</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Forex Courses Reviews</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Forex Brokers Bonuses</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Binary Options Brokers</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Full Brokers List</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <span id="toggle-broker-menu" class="broker-side-btn">
                     <span class="broker-section toggling-brok"><span class="broker-shine"></span>Broker section</span>
                     <span class="glyphicon glyphicon-menu-left toggling-brok"></span>
                     </span>
            </div>
        </div>
    </div>
</div>
<div id="hover-box">
    <div class="robot view">
        <img src="assets/img/robot.png" alt="">
    </div>
    <div class="robot-inner-content vanish">
        <div class="inner-bot float">
            <img src="assets/img/robot.png" alt="">
        </div>
        <p>Hello My Name is</p>
        <p class="tutor-bot color-primary">FxsuccessbdBot</p>
        <p>Want to submit your broker review ?</p>
        <a class="btn btn-raised btn-warning" data-toggle="modal" data-target="#myModalrobo">Check Here</a>
    </div>
</div>
<!-- Bot Modal -->
<div class="modal" id="myModalrobo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg animated zoomIn animated-3x" role="document">
        <div class="modal-content broker-robo-modal modal1-bg">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Broker Review Form</h3>
                </span>
                </button>
            </div>
            <div class="modal-body no-pb">
                <div class="forex-broker-info">
                    <ul class="custum-nav-indicator slave-sm-none nav nav-tabs nav-tabs-transparent indicator-primary market-panal-bg" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link withoutripple active" href="#stepone" aria-controls="cat" role="tab" data-toggle="tab" id="step-1">
                                <i class="fa fa-exclamation-circle no-mr"></i> <span class="d-none d-sm-inline text-uppercase">Step 1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link withoutripple" href="#steptwo"  aria-controls="cat1" role="tab" data-toggle="tab" id="step-2">
                                <i class="fa fa-certificate no-mr"></i> <span class="d-none d-sm-inline text-uppercase">Step 2 </span>
                            </a>
                        </li>
                    </ul>
                    <div class="panel-body">
                        <div class="tab-content">
                            <!-- Step-1 -->
                            <div role="tabpanel" class="tab-pane active show fade" id="stepone">
                                <div class="container review-form-container">
                                    <h2>COMPANY INFORMATION</h2>
                                    {!!Form::open(['url' => 'store-broker','method' => 'post','enctype'=>'multipart/form-data','class'=>'review-form form-group field-radius is-empty'])!!}
                                        <label for="broker-logo">Broker Logo</label>
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
                                            <input required="required" type="text" class="form-control form-custom" placeholder="Broker Name" name="broker_name" >
                                        </p>

                                        <label for="broker-name">Country</label>
                                        
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom" placeholder="Broker Name" name="country" >
                                        </p>
                                        <p class="form-group no-m">
                                                <input  type="hidden" class="form-control form-custom" placeholder="Broker Name" name="status" value="1">
                                            </p>

                                        <label for="website">WEBSITE</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom" placeholder="Website" name="website" >
                                        </p>

                                        <label for="headquartered">HEADQUARTERED IN </label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom" placeholder="headquartered in" name="headquartered" >
                                        </p>

                                        <label for="founder-in">FOUNDED IN</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom" placeholder="Founder In" name="founder_in" >
                                        </p>

                                        <label for="regulating-authority">REGULATING AUTHORITY</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom" placeholder="regulating authority" name="regulating_authority" >
                                        </p>

                                        <label for="clients-us">US CLINETS ACCEPTED</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="us_client" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="us_client" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="broker-status">BROKER STATUS</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Broker Status" name="broker_status" >
                                        </p>

                                        <label for="broker-type">BROKER TYPE</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Broker Type" name="broker_type" >
                                        </p>

                                        <label for="telephone">TELEPHONE NUMBER</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Telephone Number" name="telephone" >
                                        </p>

                                        <label for="fax">FAX NUMBER</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Fax Number" name="fax" >
                                        </p>

                                        <label for="email-support">EMAIL SUPPORT</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="email" class="form-control form-custom no-m" placeholder="Email Support" name="email_support" >
                                        </p>

                                        <label for="international-office">INTERNATIONAL OFFICE</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="International Office" name="international_office" >
                                        </p>

                                        <label for="web-language">WEB SITE LANGUAGE</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Wec Site Language" name="web_language" >
                                        </p>
                                   
                                    <h2>ACCOUNT INFORMATION</h2>
                                   
                                        <label for="demo-account">FREE DEMO ACCOUNT</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="demo_account" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="demo_account" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="min-deposit">MIN. DEPOSIT</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Min. Deposit" name="min_deposit" >
                                        </p>

                                        <label for="ecn-deposit">ECN DEPOSIT</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="ecn_deposit" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="ecn_deposit" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="acc-currency">ACCOUNT CURRENCY</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Account Currency" name="acc_currency" >
                                        </p>

                                        <label for="max-leverage">MAXIMUM LEVERAGE</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Maximum Leverage" name="max_leverage" >
                                        </p>

                                        <label for="min-order-vol">MINIMUL ORDER VOL.</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Minimul Order Vol." name="min_order_vol" >
                                        </p>
                                  
                                    <h2>TRADING TERMS</h2>
                                   
                                         <label for="interest-margin">INTEREST ON MARGIN</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="interest_margin" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="interest_margin" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="os-compatibility">OS COMPATIBILITY</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="OS Compatibility" name="os_compatibility" >
                                        </p>

                                        <label for="news-feed-stream">STREAMING NEWS FEED</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="news_feed_stream" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="news_feed_stream" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="charting-pack">CHARTING PACKAGE</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="charting_pack" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="charting_pack" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="trading-signal">TRADING SIGNAL</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="trading_signal" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="trading_signal" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                     <label for="market-commentary">MARKET COMMENTARY</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="market_commentary" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="market_commentary" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>
                                 
                                    <h2>CUSTOMER SUPPORT</h2>
                                      <label for="customer-service-time">CUSTOMER SERVICE HOURS</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Customer Service Hours" name="customer_service_time" >
                                        </p>

                                        <label for="trade-over-phone">PLACE TRADES OVER THE PHONE</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="trade_over_phone" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="trade_over_phone" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>
                              
                                    <h2>PROMOTION</h2>
                                   
                                        <label for="deposit-bonus">DEPOSIT BONUS</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Deposit Bonus" name="deposit_bonus" >
                                        </p>

                                        <label for="first-deposite-bonus">BONUS FOR FIRST DEPOSIT</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Bonus For First Deposite" name="first_deposite_bonus" >
                                        </p>

                                        <label for="free-vps">FREE VPS</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="free_vps" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="free_vps" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>
                                  
                                </div>
                            </div>
                            <!-- Step-2 -->
                            <div role="tabpanel" class="tab-pane fade" id="steptwo">
                                <div class="container review-form-container">
                                    <h2>ACCOUNT INFORMATION</h2>
                                  

                                        <label for="segregeted-acc">SEGREGATED ACCOUNT</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="segregeted_acc" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="segregeted_acc" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="islamic-acc">ISLAMIC ACCOUNT</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="islamic_acc" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="islamic_acc" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="institutional-acc">INSTITUTIONAL ACCOUNT</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="institutional_acc" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="institutional_acc" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="vip-service">VIP SERVICE</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="vip_service" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="vip_service" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="pamm-mam">PAMM / MAM ACCOUNT</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom" placeholder="Pamm/Mam" name="pamm_mam" >
                                        </p>

                                        <label for="deposite-option">DEPOIST OPTION</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom" placeholder="Deposite Option" name="deposite_option" >
                                        </p>

                                        <label for="withdrawal-opt">WITHDRAWAL OPTION</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom" placeholder="Withdrawal Option" name="withdrawal_opt" >
                                        </p>
                                   
                                    <h2>TRADING TERMS</h2>
                                   
                                        <label for="trading-platform">TRADING PLATFORM</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Trading Platform" name="trading_platform" >
                                        </p>

                                        <label for="precision-pricing">PRECISION PRICING</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Precision Pricing" name="precision_pricing" >
                                        </p>

                                        <label for="spread-type">TYPE OF SPREAD</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Type of Spread" name="spread_type" >
                                        </p>

                                        <label for="commission">COMMISSION</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="commission" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="commission" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="scalping">SCALPING</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="scalping" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="scalping" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="hedging">HEDGING</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="hedging" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="hedging" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="expert-advisors">EXPERT ADVISORS</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="expert_advisors" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="expert_advisors" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="lowest-spread">LOWEST SPREAD</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Lowest Spread" name="lowest_spread" >
                                        </p>

                                        <label for="trading-instrument">TRADING INSTRUMENTS</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Trading Instrument" name="trading_instrument" >
                                        </p>

                                        <label for="one-click-execution">ONE CLICK EXECUTION</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="one_click_execution" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="one_click_execution" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="oco-orders">OCO ORDERS</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="oco_orders" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="oco_orders" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="managed-acc">MANAGED ACCOUNT</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="managed_acc" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="managed_acc" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="email-alerts">EMAIL ALERTS</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="email_alerts" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="email_alerts" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="mobile-alerts">Mobile ALERTS</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="mobile_alerts" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="mobile_alerts" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="trailing-stops">TRAILING STOPS</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="trailing_stops" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="trailing_stops" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="mobile-trading">MOBILE TRADING</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="mobile_trading" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="mobile_trading" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="web-based-trading">WEB BASED TRADING</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="web_based_trading" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="web_based_trading" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>
                                 
                                    <h2>CUSTOMER SUPPORT</h2>
                                   
                                       <label for="customer-support-lang">CUSTOMER SUPPORT LANG</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Customer Support Lang" name="customer_support_lang" >
                                        </p>

                                        <label for="email-hone-support">EMAIL+PHONE SUPPORT</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="email_hone_support" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="email_hone_support" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="personal-acc-manager">PERSONAL ACCOUNT MANAGER</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="personal_acc_manager" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="personal_acc_manager" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="customer-service-time">CUSTOMER SERVICE HOURS</label>
                                        <p class="form-group no-m">
                                            <input required="required" type="text" class="form-control form-custom no-m" placeholder="Customer Service Hours" name="customer_service_time" >
                                        </p>
                                  
                                    <h2>PROMOTION</h2>
                                  <label for="trading-tools">TRADING TOOLS</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="trading_tools" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="trading_tools" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="other-promotion">OTHER PROMOTION</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="other_promotion" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="other_promotion" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>

                                        <label for="trade-close-over-phone">CLOSE TRADE OVER THE PHONE</label>
                                        <p class="checkbox radiofix sm-pt-1 text-left no-mb">
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="trade_close_over_phone" value="yes">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">Yes</span>
                                            </label>
                                            <label class="mr-1 radiofix">
                                                <input required="required" type="radio"  name="trade_close_over_phone" value="no">
                                                <span class="redio-check"></span>
                                                <span class="ac-name">No</span>
                                            </label>
                                        </p>
                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-raised btn-primary-modal sm-broker-btn" id="prev-step" data-target="1">Back</button>
                <button type="submit" class="btn btn-raised btn-primary-modal sm-broker-btn" id="next-step" data-target="2">Next</button>
                {{-- <button type="submit" class="btn btn-raised btn-primary-modal sm-broker-btn">Save</button> --}}
                <button type="button" class="btn btn-raised btn-primary-modal sm-broker-btn" data-dismiss="modal">Close</button>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>

<footer class="ms-footer">
    <div class="container-fluid mb-footer social-footer">
        <h3 class="social-net-header">Social Networks</h3>
        <div class="no-m">
            <a href="javascript:void(0)" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs no-mr btn-facebook">
                <i class="zmdi zmdi-facebook"></i>
            </a>
            <a href="javascript:void(0)" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs no-mr btn-twitter1">
                <i class="zmdi zmdi-twitter"></i>
            </a>
            <a href="javascript:void(0)" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs no-mr btn-google1">
                <i class="zmdi zmdi-google"></i>
            </a>
            <a href="javascript:void(0)" target="_blank" class="btn-circle btn-circle-raised btn-circle-xs no-mr btn-youtube1">
                <i class="zmdi zmdi-youtube-play"></i>
            </a>
        </div>
    </div>
    <hr class="foot-line">
    <div class="container-fluid">
        <p align="justify">
            <strong style="color:#70BF44" class="text-uppercase">Disclaimer : </strong>FXSUCCESSBD is the first and most popular forex trading platform in Bangla and visited by thousands of forex traders daily from 36 countries of the world. FXSUCCESSBD helps you to learn forex, stock, commodities and cryptocurrency trading in Bangla. FXSUCCESSBD doesn't inspire anyone to trade forex and doesn't show unrealistic dream of 100% profit or getting rich overnight, rather guides existing forex traders about how to maintain a good trading strategy to sustain in the market. Trading forex with leverage carries high risk and you should only invest what you afford to loose. Certain types of trading may not be allowed from Bangladesh.
        </p>
    </div>
</footer>
<!--start end footer list-->
<div class="ms-footer conurl">
    <p>Copyright &copy; FXSUCCESSBD 2018</p>
</div>
<!--end end footer list-->
<div class="btn-back-top">
    <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
        <i class="zmdi zmdi-long-arrow-up"></i>
    </a>
</div>

<!-- end footer -->
<!-- ms-site-container -->
<div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
    <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
            <div class="ms-slidebar-title">

                <div class="ms-title fxsuccess-logo">
                    <a href="{{url('/')}}">
                        <h1 class="animated fadeInRight animation-delay-6 logo-font text-center">
                            <span class="logo-border"></span>
                            <span class="logo-border"></span>
                            <span class="logo-border"></span>
                            <img src="assets/img/torus.png" alt="Torus" class="torus-img">
                            <span class="fx">FX</span>
                            <span class="position-relative fw-600 cap-pos text-white">SUCCESS
                    <i class="fa fa-graduation-cap"></i></span>
                            <span class="bd">
                    <span class="bd-link"></span>
                    <span class="bd-text">BD</span>
                    </span>
                        </h1>
                    </a>
                </div>

            </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
            <li>
                <a class="link" href="{{url('/')}}">
                    <i class="zmdi zmdi-home"></i>Home</a>
            </li>
            <li>
                <a class="link" href="{{url('/Front_analysis')}}">
                    <i class="zmdi zmdi-link"></i>Forex analysis</a>
            </li>
            <li>
                <a class="link" href="{{url('/article')}}">
                    <i class="zmdi zmdi-link"></i>Forex Article</a>
            </li>
            <li>
                <a class="link" href="{{url('/forex-signal')}}">
                    <i class="zmdi zmdi-link"></i>Forex Signal</a>
            </li>
            <li class="card" role="tab" id="sch6">
                <a class="collapsed" role="button" data-toggle="collapse" href="#sc6" aria-expanded="false" aria-controls="sc6">
                    <i class="fa fa-star"></i>Forex Broker</a>
                <ul id="sc6" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch6" data-parent="#slidebar-menu">
                    <li>
                        <a href="{{url('/broker-review')}}">Broker Review</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="link" href="javascript:void(0)">
                    <i class="zmdi zmdi-link"></i>Forex Forum</a>
            </li>
            <li>
                <a class="link" href="{{url('/faq')}}">
                    <i class="zmdi zmdi-link"></i>FAQ</a>
            </li>
            <li>
                <a class="link" href="{{url('/contact-us')}}">
                    <i class="zmdi zmdi-link"></i>Contact</a>
            </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block text-center">
            <div class="ms-slidebar-social">
                <span class="sidebar-social-header">SOCIAL NETWORKS : </span>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook0">
                    <i class="zmdi zmdi-facebook"></i>
                    <div class="ripple-container"></div>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                    <div class="ripple-container"></div>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google">
                    <i class="zmdi zmdi-google"></i>
                    <div class="ripple-container"></div>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-linkedin">
                    <i class="zmdi zmdi-linkedin"></i>
                    <div class="ripple-container"></div>
                </a>
            </div>
        </div>
    </div>
</div>
{{-- <script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')}}"></script> --}}
<!-- End Signal Ticker -->
<script src="{{asset('assets/js/plugins.min.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
<!-- Footable -->
<script src="{{asset('assets/js/footable.js')}}"></script>

<script src="{{asset('assets/js/custom.js')}}"></script>
<!-- Carosel Ticker -->
<script src="{{asset('assets/js/jquery.carouselTicker.js')}}"></script>
<script src="{{asset('assets/js/start.js')}}"></script>

<script>
    $(".carouselTicker").carouselTicker({
        // animation speed
        speed: 2,
        // animation delay
        delay: 30,
        // RTL or LTR
        reverse: true
    });
</script>
<!-- Carosel Ticker End -->
<script>
    // Broker Text truncated
    var length = 570;


    var hHtml = $(".h-broker").html();
    var hText = $(".h-broker").html().substr(0, length).trim();

    if(hHtml.length>length){
        $(".h-broker").html(hText  + '...<a href="javascript:void(0)" data-target="#description" id="toggle" class="exp reply see-more-button">Read More <i class=" fa fa-chevron-down"></i></a>' );
        $(".h-broker").addClass("compressed");
        window.handler = function()
        {
            $('.exp').click(function(){
                if ($(".h-broker").hasClass("compressed"))
                {

                    $(".h-broker").html(hHtml + "<a href='javascript:void(0)' data-target='#description' id='toggle' class='exp reply see-more-button no-ml mb-1-half'>Read Less <i class= 'fa fa-chevron-up'></i></a>");

                    $(".h-broker").removeClass("compressed");
                    handler();
                    return false;
                }
                else
                {

                    $(".h-broker").html(hText  + "...<a href='javascript:void(0)' data-target='#description' id='toggle' class='exp reply see-more-button'>Read More <i class=' fa fa-chevron-down'></i></a>" );

                    $(".h-broker").addClass("compressed");
                    handler();
                    return false;
                }
            });
        }
        handler();
    }

    // Foo Table

    jQuery(function($){
        $('.broker-table').footable({
            "sorting": {
                "enabled": true
            },
            "filtering": {
                "enabled": true
            }
        });
        // Sorting Enabled External Dropdown
        $('.call-sort li').on('click', function (e) {
            e.preventDefault();
            var sorting = FooTable.get('.broker-table').use(FooTable.Sorting),
                column = parseInt($(this).attr('data-sort-column')),
                direction = $(this).attr('data-sort-direction');
            sorting._sort(column, direction);
        });
    });

    // Searching Enabled Externally
    $('[name=keySearch]').on('keyup', function(){
        var filtering = FooTable.get('.table').use(FooTable.Filtering), // get the filtering component for the table
            filter = $(this).val(); // get the value to filter by


        if (filter === ''){ // if the value is "none" remove the filter
            filtering.removeFilter('keySearch');
        } else { // otherwise add/update the filter.
            filtering.addFilter('keySearch', filter);
        }
        filtering.filter();
    });




</script>
<!-- Robot Js -->
<script>
    $('#hover-box').on('mouseover',function(){
        $('.robot').addClass('vanish').removeClass('view');
        $('.robot-inner-content').removeClass('vanish').addClass('view');
    })
    $('.robot-inner-content').on('mouseout',function(){
        $('.robot').removeClass('vanish').addClass('view');
        $('.robot-inner-content').addClass('vanish').removeClass('view');
    })
</script>
<!-- Robot Js END -->
<script>
    $('#prev-step').hide();
    $('#step-2').removeAttr('data-toggle').css('cursor', 'not-allowed');

    $('#next-step').click(function(){
        if(!$('#stepone input').val()){
            alert('Please Fill The Empty Fields')
        }
        else{
            var stepnext = $(this).attr('data-target');
            $('#step-'+stepnext).attr('data-toggle','tab').css('cursor', 'pointer');
            $('#step-'+stepnext).click();
            $(this).html("Submit");
            $('#prev-step').show();
        }
    })
    $('#prev-step').click(function(){
        var steppre = $(this).attr('data-target');
        $('#step-'+steppre).click();
        $('#next-step').html("Next");
        $(this).hide();
    })
    $('#step-1').click(function(){
        $('#prev-step').hide();
        $('#next-step').html("Next");
    })

    $('#step-2').click(function(){
        if($(this).attr('data-toggle') == "tab"){
            $('#prev-step').show();
            $('#next-step').html("Submit");
        }
    })

</script>
<script>
    $('.browse-btn').click(function(){
        var target = $(this).attr('data-target');
        $(target).click();
    })

    $('.upfile-hidden').change(function(){
        var filePath = $(this).val();
        var fileName = filePath.replace(/.*[\/\\]/, '');
        var inputField = $(this).attr('id');
        $('.'+inputField+'_name').val(fileName);
    })
    
</script>
