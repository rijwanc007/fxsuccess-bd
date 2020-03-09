@extends('Admin.master')
@section('content')
    <header class="content__title">
        <a href="{{route('advertisement.index')}}" class="custom-button">Show Advertise</a>
    </header>
    <div class="card">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::open(['route'=>['advertisement.update',$advertisement_data->id],'method' => 'PUT','enctype'=>'multipart/form-data'])!!}
            <div class="form-group">
                <input type="file" class="form-control" name="advertisement_image">
                <img src="{{url('/addimage/'.$advertisement_data->advertisement)}}" width="150" height="60"/>
            </div>
            <div class="form-group">
                <select class="select2 form-control" name="position" data-minimum-results-for-search="Infinity" required>
                    <option style="color:black" >Select Position</option>
                    @foreach($advertisement_page as $advertisement)
                        <option style="color:black" value="{{$advertisement->select_position}}" @if($advertisement->select_position==$advertisement_data->position)selected="selected"@endif>{{$advertisement->select_position}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-danger btn-lg btn-block blockbtn">Update Advertisement</button>
            {!!Form::close()!!}
        </div>
    </div>
@endsection
