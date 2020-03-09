@extends('Admin.master')
@section('content')
    <header class="content__title">
            <a href="{{route('analysis.index')}}" class="custom-button">AnalysisList</a>
    </header>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="data-table" class="table">
                    <thead>
                    <tr>
                        <th width="10%">Serial</th>
                        <th width="15%">Title</th>
                        <th width="20%">Photo</th>
                        <th width="10%">status</th>
                        <th width="20%">option</th>
                    </tr>
                    </thead>
                    <tbody>
                     @php($s=1)
                    @foreach($trash_analysis as $analysis)
                        <tr>
                            <td>{{$s++}}</td>
                            <td>{{$analysis->title}}</td>
                            <td><img src="{{url('/upload/images/'.$analysis->image)}}" width="150" height="60"></td>
                            <td>
                                 <form id="restore-form-{{ $analysis->id }}" method="post" action="{{ url('restoreanalysis',$analysis->id) }}" style="display: none">
                                            {{ csrf_field() }}
                                            
                                        </form>
                                    <a href="" onclick="
                                        if(confirm('Are you sure, You Want to restore Analysis?'))
                                        {
                                        event.preventDefault();
                                        document.getElementById('restore-form-{{$analysis->id}}').submit();
                                        }
                                        else{
                                        event.preventDefault();
                                        }" class="btn  btn-primary ">Restore
                                    </a>
                            </td>
                           
                            <td>
                                <a href="{{route('analysis.edit',$analysis->id)}}"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <form id="delete-form-{{ $analysis->id }}" method="post" action="{{ route('analysis.destroy',$analysis->id) }}" style="display: none">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="" onclick="
                                        if(confirm('Are you sure, You Want to delete this permanantly?'))
                                        {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $analysis->id }}').submit();
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
