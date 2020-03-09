@extends('Admin.master')
@section('content')
<header class="content__title">
        <a href="{{route('question.index')}}" class="custom-button">Show question</a>
    </header>
    <div class="card">
        <div class="card-body">
        {!!Form::open(['route' => 'question.store','method' => 'post'])!!}
            <div class="form-group">
                <input type="text" class="form-control" name="question" placeholder="Question " required>
                <i class="form-group__bar"></i>
            </div>
            
            <div class="form-group">
               <textarea class="form-control" name="answer" required></textarea>
            </div>
            <div class="form-group">                        
                <select class="select2 form-control" name="status" data-minimum-results-for-search="Infinity" required>
                    <option >Select Status</option>
                    <option value="1">Published </option>
                    <option value="2">Unpublished</option>
                </select>
            </div>
            <button type="submit" class="btn btn-danger btn-lg btn-block blockbtn">Save Question</button>
            {!!Form::close()!!}
        </div>
    </div>
    <script>
		CKEDITOR.replace( 'answer' );
	</script>
@endsection
