@foreach($analysis_data as $analysis)
<article class="card mb-1-half strategy-card-limit article">
  <div class="card-body ">
    <div class="card-bg-inner">
      <div class="row">
        <div class="col-md-3 md-no-pr toggle-adjust-left" align="middle">
          <div class="zoom-img left-inner-img">
            <img src="{{url('/upload/images/'.$analysis->image)}}" alt="">
            <div class="inner-info-box">
              <?php
              $art_date= explode(',',$analysis->time_zone); 
             //dd($art_date);

            ?>
              <i class="fa fa-pencil"></i>
              <span class="inner-info-month">{{str_limit($art_date[0],$limit = 3,$end='')}}</span>
              <span class="inner-info-date">{{$art_date[1]}}</span>
              <span class="inner-info-year">{{$art_date[2]}}</span>
            </div>
          </div>
        </div>
        <!-- Problem -->
        <div class="col-md-9 md-pl-1-half toggle-adjust-right">
          <div class="right-inner">
            <h3>
              <p class="text-left">{{$analysis->title}}</p>
            </h3>
            <!--Star Start-->
            <div align=left id="RoundIcons">
             
            </div>
            <!--Star End-->
            <div align=left style="font-size:13px">
            <p class="text-justify">{!!str_limit($analysis->description, $limit = 350, $end = '...')!!} </p>
              <div class="pull-left" style="margin-top:7px">
                <?php
                 $analysismain = DB::table('visits')->where('visitable_id','=',$analysis->id)->where('visitable_type','=','App\Analysis')->get();
                 $analysis_com_cnt = DB::table('comments')->where('analysis_id','=',$analysis->id)->get();

                ?>
                <span class="bp-view">
                <i class="fa fa-comments mr10"></i>
                <span id="ip_view"> <?php if(!empty($analysis_com_cnt)){echo count($analysis_com_cnt);}?></span>
                </span>
                <span class="bp-view">
                <i class="fa fa-eye mr10"></i>
                <span id="ip_view"><?php if(!empty($analysismain)){echo count($analysismain);}?></span>
                </span>
              </div>
            <a href="{{url('/fxanaysis/'.$analysis->id)}}"  class="ms-tag ms-tag-dark-warning text-right pull-right">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
@endforeach
{{$analysis_data->render()}}