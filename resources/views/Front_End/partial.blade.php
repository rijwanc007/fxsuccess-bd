@foreach($articles as $article)
<article class="card mb-1-half strategy-card-limit article">
  <div class="card-body ">
    <div class="card-bg-inner">
      <div class="row">
        <div class="col-md-3 md-no-pr toggle-adjust-left" align="middle">
          <div class="zoom-img left-inner-img">
            <img src="{{url('/articleimages/'.$article->image)}}" alt="">
            <div class="inner-info-box">
              <?php
              $art_date= explode(',',$article->articledate); 
             //dd($art_date);
             $article_count = DB::table('visits')->where('visitable_id','=',$article->id)->where('visitable_type','=','App\Article')->get();
             $article_com_cnt = DB::table('articlecomments')->where('article_id','=',$article->id)->get();

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
              <p class="text-left">{{$article->title}}</p>
            </h3>
            <!--Star Start-->
            <div align=left id="RoundIcons">
    
            </div>
            <!--Star End-->
            <div align=left style="font-size:13px">
            <p class="text-justify">{!!str_limit($article->description, $limit = 350, $end = '...')!!} </p>
              <div class="pull-left" style="margin-top:7px">
                <span class="bp-view">
                <i class="fa fa-comments mr10"></i>
                <span id="ip_view"><?php if(!empty($article_com_cnt)){echo count($article_com_cnt);}?></span>
                </span>
                <span class="bp-view">
                <i class="fa fa-eye mr10"></i>
                <span id="ip_view"><?php if(!empty($article_count)){echo count($article_count);}?></span>
                </span>
              </div>
            <a href="{{url('/test/'.$article->id)}}"  class="ms-tag ms-tag-dark-warning text-right pull-right">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>
@endforeach
{{$articles->render()}}