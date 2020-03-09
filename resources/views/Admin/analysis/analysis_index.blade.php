@extends('Admin.master')
@section('content')
    <header class="content__title">
            <a href="{{route('analysis.create')}}" class="custom-button">Create Analysis</a> <a href="{{url('analysistrash')}}" class="custom-button">GotoTrash</a>
    </header>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                @php($s=1)
                <table id="data-table" class="table">
                    <thead>
                    <tr>
                        <th width="10%">Serial</th>
                        <th width="15%">Title</th>
                        <th width="20%">Photo</th>
                        <th width="25%">Description</th>
                        <th width="10%">Published</th>
                        <th width="20%">option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($analysis_data as $analysis)
                        <tr>
                            <td>{{$s++}}</td>
                            <td>{{$analysis->title}}</td>
                            <td><img src="{{url('/upload/images/'.$analysis->image)}}" width="150" height="60"></td>
                            <td>{!!  str_limit($analysis->description, $limit = 50, $end = '...') !!}</td>
                            <td>{{$analysis->published_by}}</td>
                           
                            <td>
                                <a href="{{route('analysis.edit',$analysis->id)}}"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <form id="softdelete-form-{{ $analysis->id }}" method="post" action="{{ url('softdelanalysis',$analysis->id) }}" style="display: none">
                                        {{ csrf_field() }}
                                        
                                    </form>
                                <a href="" onclick="
                                    if(confirm('Are you sure, You Want to send it into trash?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('softdelete-form-{{$analysis->id}}').submit();
                                    }
                                    else{
                                    event.preventDefault();
                                    }" class="btn  btn-danger "><i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
