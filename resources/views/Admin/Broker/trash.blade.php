@extends('Admin.master')
@section('content')
    <header class="content__title">
    <a href="{{url('brokerlist')}}" class="custom-button">GoBack</a>
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
                 @foreach ($trashed_broker as $broker)
                    <?php
                        $broker_data = json_decode($broker->broker_info);
                            
                    ?>
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$broker_data->broker_name}}</td>
                        <td><img src="{{url('/brokerimages/'.$broker->image)}}" width="150" height="60"></td>
                        <td> 
                         <form id="restore-form-{{$broker->id }}" method="post" action="{{url('restore/'.$broker->id)}}" style="display: none">
                                        {{ csrf_field() }}
                                       
                           </form>   
                        <a href="" onclick="
                        if(confirm('Are you sure, You Want restore it?'))
                            {
                                event.preventDefault();
                                document.getElementById('restore-form-{{$broker->id}}').submit();

                            }else{
                                event.preventDefault();
                            }" class="btn  btn-primary">Restore</i>
                            </a>               
                        </td>
                        <td><a  href="{{url('/showbroker/'.$broker->id)}}" class="btn btn-raised btn-warning reviewedit" id="{{$broker->id}}">Show Data</a>
                            <form id="delete-form-{{ $broker->id }}" method="post" action="{{ url('deletebroker',$broker->id) }}" style="display: none">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                   
                                </form>
                            <a href="" onclick="
                                if(confirm('Are you sure, You Want to delete it permanently?'))
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
    <script>
        $('#data-table').dataTable( {
                paging: false,
                searching: false
            } );
        </script>
@endsection