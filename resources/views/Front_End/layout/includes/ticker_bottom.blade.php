<div class="bottom-broker-container">
    <span class="broker-hover">Broker Section <i class="fa fa-star ml-1-half"></i></span>
    <div class="container-fluid broker-review-carosel" id="ticker">
        <div id="carouselTicker">
            <div class="carouselTicker carouselTicker-start">
                <ul class="carouselTicker__list text-center ms-margin">
                    <?php
                      use App\Brokerreview;
                      $all_brokers = Brokerreview::where('status','=',2)->orderBy('id', 'DESC')->get();
                    ?>
                    @foreach ($all_brokers as $broker)
                        <li class="carouselTicker__item ">
                        <div class="fig-container">
                            <figure class="ms-thumbnail ms-thumbnail-left">
                                <img src="{{url('/brokerimages/'.$broker->image)}}" alt="" class="img-fluid">
                                <figcaption class="ms-thumbnail-caption text-center">
                                    <div class="ms-thumbnail-caption-content">
                                        <a href="{{url('show-broker/'.$broker->id)}}" class="btn btn-yellow btn-raised">Read Review</a>
                                    </div>
                                </figcaption>
                            </figure>
                            <a href="javascript:void(0)" class="btn btn-yellow btn-raised ropen">Open Account</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>