@extends('Admin.master')
@section('content')
    <header class="content__title">
        <a href="{{route('analysis.index')}}" class="custom-button">Show Analysis</a>
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
            {!!Form::open(['route'=>'analysis.store','method' => 'post','enctype'=>'multipart/form-data'])!!}
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Analysis Tittle" required>
                <i class="form-group__bar"></i>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="published_by" placeholder="published By" required>
                <i class="form-group__bar"></i>
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="description" required></textarea>
            </div>
            <div class="form-group">
                <select class="select2 form-control" name="status" data-minimum-results-for-search="Infinity" required>
                    <option style="color:black" >Select Status</option>
                    <option style="color:black" value="1">Publish </option>
                    <option style="color:black" value="2">Unpublish</option>
                </select>
            </div>
            <button type="submit" class="btn btn-danger btn-lg btn-block blockbtn">Save Analysis</button>
            {!!Form::close()!!}
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endsection
