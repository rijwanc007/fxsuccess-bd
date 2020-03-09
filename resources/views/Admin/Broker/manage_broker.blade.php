@extends('Admin.master')
@section('content')
    <header class="content__title">
        <a href="{{url('/Trash')}}" class="custom-button">Goto Trash</a>
    </header>
    <h3 class="text-center" style="color:green">
            <?php $message = Session::get('message');
                if(isset($message)){
                    echo $message;
                    Session::put('message','');
                }
            ?>
        </h3>
    <div class="card">
        <div class="card-body">
           <div class="table-responsive">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th width="10%">S.N</th>
                            <th width="20%">Broker Name</th>
                            <th width="30%">Logo</th> 
                            <th width="20%">Status</th> 
                            <th width="20%">Option</th> 
                            
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($all_brokers as $broker)
                        <?php
                            $broker_data = json_decode($broker->broker_info);
                                
                        ?>
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$broker_data->broker_name}}</td>
                            <td><img src="{{url('/brokerimages/'.$broker->image)}}" width="150" height="60"></td>
                            <td>
                          <?php if($broker->status == 1) {?>
                            <a href="{{url('/brokerlist/'.$broker->id)}}">
                                <?php echo "<span style='background:#94111c ;padding: 3px 14px;border-radius: 3px;color:#dcdc1ce0;'>Pending</span>";}?></a>
                                <?php if($broker->status == 2) {?>
                                    <a href="{{url('/brokerlistdeact/'.$broker->id)}}">
                                        <?php echo "<span style='background:green ;padding: 3px 14px;border-radius: 3px;color:#dcdc1ce0;'>Published</span>";}?>
                                    </a>
                                </td>
                            <td><a  href="{{url('/showbroker/'.$broker->id)}}" class="btn btn-raised btn-warning reviewedit" id="{{$broker->id}}">Show Data</a>
                                <form id="delete-form-{{ $broker->id }}" method="post" action="{{ url('softdeletebroker',$broker->id) }}" style="display: none">
                                        {{ csrf_field() }}
                                       
                                    </form>
                                <a href="" onclick="
                                    if(confirm('Are you sure, You Want to send it into trash?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$broker->id}}').submit();
                                    }
                                    else{
                                    event.preventDefault();
                                    }" class="btn  btn-danger "><i class="fa fa-trash"></i>
                                </a>
                            </td> 
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
                        <button type="submit" class="btn btn-raised btn-primary-modal sm-broker-btn">Save</button>
                        <button type="button" class="btn btn-raised btn-primary-modal sm-broker-btn" data-dismiss="modal">Close</button>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
 <script>
       //$(document).on('click','.reviewedit',function(){
                //var reviewid = $(this).attr('id');
                // $.get('/catbyid/'+ catid, function(data){
                //     $('#category_update').find('#title').val(data.title);
                //     $('#category_update').find('#id').val(data.id);
                //     $('#category_update').find('#status').val(data.status);
                // });
                //alert(reviewid);
            //});
 </script>
  @endsection