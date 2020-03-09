@extends('Admin.master')
@section('content')
<header class="content__title">
        <a href="{{route('question.index')}}" class="custom-button">Show question</a>
    </header>
    <div class="card">
        <div class="card-body">
        {!!Form::open(['route' => ['question.update',$q_by_id->id],'method' => 'post'])!!}
        {{method_field('PUT')}}
            <div class="form-group">
            <input type="text" class="form-control" name="question" value="{{$q_by_id->question}}">
                <i class="form-group__bar"></i>
            </div>
            
            <div class="form-group">
               <textarea class="form-control" name="answer" required>{{$q_by_id->answer}}</textarea>
            </div>
            <div class="form-group">                        
                <select class="select2 form-control" name="status" data-minimum-results-for-search="Infinity" required>
                    <option >Select Status</option>
                    <option value="1" @if($q_by_id->status==1) selected='selected' @endif>Published </option>
                    <option value="2"@if($q_by_id->status==2) selected='selected' @endif>Unpublished</option>
                </select>
            </div>
            <button type="submit" class="btn btn-danger btn-lg btn-block blockbtn">Update Question</button>
            {!!Form::close()!!}
        </div>
    </div>
    <script>
		CKEDITOR.replace( 'answer' );
	</script>
@endsection
