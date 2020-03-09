@extends('Admin.master')
@section('content')
    <header class="content__title">
    <a href="{{route('article.create')}}" class="custom-button">Create Article</a> <a href="{{url('articletrash')}}" class="custom-button">GoTorash</a>
    </header>
    <h3 class="text-center" style="color:green">
            <?php $message = Session::get('message');
                if(isset($message)){
                    echo $message;
                    Session::put('message','');
                }
            ?>
        </h3>
    <div class="card">
        <div class="card-body">
           <div class="table-responsive">
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th width="5%">S.N</th>
                            <th width="15%">Title</th>
                            <th width="20%">Image</th>
                            <th width="30%">Description</th> 
                            <th width="10%">Status</th> 
                            <th width="20%">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($articles as $article)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$article->title}}</td>
                            <td><img src="{{url('/articleimages/'.$article->image)}}" width="150" height="60"></td>
                            <td>{!! str_limit($article->description, $limit = 150, $end = '...') !!}</td> 
                            <td>
                                <?php
                                if($article->status == 1){
                                echo "<span style='background: #119411;padding: 3px 14px;border-radius: 3px;color:#dcdc1ce0;'>Publish</span>";
                                } else{
                                echo "<span style='background: #94111c;
                                padding: 3px 10px;
                                border-radius: 3px;color:#dcdc1ce0;'>Unpublish</span>";
                                }
                                ?>
                                </td>
                            <td>
                                <a href="{{route('article.edit',$article->id)}}"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <form id="softdelete-form-{{ $article->id }}" method="post" action="{{ url('softdelarticle',$article->id) }}" style="display: none">
                                        {{ csrf_field() }}
                                        
                                    </form>
                                <a href="" onclick="
                                    if(confirm('Are you sure, You Want to send it into trash?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('softdelete-form-{{$article->id}}').submit();
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
@endsection