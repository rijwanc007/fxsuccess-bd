@extends('Admin.master')
@section('content')
    <header class="content__title">
    <a href="{{route('article.index')}}" class="custom-button"> Article List</a> 
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
                            <th width="10%">Status</th> 
                            <th width="20%">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($trash_article as $article)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$article->title}}</td>
                            <td><img src="{{url('/articleimages/'.$article->image)}}" width="150" height="60"></td> 
                            <td>
                                    <form id="restore-form-{{ $article->id }}" method="post" action="{{ url('restorearticle',$article->id) }}" style="display: none">
                                            {{ csrf_field() }}
                                            
                                        </form>
                                    <a href="" onclick="
                                        if(confirm('Are you sure, You Want to restore article?'))
                                        {
                                        event.preventDefault();
                                        document.getElementById('restore-form-{{$article->id}}').submit();
                                        }
                                        else{
                                        event.preventDefault();
                                        }" class="btn  btn-primary ">Restore
                                    </a>
                             </td>
                            <td>
                                <a href="{{route('article.edit',$article->id)}}"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <form id="delete-form-{{ $article->id }}" method="post" action="{{ route('article.destroy',$article->id) }}" style="display: none">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        
                                    </form>
                                <a href="" onclick="
                                    if(confirm('Are you sure, You Want to Delete it parmanently?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$article->id}}').submit();
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