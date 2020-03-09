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
              <div class=" card card-primary3  lbg3 conurl no-mt mb-1-half">
                <div class="card-header " role="tab" id="headingSix5">
                  <h4 class="card-title">
                    <a class="withripple" role="button" data-toggle="collapse" href="#collapseSix5" aria-expanded="true" aria-controls="collapseSix5">
                      <i class="fa fa-chain-broken"></i>ফরেক্স মার্কেট পরিচিতি</a>
                  </h4>
                </div>
                <div id="collapseSix5" class="card-collapse collapse show num-spacing" role="tabpanel" aria-labelledby="headingSix5" data-parent="#accordion5">
                  <ul>
                    <li>
                      <a class="withripple " href="{{url('course/basic-course.html')}}">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ফরেক্স কি ?</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="{{url('course/advance-course.html')}}">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ফরেক্স VS স্টক মার্কেট</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ফরেক্স মার্কেটের সুবিধা</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> কি ট্রেড করা হয়</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> মার্কেট সাইজ এবং লিকুইডিটি</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ফরেক্স মার্কেট স্ট্রাকচার</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> কারেন্সি ট্রেডের বিভিন্ন উপায়</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card card-primary3 lbg3 conurl no-mt mb-1-half">
                <div class="card-header" role="tab" id="headingthirty5">
                  <h4 class="card-title">
                    <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapsethirty5" aria-expanded="false" aria-controls="collapsethirty5">
                      <i class="fa fa-chain-broken"></i> ফরেক্স মার্কেট বেসিক</a>
                  </h4>
                </div>
                <div id="collapsethirty5" class="card-collapse collapse num-spacing" role="tabpanel" aria-labelledby="headingthirty5" data-parent="#accordion5">
                  <ul>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> পিপস এবং পিপেটিস </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> লট/ভলিউম </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> টাইমফ্রেম বিশ্লেষন </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> স্প্রেড, স্টপ লস এবং টেক প্রফিট </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> লিভারেজ, মার্জিন এবং ফ্রি মার্জিন </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> কারেন্সি পেয়ার কি </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ফরেক্সে লাভ/লস নির্ধারন </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card card-primary3 lbg3 conurl no-mt mb-1-half">
                <div class="card-header" role="tab" id="headingTwo5">
                  <h4 class="card-title">
                    <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                      <i class="fa fa-chain-broken"></i> ট্রেডিং যাত্রা শুরু করুন</a>
                  </h4>
                </div>
                <div id="collapseTwo5" class="card-collapse collapse num-spacing" role="tabpanel" aria-labelledby="headingTwo5" data-parent="#accordion5">
                  <ul>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ডেমো অ্যাকাউন্ট কি ? </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> আপনার প্রথম ট্রেড </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> অ্যাকাউন্ট ওপেনিং ইনফর্মেশন </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> অ্যাকাউন্ট ভেরিফিকেশন </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ডিপোজিট এবং উইথড্র </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card card-primary3 lbg3 conurl no-mt mb-1-half">
                <div class="card-header" role="tab" id="headingThree5">
                  <h4 class="card-title">
                    <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                      <i class="fa fa-chain-broken"></i> মেটাট্রেডার ৪ & ৫ ব্যাবহার</a>
                  </h4>
                </div>
                <div id="collapseThree5" class="card-collapse collapse num-spacing" role="tabpanel" aria-labelledby="headingThree5" data-parent="#accordion5">
                  <ul>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> মেটাট্রেডার ৪ পরিচিতি </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> মেটাট্রেডার ৫ পরিচিতি</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> এক্সপার্ট এডভাইজর (EA) কিভাবে ইন্সটল</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ইনডিকেটর ব্যাবহার করা</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card card-primary3 lbg3 conurl no-mt mb-1-half">
                <div class="card-header" role="tab" id="headingFour5">
                  <h4 class="card-title">
                    <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapseFour5" aria-expanded="false" aria-controls="collapseFour5">
                      <i class="fa fa-chain-broken"></i> ট্রেডিং সেশন</a>
                  </h4>
                </div>
                <div id="collapseFour5" class="card-collapse collapse num-spacing" role="tabpanel" aria-labelledby="headingFour5" data-parent="#accordion5">
                  <ul>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ট্রেডিং সেশন সামগ্রিক</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> টোকিও সেশন</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> লন্ডন সেশন</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> নিউ ইয়র্ক সেশন</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> সেশন ওভারল্যাপ</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ট্রেডের জন্য উপযুক্ত সময়</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card card-primary3 lbg3 conurl no-mt mb-1-half">
                <div class="card-header" role="tab" id="headingFive5">
                  <h4 class="card-title">
                    <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapseFive5" aria-expanded="false" aria-controls="collapseFive5">
                      <i class="fa fa-chain-broken"></i> মার্কেট অ্যানালাইসিস </a>
                  </h4>
                </div>
                <div id="collapseFive5" class="card-collapse collapse num-spacing" role="tabpanel" aria-labelledby="headingFive5" data-parent="#accordion5">
                  <ul>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> অ্যানালাইসিস কি ?</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ফান্ডামেন্টাল অ্যানালাইসিস</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> টেকনিক্যাল অ্যানালাইসিস</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> সেন্টিমেন্টাল অ্যানালাইসিস</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card card-primary3 lbg3 conurl no-mt mb-1-half">
                <div class="card-header" role="tab" id="headingFifteen5">
                  <h4 class="card-title">
                    <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapseFifteen5" aria-expanded="false" aria-controls="collapseFifteen5">
                      <i class="fa fa-chain-broken"></i> ফান্ডামেন্টাল অ্যানালাইসিস </a>
                  </h4>
                </div>
                <div id="collapseFifteen5" class="card-collapse collapse num-spacing" role="tabpanel" aria-labelledby="headingFifteen5" data-parent="#accordion5">
                  <ul>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> নিউজ ট্রেডিং</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> নিউজ বুঝার কিভাবে</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> নিউজ ইম্প্যাক্ট</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card card-primary3 lbg3 conurl no-mt mb-1-half">
                <div class="card-header" role="tab" id="headingthirtyone5">
                  <h4 class="card-title">
                    <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapsethirtyone5" aria-expanded="false" aria-controls="collapsethirtyone5">
                      <i class="fa fa-chain-broken"></i> টেকনিক্যাল অ্যানালাইসিস </a>
                  </h4>
                </div>
                <div id="collapsethirtyone5" class="card-collapse collapse num-spacing" role="tabpanel" aria-labelledby="headingthirtyone5"
                     data-parent="#accordion5">
                  <ul>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> সাপোর্ট এবং রেসিসটেন্স</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ট্রেন্ডলাইন, চ্যানেল</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> লাইন দিয়ে ট্রেডিং</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ক্যান্ডেলস্টিক বিশ্লেষন</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> পিভট পয়েন্ট বিশ্লেষন</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ফিবোনাচ্চি সামগ্রিক</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> মুভিং এভারেজ ব্যবহার</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="card card-primary3 lbg3 conurl no-mt mb-1-half">
                <div class="card-header" role="tab" id="headingtwenty5">
                  <h4 class="card-title">
                    <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapsetwenty5" aria-expanded="false" aria-controls="collapsetwenty5">
                      <i class="fa fa-chain-broken"></i> ট্রেডিং স্ট্রেটেজি ডেভলপমেন্ট </a>
                  </h4>
                </div>
                <div id="collapsetwenty5" class="card-collapse collapse num-spacing" role="tabpanel" aria-labelledby="headingtwenty5" data-parent="#accordion5">
                  <ul>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ট্রেডিং স্ট্রেটেজি উন্নয়ন </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ব্রেকআউট ও ফেকআউট ট্রেডিং </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> কারেন্সি ক্রস পর্যালচনা </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> মাল্টিপল টাইমফ্রেম অ্যানালিসিস </span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ডাইভারজেন্স অ্যানালাইসিস </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div class=" card card-primary3  lbg3 conurl no-mt mb-1-half">
                <div class="card-header " role="tab" id="headingSix625">
                  <h4 class="card-title">
                    <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapseSix625" aria-expanded="false" aria-controls="collapseSix625">
                      <i class="fa fa-chain-broken"></i>ট্রেডিং মোটিভেশন</a>
                  </h4>
                </div>
                <div id="collapseSix625" class="card-collapse collapse  num-spacing" role="tabpanel" aria-labelledby="headingSix625" data-parent="#accordion5">
                  <ul>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> মানি ম্যানেজমেন্ট</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> মাকের্ট সেন্টিমেন্ট</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ফরেক্সে লসের কারন</span>
                      </a>
                    </li>
                    <li>
                      <a class="withripple" href="javascript:void(0)">
                          <span class="list-word-spacing">
                          <i class="fa fa-check-square-o"></i> ট্রেডিংয়ে সফলতার ধাপ</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

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
                  <tr>
                    <td class="text-success width-50">
                      <div class="position-relative-align">
                        <i class="fa fa-star"></i>
                        <span>1</span>
                      </div>
                    </td>
                    <td>
                      <div class="table-broker-img glass">
                        <img src="{{asset('assets/img/broker/FXCC_FXBNP.png')}}" alt="FXCC_FXBNP">
                      </div>
                    </td>
                    <td><a href="javascript:void(0)">FXTM</a></td>
                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                  </tr>
                  <tr>
                    <td class="text-info width-50">
                      <div class="position-relative-align">
                        <i class="fa fa-star"></i>
                        <span>2</span>
                      </div>
                    </td>
                    <td>
                      <div class="table-broker-img glass">
                        <img src="{{asset('assets/img/broker/ironfx-logo.jpg')}}" alt="ironfx-logo">
                      </div>
                    </td>
                    <td><a href="javascript:void(0)">AvaTrade</a></td>
                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                  </tr>
                  <tr>
                    <td class="text-warning width-50">
                      <div class="position-relative-align">
                        <i class="fa fa-star"></i>
                        <span>3</span>
                      </div>
                    </td>
                    <td>
                      <div class="table-broker-img glass">
                        <img src="{{asset('assets/img/broker/Pepperstone.png')}}" alt="Pepperstone">
                      </div>
                    </td>
                    <td><a href="javascript:void(0)">FXCM</a></td>
                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                  </tr>
                  <tr>
                    <td class="text-gray width-50">
                      <div class="position-relative-align">
                        <i class="fa fa-star"></i>
                        <span>4</span>
                      </div>
                    </td>
                    <td>
                      <div class="table-broker-img glass">
                        <img src="{{asset('assets/img/broker/FXCC_FXBNP.png')}}" alt="FXCC_FXBNP">
                      </div>
                    </td>
                    <td><a href="javascript:void(0)">Markets</a></td>
                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                  </tr>
                  <tr>
                    <td class="text-gray width-50">
                      <div class="position-relative-align">
                        <i class="fa fa-star"></i>
                        <span>5</span>
                      </div>
                    </td>
                    <td>
                      <div class="table-broker-img glass">
                        <img src="{{asset('assets/img/broker/Pepperstone.png')}}" alt="Pepperstone">
                      </div>
                    </td>
                    <td><a href="javascript:void(0)">Plus500</a></td>
                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                  </tr>
                  <tr class="footer">
                    <td colspan="4"><a href="{{url('../broker-review.html')}}" target="_blank">Read More Broker Review</a></td>
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
                <img src="{{asset('assets/img/av.jpg')}}">
                <span class="image-inner-text">Forex article</span>
              </div>
              <div class="article-detail">
                <span class="bottom-title"><a href="javascript:void(0)">How to open your account in fxsuccessbd</a></span>
                <span class="article-text">BDIPP's goal is not to inspire on forex trading. We have recently noticed that some people or groups are tempted to have huge or guaranteed profits through forex trading. They are joining them for the commission, talking about 100% income or giving signals. But Forex trading can never be guaranteed</span> <a href="article/article-detail.html" target="_blank" class="text-light-blue">Read More</a>
              </div>
            </div>
            <div class="item">
              <div class="zoom-img owl-image-container">
                <img src="{{asset('assets/img/av.jpeg')}}">
                <span class="image-inner-text">Forex article</span>
              </div>
              <div class="article-detail">
                <span class="bottom-title"><a href="javascript:void(0)">How to open your account in fxsuccessbd</a></span>
                <span class="article-text">BDIPP's goal is not to inspire on forex trading. We have recently noticed that some people or groups are tempted to have huge or guaranteed profits through forex trading. They are joining them for the commission, talking about 100% income or giving signals. But Forex trading can never be guaranteed</span> <a href="article/article-detail.html" target="_blank" class="text-light-blue">Read More</a>
              </div>
            </div>
            <div class="item">
              <div class="zoom-img owl-image-container">
                <img src="{{asset('assets/img/city.jpg')}}">
                <span class="image-inner-text">Forex article</span>
              </div>
              <div class="article-detail">
                <span class="bottom-title"><a href="javascript:void(0)">How to open your account in fxsuccessbd</a></span>
                <span class="article-text">BDIPP's goal is not to inspire on forex trading. We have recently noticed that some people or groups are tempted to have huge or guaranteed profits through forex trading. They are joining them for the commission, talking about 100% income or giving signals. But Forex trading can never be guaranteed</span> <a href="article/article-detail.html" target="_blank" class="text-light-blue">Read More</a>
              </div>
            </div>
            <div class="item">
              <div class="zoom-img owl-image-container">
                <img src="{{asset('assets/img/exp.jpg')}}">
                <span class="image-inner-text">Forex article</span>
              </div>
              <div class="article-detail">
                <span class="bottom-title"><a href="javascript:void(0)">How to open your account in fxsuccessbd</a></span>
                <span class="article-text">BDIPP's goal is not to inspire on forex trading. We have recently noticed that some people or groups are tempted to have huge or guaranteed profits through forex trading. They are joining them for the commission, talking about 100% income or giving signals. But Forex trading can never be guaranteed</span> <a href="article/article-detail.html" target="_blank" class="text-light-blue">Read More</a>
              </div>
            </div>
            <div class="item">
              <div class="zoom-img owl-image-container">
                <img src="{{asset('assets/img/city.jpg')}}">
                <span class="image-inner-text">Forex article</span>
              </div>
              <div class="article-detail">
                <span class="bottom-title"><a href="javascript:void(0)">How to open your account in fxsuccessbd</a></span>
                <span class="article-text">BDIPP's goal is not to inspire on forex trading. We have recently noticed that some people or groups are tempted to have huge or guaranteed profits through forex trading. They are joining them for the commission, talking about 100% income or giving signals. But Forex trading can never be guaranteed</span> <a href="article/article-detail.html" target="_blank" class="text-light-blue">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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
                          <li>
                            <div class="analysis-icon">
                              <img src="{{asset('assets/img/city.jpg')}}" alt="..." class="pro-img">
                            </div>
                            <div class="analysis-discription">
                              <div class="right-info-container">
                                <h4 class="profile-name conurl"><a href="analysis/analysis-detail.html" target="_blank">Forex Research</a></h4>
                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                <p class="vc-num">
                                      <span class="bp-view">
                                      <i class="fa fa-comments mr10"></i>
                                      <span id="ip_view"> 2,461</span>
                                      </span>
                                  <span class="bp-view">
                                      <i class="fa fa-eye mr10"></i>
                                      <span id="ip_view"> 2453</span>
                                      </span>
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="analysis-icon">
                              <img src="{{asset('assets/img/city.jpg')}}" alt="..." class="pro-img">
                            </div>
                            <div class="analysis-discription">
                              <div class="right-info-container">
                                <h4 class="profile-name conurl"><a href="analysis/analysis-detail.html" target="_blank">Forex Research</a></h4>
                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                <p class="vc-num">
                                      <span class="bp-view">
                                      <i class="fa fa-comments mr10"></i>
                                      <span id="ip_view"> 2,461</span>
                                      </span>
                                  <span class="bp-view">
                                      <i class="fa fa-eye mr10"></i>
                                      <span id="ip_view"> 2453</span>
                                      </span>
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="analysis-icon">
                              <img src="{{asset('assets/img/city.jpg')}}" alt="..." class="pro-img">
                            </div>
                            <div class="analysis-discription">
                              <div class="right-info-container">
                                <h4 class="profile-name conurl"><a href="analysis/analysis-detail.html" target="_blank">Forex Research</a></h4>
                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                <p class="vc-num">
                                      <span class="bp-view">
                                      <i class="fa fa-comments mr10"></i>
                                      <span id="ip_view"> 2,461</span>
                                      </span>
                                  <span class="bp-view">
                                      <i class="fa fa-eye mr10"></i>
                                      <span id="ip_view"> 2453</span>
                                      </span>
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="analysis-icon">
                              <img src="{{asset('assets/img/city.jpg')}}" alt="..." class="pro-img">
                            </div>
                            <div class="analysis-discription">
                              <div class="right-info-container">
                                <h4 class="profile-name conurl"><a href="analysis/analysis-detail.html" target="_blank">Forex Research</a></h4>
                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                <p class="vc-num">
                                      <span class="bp-view">
                                      <i class="fa fa-comments mr10"></i>
                                      <span id="ip_view"> 2,461</span>
                                      </span>
                                  <span class="bp-view">
                                      <i class="fa fa-eye mr10"></i>
                                      <span id="ip_view"> 2453</span>
                                      </span>
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="analysis-icon">
                              <img src="{{asset('assets/img/city.jpg')}}" alt="..." class="pro-img">
                            </div>
                            <div class="analysis-discription">
                              <div class="right-info-container">
                                <h4 class="profile-name conurl"><a href="analysis/analysis-detail.html" target="_blank">Forex Research</a></h4>
                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                <p class="vc-num">
                                      <span class="bp-view">
                                      <i class="fa fa-comments mr10"></i>
                                      <span id="ip_view"> 2,461</span>
                                      </span>
                                  <span class="bp-view">
                                      <i class="fa fa-eye mr10"></i>
                                      <span id="ip_view"> 2453</span>
                                      </span>
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="analysis-icon">
                              <img src="{{asset('assets/img/city.jpg')}}" alt="..." class="pro-img">
                            </div>
                            <div class="analysis-discription">
                              <div class="right-info-container">
                                <h4 class="profile-name conurl"><a href="analysis/analysis-detail.html" target="_blank">Forex Research</a></h4>
                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                <p class="vc-num">
                                      <span class="bp-view">
                                      <i class="fa fa-comments mr10"></i>
                                      <span id="ip_view"> 2,461</span>
                                      </span>
                                  <span class="bp-view">
                                      <i class="fa fa-eye mr10"></i>
                                      <span id="ip_view"> 2453</span>
                                      </span>
                                </p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="popular">
                      <div class="recent-analysis-container">
                        <ul class="profile-list">
                          <li>
                            <div class="analysis-icon">
                              <img src="{{asset('assets/img/city.jpg')}}" alt="..." class="pro-img">
                            </div>
                            <div class="analysis-discription">
                              <div class="right-info-container">
                                <h4 class="profile-name conurl"><a href="analysis/analysis-detail.html" target="_blank">Forex Research</a></h4>
                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                <p class="vc-num">
                                      <span class="bp-view">
                                      <i class="fa fa-comments mr10"></i>
                                      <span id="ip_view"> 2,461</span>
                                      </span>
                                  <span class="bp-view">
                                      <i class="fa fa-eye mr10"></i>
                                      <span id="ip_view"> 2453</span>
                                      </span>
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="analysis-icon">
                              <img src="{{asset('assets/img/city.jpg')}}" alt="..." class="pro-img">
                            </div>
                            <div class="analysis-discription">
                              <div class="right-info-container">
                                <h4 class="profile-name conurl"><a href="analysis/analysis-detail.html" target="_blank">Forex Research</a></h4>
                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                <p class="vc-num">
                                      <span class="bp-view">
                                      <i class="fa fa-comments mr10"></i>
                                      <span id="ip_view"> 2,461</span>
                                      </span>
                                  <span class="bp-view">
                                      <i class="fa fa-eye mr10"></i>
                                      <span id="ip_view"> 2453</span>
                                      </span>
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="analysis-icon">
                              <img src="{{asset('assets/img/city.jpg')}}" alt="..." class="pro-img">
                            </div>
                            <div class="analysis-discription">
                              <div class="right-info-container">
                                <h4 class="profile-name conurl"><a href="analysis/analysis-detail.html" target="_blank">Forex Research</a></h4>
                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                <p class="vc-num">
                                      <span class="bp-view">
                                      <i class="fa fa-comments mr10"></i>
                                      <span id="ip_view"> 2,461</span>
                                      </span>
                                  <span class="bp-view">
                                      <i class="fa fa-eye mr10"></i>
                                      <span id="ip_view"> 2453</span>
                                      </span>
                                </p>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="analysis-icon">
                              <img src="{{asset('assets/img/city.jpg')}}" alt="..." class="pro-img">
                            </div>
                            <div class="analysis-discription">
                              <div class="right-info-container">
                                <h4 class="profile-name conurl"><a href="analysis/analysis-detail.html" target="_blank">Forex Research</a></h4>
                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                <p class="vc-num">
                                      <span class="bp-view">
                                      <i class="fa fa-comments mr10"></i>
                                      <span id="ip_view"> 2,461</span>
                                      </span>
                                  <span class="bp-view">
                                      <i class="fa fa-eye mr10"></i>
                                      <span id="ip_view"> 2453</span>
                                      </span>
                                </p>
                              </div>
                            </div>
                          </li>
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
                        <img src="{{asset('assets/img/add/best-fxvps.png')}}">
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <a href="javascript:void(0)" target="_blank">
                        <img src="{{asset('assets/img/add/fxsvps.png')}}">
                      </a>
                    </td>
                    <td>
                      <a href="javascript:void(0)" target="_blank">
                        <img src="{{asset('assets/img/add/fxvpspro.png')}}">
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
  @endsection
@section('ticker_bottom')
  @include('Front_End.layout.includes.ticker_bottom')
  @endsection