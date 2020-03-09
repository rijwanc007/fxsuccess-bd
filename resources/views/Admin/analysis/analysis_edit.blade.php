@extends('Admin.master')
@section('content')
    <header class="content__title">
        <a href="{{url('/Admin/analysis')}}" class="custom-button">Show Analysis</a>
    </header>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' =>['analysis.update',$analysis_data->id],'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
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
                <textarea name="description" class="form-control my-editor">{!! $analysis_data->description !!}</textarea>
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
@endsection
<script>
    var editor_config = {
        path_absolute : "/",
        selector: "textarea.my-editor",
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
