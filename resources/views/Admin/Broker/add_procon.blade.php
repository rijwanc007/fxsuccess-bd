@extends('Admin.master')
@section('content')
<header class="content__title">
        <a href="{{url('/brokerlist')}}" class="custom-button">Gobacktobrokerlist</a>
    </header>
    <div class="card">
            <div class="card-body">
                    {!! Form::open(['url'=>'/storeprocon/'.$id,'method'=>'post','enctype'=>'multipart/form-data']) !!}
                     @if(!empty($jsonprocon))
                       <div class="list" data-index_no="0">
                            <div class="itemWrapper">
                                <table class="table table-bordered moreTable">
                                    <tr>
                                        <th width="50%">Pros</th>
                                        <th width="50%">Cons</th>
                                    </tr>
                                   <tr class="item_tr single_list">
        
                                   <td><textarea class="form-control" id="pro_title" name="pros">{{$jsonprocon->pros}}</textarea><br></td>
                                         <td><textarea class="form-control" id="pro_description" name="cons">{{$jsonprocon->cons}}</textarea><br></td>
                                    </tr>
                                 </table>
                               </div>
                           </div>
                           @else

                           <div class="list" data-index_no="0">
                                <div class="itemWrapper">
                                    <table class="table table-bordered moreTable">
                                        <tr>
                                            <th width="50%">Pros</th>
                                            <th width="50%">Cons</th>
                                        </tr>
                                       <tr class="item_tr single_list">
            
                                            <td><textarea class="form-control" id="pro_title" name="pros"></textarea><br></td>
                                             <td><textarea class="form-control" id="pro_description" name="cons"></textarea><br></td>
                                        </tr>
                                     </table>
                                   </div>
                               </div>
                               @endif
                        <button type="submit" class="btn btn-primary"style="cursor:pointer">Submit</button>
                    {!! Form::close() !!}
          </div>
    </div>
    <script>
         CKEDITOR.replace( 'pros' );
         CKEDITOR.replace( 'cons' );
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
