@extends('Admin.master')
@section('content')
    <header class="content__title">
    <a href="{{route('question.create')}}" class="custom-button">Create Question</a>
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
                            <th width="10%">S.N</th>
                            <th width="20%">Question</th>
                            <th width="40%">Answer</th> 
                            <th width="10%">Status</th> 
                            <th width="20%">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($questions as $question)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$question->question}}</td>
                            <td>{!! str_limit($question->answer, $limit = 200, $end = '...') !!}</td> 
                            <td>
                                <?php
                                if($question->status == 1){
                                echo "<span style='background: #119411;color:#dcdc1ce0;padding: 3px 14px;border-radius: 3px;'>Published</span>";
                                } else{
                                echo "<span style='background: #94111c;color:#dcdc1ce0;
                                padding: 3px 10px;
                                border-radius: 3px;'>Unpublished</span>";
                                }
                                ?>
                                </td>
                            <td>
                                <a href="{{route('question.edit',$question->id)}}"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                <form id="delete-form-{{ $question->id }}" method="post" action="{{ route('question.destroy',$question->id) }}" style="display: none">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                <a href="" onclick="
                                    if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$question->id}}').submit();
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