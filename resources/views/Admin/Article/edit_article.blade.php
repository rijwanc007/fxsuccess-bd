@extends('Admin.master')
@section('content')
<header class="content__title">
        <a href="{{route('article.index')}}" class="custom-button">Show Article</a>
    </header>
    <div class="card">
        <div class="card-body">
        {!!Form::open(['route' =>['article.update',$article_by_id->id],'method' => 'post','enctype'=>'multipart/form-data'])!!}
        {{method_field('PUT')}}  
        <div class="form-group">
                <input type="text" class="form-control" name="title" value="{{$article_by_id->title}}" >
                <i class="form-group__bar"></i>
            </div>
            <div class="form-group">
                    <input type="text" class="form-control" name="postedby" value="{{$article_by_id->postedby}}">
                    <i class="form-group__bar"></i>
            </div>
             <div class="form-group">
                    <img src="{{url('/articleimages/'.$article_by_id->image)}}" width="250" height="60">
                    <input type="file" class="form-control" name="image">
             </div>
            <div class="form-group">
            <textarea class="form-control my-articleeditor" name="description" >{{$article_by_id->description}}</textarea>
            </div>
            <div class="form-group">                        
                <select class="select2 form-control" name="status" data-minimum-results-for-search="Infinity" required>
                    <option >Select Status</option>
                    <option value="1"@if($article_by_id->status == 1) selected= 'selected'@endif>Publish </option>
                    <option value="2"@if($article_by_id->status == 2) selected= 'selected'@endif>Unpublish</option>
                </select>
            </div>
            <button type="submit" class="btn btn-danger btn-lg btn-block blockbtn">Update Article</button>
            {!!Form::close()!!}
        </div>
    </div>
   
		<script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-articleeditor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
    
                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }
    
                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };
    
        tinymce.init(editor_config);
    </script>
	
@endsection
