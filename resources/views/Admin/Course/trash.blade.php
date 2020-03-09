@extends('Admin.master')
@section('content')
    <header class="content__title">
    <a href="{{route('course.create')}}" class="custom-button">CreatePost</a>
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
                     @foreach ($trash_course as $course)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$course->title}}</td>
                            <td>{!! str_limit($course->description, $limit = 150, $end = '...') !!}</td> 
                            <td>
                                <form id="restore-delete-form-{{ $course->id }}" method="post" action="{{ url('restorecourse',$course->id) }}" style="display: none">
                                    {{ csrf_field() }}
                                    
                                </form>
                            <a href="" onclick="
                                if(confirm('Are you sure, You Want to restore it?'))
                                {
                                event.preventDefault();
                                document.getElementById('restore-delete-form-{{$course->id}}').submit();
                                }
                                else{
                                event.preventDefault();
                                }" class="btn  btn-primary "></i>Restore
                            </a> 
                            </td>
                            <td>
                                <a href="{{route('course.edit',$course->id)}}"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <form id="delete-form-{{ $course->id }}" method="post" action="{{ route('course.destroy',$course->id) }}" style="display: none">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                <a href="" onclick="
                                    if(confirm('Are you sure, You Want to delete Course Permanantly?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$course->id}}').submit();
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