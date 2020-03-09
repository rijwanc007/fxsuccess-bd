@extends('Admin.master')
@section('content')
    <header class="content__title">
    <a href="{{route('course.create')}}" class="custom-button">CreateCourse</a> <a href="{{url('/coursetrash')}}" class="custom-button">GotoTrash</a>
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
                <table id="data-table" class="table course">
                    <thead>
                        <tr>
                            <th width="10%">S.N</th>
                            <th width="20%">Title</th>
                            <th width="40%">Description</th> 
                            <th width="10%">Status</th> 
                            <th width="20%">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($courses as $course)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$course->title}}</td>
                            <td>{!! str_limit($course->description, $limit = 150, $end = '...') !!}</td> 
                            <td>
                                <?php
                                if($course->status == 1){
                                echo "<span style='background: #119411;color:#dcdc1ce0;padding: 3px 14px;border-radius: 3px;'>Active</span>";
                                } else{
                                echo "<span style='background: #94111c;color:#dcdc1ce0;
                                padding: 3px 10px;
                                border-radius: 3px;'>Deactive</span>";
                                }
                                ?>
                                </td>
                            <td>
                                <a href="{{route('course.edit',$course->id)}}"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <form id="soft-delete-form-{{ $course->id }}" method="post" action="{{ url('softdeletecourse',$course->id) }}" style="display: none">
                                        {{ csrf_field() }}
                                        
                                    </form>
                                <a href="" onclick="
                                    if(confirm('Are you sure, You Want to send it into trash?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('soft-delete-form-{{$course->id}}').submit();
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