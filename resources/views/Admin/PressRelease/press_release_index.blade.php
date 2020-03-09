@extends('Admin.master')
@section('content')
    <header class="content__title">
        <a href="{{route('Press_Release.create')}}" class="custom-button">Create Press Release</a>
    </header>
    @php
    $s=1;
    @endphp
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="data-table" class="table">
                    <thead>
                    <tr>
                        <th width="10%">Serial</th>
                        <th width="20%">S_Tag</th>
                        <th width="25%">S_Link</th>
                         <th width="25%">D_Tag</th>
                       <th width="20%">Option</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($press_release as $release) 
                    <tr>
                        <td>{{$s++}}</td>
                        <td>{{$release->source_tag}}</td>
                        <td>{{$release->source_link}}</td>
                       <td>{{$release->detail_tag}}</td>
                        
                        <td><a href="{{route('Press_Release.edit',$release->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <form id="delete-form-{{ $release->id }}" method="post" action="{{ route('Press_Release.destroy',$release->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            <a href="" onclick="
                                    if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $release->id }}').submit();
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
    <div>{{$press_release->links()}}</div>
@endsection
