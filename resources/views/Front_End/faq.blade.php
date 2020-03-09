@extends('Front_End.layout.master')
@section('faq_status','active')
         <!-- FAQ -->
@section('content')
         <div class="container contact-container">
          <h3 class="contact-header">Basic Questions & Answers</h3 class="contact-header">
              <div class="row">
               <div class="col-md-6">
               @foreach ($first_3 as $question)
                <div class="ms-collapse faq-custom" id="accordion2" role="tablist" aria-multiselectable="true">
                  <div class="mb-0 card card-primary">
                      <div class="card-header" role="tab" id="heading{{$loop->index + 1}}2">
                        <h4 class="card-title">
                          <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapse{{$loop->index + 1}}2" aria-expanded="false" aria-controls="collapse{{$loop->index + 1}}2">
                          {{$question['question']}} </a>
                        </h4>
                      </div>
                      <div id="collapse{{$loop->index + 1}}2" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading{{$loop->index + 1}}2" data-parent="#accordion2">
                        <div class="card-body">{!!$question['answer']!!}</div>
                      </div>
                    </div>
                   
                  </div>
                  @endforeach 
              </div>
             
              <div class="col-md-6">
              @foreach ($another_3 as $questionanother)
                <div class="ms-collapse faq-custom" id="accordion3" role="tablist" aria-multiselectable="true">
                  <div class="mb-0 card card-primary">
                      <div class="card-header" role="tab" id="heading{{$loop->index + 6}}2">
                          <h4 class="card-title">
                            <a class="collapsed withripple" role="button" data-toggle="collapse" href="#collapse{{$loop->index + 6}}2" aria-expanded="false" aria-controls="collapse{{$loop->index + 6}}2">
                            {{$questionanother['question']}} </a>
                          </h4>
                        </div>
                        <div id="collapse{{$loop->index + 6}}2" class="card-collapse collapse" role="tabpanel" aria-labelledby="heading{{$loop->index + 6}}2" data-parent="#accordion3">
                            <div class="card-body">{!!$questionanother['answer']!!}</div>
                          </div>
                    </div>
                  </div>
                @endforeach
              </div>
             
         
          </div>
         </div>
         <!-- FAQ Review -->
        @endsection

         
        
