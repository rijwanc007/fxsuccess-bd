@extends('Admin.master')
@section('content')
<header class="content__title">
        <a href="{{url('/brokerlist')}}" class="custom-button">Gobacktobrokerlist</a>
    </header>
    
         <div class="card">
            <div class="card-body">
                    {!! Form::open(['url'=>'/storevideo/'.$id,'method'=>'post','enctype'=>'multipart/form-data']) !!}
                    
                    @if(!empty($jsonvid))
                    <div class="list" data-index_no="<?= sizeof($jsonvid->program)-1?>">
                        <div class="itemWrapper">
                            <table class="table table-bordered moreTable">
                                <tr>
                                    <th width="5%">DayNo</th>
                                    <th width="40%">Link</th>
                                    <th width="40%">description</th>
                                    <th width="15%">Option</th>
                                </tr>
                               
                                @foreach ($jsonvid->program as $key=> $item)
                                  
                                <tr class="item_tr single_list">
                                      <td class="day_no">{{$item->day}}</td>
                                      <td><textarea class="form-control" id="pro_title" name="program[<?=$key?>][link]">{{$item->link}}</textarea><br></td>
                                       <td><textarea class="form-control" id="pro_description" name="program[<?=$key?>][description]">{{$item->description}}</textarea><br></td>
                                      <input type="hidden" name="program[<?=$key?>][day]" class="form-control dayval" value="{{$item->day}}">
                                      <td><span class="remove" style="background: #ed3610;padding: 8px 10px;color: #fff;border-radius: 6%;text-decoration: none;cursor:pointer">-</span></td>
                                  </tr>
                                  @endforeach
                            </table>
                                  <span  class="add_more" style="background: #28d19c;
                                     padding: 8px 21px;
                                    color: #fff;
                                    border-radius: 8%;text-decoration: none; margin-bottom: 10px;cursor:pointer;">+</span><br><br>
                             </div>
                       </div>
                       @else
                       <div class="list" data-index_no="0">
                            <div class="itemWrapper">
                                <table class="table table-bordered moreTable">
                                    <tr>
                                        <th width="5%">DayNo</th>
                                        <th width="40%">Link</th>
                                        <th width="40%">description</th>
                                        <th width="15%">Option</th>
                                    </tr>
                                  
                                      
                                    <tr class="item_tr single_list">
                                        <td class="day_no">1</td>
                                        <td><textarea class="form-control" id="pro_title" name="program[0][link]"></textarea><br></td>
                                         <td><textarea class="form-control" id="pro_description" name="program[0][description]"></textarea><br></td>
                                        <input type="hidden" name="program[0][day]" class="form-control dayval" value="1">
                                        <td><span class="remove" style="background: #ed3610;padding: 8px 10px;color: #fff;border-radius: 6%;text-decoration: none;cursor:pointer">-</span></td>
                                    </tr>
                                  
    
                                </table>
                                  <span  class="add_more" style="background: #28d19c;
                                                                        padding: 8px 21px;
                                                                        color: #fff;
                                                                        border-radius: 8%;text-decoration: none; margin-bottom: 10px;cursor:pointer;">+</span><br><br>
                               </div>
                           </div>
                         @endif
                        <button type="submit" class="btn btn-primary"style="cursor:pointer">Submit</button>
                    {!! Form::close() !!}
          </div>
    </div>
    <script>
		  $(document).ready(function () {
            $(document).on('click', '.add_more', function () {
                var index = $('.list').data('index_no');
                $('.list').data('index_no', index + 1);
                var html = $('.itemWrapper .item_tr:last').clone().find('.form-control').each(function () {
                    this.name = this.name.replace(/\d+/, index+1);
                    this.id = this.id.replace(/\d+/, index+1);
                    this.value = '';
                }).end();
                $('.moreTable').append(html);
                var rowCount = $('.moreTable tr').length;
                $(this).closest('.itemWrapper').find('.item_tr:last').find('.day_no').html(rowCount-1);
                $(this).closest('.itemWrapper').find('.item_tr:last').find('.dayval').val(rowCount-1);
            });
            $(document).on('click', '.remove', function () {
                var obj=$(this);
                var count= $('.single_list').length;
                if(count > 1) {
                    if(obj.closest('.single_list').is($(this).closest('.itemWrapper').find('.single_list:last'))){
                        obj.closest('.single_list').remove();
                    }else{
                        alert('You can only remove the last day!');
                    }
                }
            });
        });
	</script>
@endsection
