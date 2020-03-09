@extends('Admin.master')
@section('content')
    <header class="content__title">
        <a href="{{route('advertisement.create')}}" class="custom-button">Create Advertisement</a>
    </header>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                @php($s=1)
                <table id="data-table" class="table">
                    <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Advertisement</th>
                        <th>Position</th>
                        <th>option</th>
                    </tr>
                    </thead> 
                    <tbody>
                     @foreach($advertisement_data as $advertisement)
                        <tr>
                        <td>{{$s++}}</td>
                        <td><img src="{{url('addimage/'.$advertisement->advertisement)}}" width="150" height="60"/></td>
                        <td>{{$advertisement->position}}</td>
                        <td><a href="{{route('advertisement.edit',$advertisement->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <form id="delete-form-{{ $advertisement->id }}" method="post" action="{{ route('advertisement.destroy',$advertisement->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            <a href="" onclick="
                                    if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $advertisement->id }}').submit();
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
