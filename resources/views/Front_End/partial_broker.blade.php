<table class="table broker-table index-toggle" data-show-toggle="true" data-expand-first="false">
        <thead>
           <tr>
              <th class="rank-width" data-filterable="false">Rank</th>
              <th class="broker-nwidth">Broker's Name</th>
              <th data-breakpoints="xs sm md" data-sortable="false" data-filterable="false">Regulation</th>
              <th data-breakpoints="xs" class="d-width" data-filterable="false">Minimum Diposite</th>
              <th data-breakpoints="xs" class="broker-nwidth" data-filterable="false">Diposite Bonus</th>
              <th data-breakpoints="xs sm md" data-filterable="false">Type of Platform</th>
              <th data-breakpoints="xs sm md" data-sortable="false" data-filterable="false">More Info</th>
           </tr>
        </thead>
        <tbody>
           @if(!empty($first_broker))
               <tr>
                    <td class="text-success" data-sort-value="1">
                       <div class="position-relative"><i class="fa fa-bookmark"></i> <span class="rank">1</span></div>
                    </td>
                    <td data-sort-value="Pepperstone">
                       <div class="broker-image img-tooltip glass">
                          <a href="javascript:void(0)">
                          <img src="{{url('/brokerimages/'.$first_broker->image)}}" alt="Pepperstone" height="43">
                          </a>
                          <?php
                            $first_broker_data = json_decode($first_broker->broker_info);
                          ?>
                          <div class="broker-tooltip">
                             <div class="broker-info-container">
                                <h3>Company Name</h3>
                                <p>{!!$first_broker_data->broker_name!!}</p>
                             </div>
                          </div>
                       </div>
                    </td>
                    <td><a class="btn btn-raised btn-primary reg-btn" onmouseover="clickHere(this)" onmouseout="Regulate(this)" onclick="getid(this)" data-id="{{$first_broker->id}}" data-toggle="modal" data-target="#myModal001" >Regulated</a></td>
                    <td>${{$first_broker_data->min_deposit}}</td>
                    <td>{{$first_broker_data->deposit_bonus}}</td>
                    <td class="trader-platform">{{$first_broker_data->trading_platform}}</td>
                    <td>
                       <button class="btn btn-raised btn-warning custom-broker-up">Sign Up</button>
                    <p><a href="{{url('show-broker',$first_broker->id)}}">See Review</a></p>
                    </td>
                 </tr>
                 @endif
                 @if(!empty($second_broker))
                 <tr>
                    <td class="text-info" data-sort-value="2">
                       <div class="position-relative"><i class="fa fa-bookmark"></i> <span class="rank">2</span></div>
                    </td>
                    <td data-sort-value="Pepperstone">
                       <div class="broker-image img-tooltip glass">
                          <a href="javascript:void(0)">
                          <img src="{{url('/brokerimages/'.$second_broker->image)}}" height="43" alt="Pepperstone">
                          </a>
                          <?php
                            $second_broker_data = json_decode($second_broker->broker_info);
                          ?>
                          <div class="broker-tooltip">
                             <div class="broker-info-container">
                                <h3>Company Name</h3>
                                <p>{!!$second_broker_data->broker_name!!}</p>
                             </div>
                          </div>
                       </div>
                    </td>
                    <td><a class="btn btn-raised btn-primary reg-btn" onmouseover="clickHere(this)" onmouseout="Regulate(this)" onclick="getid(this)" data-id="{{$second_broker->id}}" data-toggle="modal" data-target="#myModal001" >Regulated</a></td>
                    <td>${{$second_broker_data->min_deposit}}</td>
                    <td>{{$second_broker_data->deposit_bonus}}</td>
                    <td class="trader-platform">{{$second_broker_data->trading_platform}}</td>
                    <td>
                       <button class="btn btn-raised btn-warning custom-broker-up">Sign Up</button>
                       <p><a href="{{url('show-broker',$second_broker->id)}}">See Review</a></p>
                    </td>
                 </tr>
                 @endif
                 @if(!empty($third_broker))
                 <tr>
                    <td class="text-warning" data-sort-value="3">
                       <div class="position-relative"><i class="fa fa-bookmark"></i> <span class="rank">3</span></div>
                    </td>
                    <td data-sort-value="ironfx">
                       <div class="broker-image img-tooltip glass">
                          <a href="javascript:void(0)">
                          <img src="{{url('/brokerimages/'.$third_broker->image)}}" alt="ironfx" height="43">
                          </a>
                          <?php
                            $third_broker_data = json_decode($third_broker->broker_info);
                          ?>
                          <div class="broker-tooltip">
                             <div class="broker-info-container">
                                <h3>Company Name</h3>
                                <p>{!!$third_broker_data->broker_name!!}</p>
                             </div>
                          </div>
                       </div>
                    </td>
                    <td><a class="btn btn-raised btn-primary reg-btn" onmouseover="clickHere(this)" onmouseout="Regulate(this)" onclick="getid(this)" data-id="{{$third_broker->id}}" data-toggle="modal" data-target="#myModal001" >Regulated</a></td>
                    <td>${{$third_broker_data->min_deposit}}</td>
                    <td>{{$third_broker_data->deposit_bonus}}</td>
                    <td class="trader-platform">{{$third_broker_data->trading_platform}} </td>
                    <td>
                       <button class="btn btn-raised btn-warning custom-broker-up">Sign Up</button>
                       <p><a href="{{url('show-broker',$third_broker->id)}}">See Review</a></p>
                    </td>
                 </tr>
                 @endif
      @foreach ($allreview as $review)
                         <tr>
                         <td class="color-gray" data-sort-value="{{$loop->index + 4}}">
                              <div class="position-relative"><i class="fa fa-bookmark"></i> <span class="rank">{{$loop->index + 4}}</span></div>
                           </td>
                           <td data-sort-value="Pepperstone">
                              <div class="broker-image img-tooltip glass">
                                 <a href="javascript:void(0)">
                                 <img src="{{url('/brokerimages/'.$review->image)}}" alt="Pepperstone" height="43">
                                 </a>
                                 <?php
                                 $broker_data = json_decode($review->broker_info);
                                 ?>
                                 <div class="broker-tooltip">
                                    <div class="broker-info-container">
                                       <h3>Company Name</h3>
                                       <p>{{$broker_data->broker_name}}</p>
                                    </div>
                                 </div>
                              </div>
                           </td>
                        {{-- <td><a href="javascript:void(0)" class="sat" onclick="getid(this)" data-id="{{$review->id}}">showid</a></td> --}}
                        <td><a class="btn btn-raised btn-primary reg-btn" onmouseover="clickHere(this)" data-id="{{$review->id}}" onmouseout="Regulate(this)" onclick="getid(this)" data-toggle="modal" data-target="#myModal001" >Regulated</a></td>

                        <td>{{$broker_data->min_deposit}}</td>
                           <td>{{$broker_data->deposit_bonus}}</td>
                           <td class="trader-platform">{{$broker_data->trading_platform}}</td>
                           <td>
                              <button class="btn btn-raised btn-warning custom-broker-up">Sign Up</button>
                           <p><a href="{{url('show-broker',$review->id)}}">See Review</a></p>
                           </td>
                           
                        </tr>
            @endforeach
      </tbody>
  </table>
     {{$allreview->render()}}