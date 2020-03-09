@extends('Admin.master')
@section('content')
    <header class="content__title">
        <a href="{{route('analysis.index')}}" class="custom-button">Show Analysis</a>
    </header>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>['analysis.update',$analysis_data->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Analysis Tittle" value="{{$analysis_data->title}}" required>
                <i class="form-group__bar"></i>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="published_by" placeholder="published By" value="{{$analysis_data->published_by}}"required>
                <i class="form-group__bar"></i>
            </div>
            <div class="form-group">
                <input type="file" value='12' class="form-control" name="image">
                <i class="form-group__bar"></i>
                <img src="{{url('/upload/images/'.$analysis_data->image)}}" width="150px" height="100px"/>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="description" required>{!! $analysis_data->description !!}</textarea>
            </div>
            <div class="form-group">
                <select class="select2 form-control" name="status" data-minimum-results-for-search="Infinity" required>
                    <option value="1"@if($analysis_data->status==1)selected="selected"@endif>Publish </option>
                    <option value="2"@if($analysis_data->status==2)selected="selected"@endif>Unpublish </option>
                </select>
            </div>
            <button type="submit" class="btn btn-danger btn-lg btn-block blockbtn">Update Analysis Post</button>
            {!!Form::close()!!}
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endsection
