@extends('Admin.master')
@section('content')
<header class="content__title">
        <a href="{{url('/brokerlist')}}" class="custom-button">Gobacktobrokerlist</a>
    </header>
    <div class="card">
        <div class="card-body">
            <?php //echo $id?>
            {!! Form::open(['url'=>'/storereview/'.$id,'method'=>'post','enctype'=>'multipart/form-data']) !!}
           @if(!empty($fx_review))
            <div class="form-group">
            <textarea class="form-control" name="fxreview" required>{{$fx_review->fxreview}}</textarea>
            </div>
            @else 
            <div class="form-group">
                    <textarea class="form-control" name="fxreview" required></textarea>
                 </div>
            @endif
            <button type="submit" class="btn btn-danger btn-lg btn-block blockbtn">Submit</button>
            {!!Form::close()!!}
        </div>
    </div>
    <script>
		CKEDITOR.replace( 'fxreview' );
	</script>
@endsection
