@extends('Admin.master')
@section('content')
    <header class="content__title">
    {{-- <a href="{{route('/admin-pannel')}}" class="custom-button">Home</a> --}}
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
                            <th width="5%">S.N</th>
                            <th width="10%">Name</th>
                            <th width="20%">Email</th> 
                            <th width="45%">Message</th> 
                            <th width="20%">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($all_messages as $message)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{!! str_limit($message->message, $limit = 200, $end = '...') !!}</td> 
                        
                            <td>
                                <a href="{{route('message.edit',$message->id)}}" id="{{$message->id}}"  class="btn btn-info show" data-toggle="modal" data-target="#message-modal-default"><i class="fa fa-eye"></i></a>
                                <form id="delete-form-{{ $message->id }}" method="post" action="{{ route('message.destroy',$message->id) }}" style="display: none">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                <a href="" onclick="
                                    if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$message->id}}').submit();
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

    <div class="modal fade" id="message-modal-default" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title pull-left">Show Message</h5>
                    </div>
                    <div class="modal-body">
                           {!!Form::open(['url'=>'category/update','method' => 'post', 'id'=>'message_view'])!!}
                           {{method_field('PUT')}}
                           <div class="form-group">
                             <input type="text" class="form-control form-control-sm" id="name" name ="name" value="">
                            <i class="form-group__bar"></i>
                            <input type="hidden" class="form-control form-control-sm" id="id" name ="id" value="">
                            <i class="form-group__bar"></i>
                          </div>
                          <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="email" name ="email" value="">
                               <i class="form-group__bar"></i>
                           </div>
                           <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="Phone" name ="Phone" value="">
                               <i class="form-group__bar"></i>
                           </div>
                           <div class="form-group">
                                <input type="text" class="form-control form-control-sm" id="inmessage" name ="inmessage" value="">
                               <i class="form-group__bar"></i>
                           </div>
                           {{-- <div class="form-group">
                           <textarea class="form-control" name="message" id="message"><h3 class="msg">jjjljkljj<h3></textarea>
                         </div> --}}
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
        <style>
             input#inmessage {
                height: 200px;
                background: #f8f8f8;
                color: #139c77;
                padding: 17px;
                font: 25px;
                font-size: 13px;
            }
        </style>
        <script>
               //var editor = CKEDITOR.replace( 'message' );
                $(document).on('click','.show',function(){
                var msgid = $(this).attr('id');
                //var mes = $('#message_view').find('#message').val();
               // alert(mes);
                $.get('/singlemsg/'+ msgid, function(data){
                    
                    
                     $('#message_view').find('#name').val(data.name);
                     $('#message_view').find('#email').val(data.email);
                     $('#message_view').find('#Phone').val(data.Phone);
                     $('#message_view').find('#inmessage').val(data.message);
                     //$('form-group.msg').replaceWith('<h3 class="msg">'+data.phone+'<h3>');
                     //$('#mymessage').html(data.message);
                     //console.log(result);
                });
            });
            </script>
@endsection