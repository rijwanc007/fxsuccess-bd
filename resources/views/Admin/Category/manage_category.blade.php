@extends('Admin.master')
@section('content')
     <header class="content__title">
        <a href=""data-toggle="modal" data-target="#modal-default" class="custom-button">AddCategory</a>
    </header>

    <h3 class="text-center" style="color:green">
        <?php $message = Session::get('message');
            if(isset($message)){
                echo $message;
                Session::put('message','');
            }
        ?>
    </h3>
    
    <div class="card" id="allcategory">
        <div class="card-body">
           <div class="table-responsive" >
                <table id="data-table" class="table">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Category Name</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allCategories as $category)
                       <tr>
                       <td>{{$loop->index + 1}}</td>
                            <td>{{$category->title}}</td>
                            <td>
                                <?php
                                if($category->status == 1){
                                echo "<span style='background: #119411;color:#dcdc1ce0;padding: 3px 14px;border-radius: 3px;'>Active</span>";
                                } else{
                                echo "<span style='background: #94111c;
                                padding: 3px 10px;color:#dcdc1ce0;
                                border-radius: 3px;'>Deactive</span>";
                                }
                                ?>
                               
                            </td>
                             <td>{{$category->created_at}}</td>
                            <td>
                            <a href="" id="{{$category->id}}" class="btn btn-primary edit"  data-toggle="modal" data-target="#edit-modal-default"><i class="fa fa-edit"></i></a>
                            <form id="delete-form-{{ $category->id }}" method="post" action="{{route('category.destroy',$category->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                            <a href="" onclick="
                                    if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{$category->id }}').submit();
                                    }
                                    else{
                                    event.preventDefault();
                                    }" class="btn  btn-danger "><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-default" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title pull-left">Create Category</h5>
                </div>
                <div class="modal-body">
                       {!!Form::open(['route' => 'category.store','method' => 'post'])!!}
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" name ="title" placeholder="Category Title" required>
                        <i class="form-group__bar"></i>
                    </div>
                    
                    <div class="form-group">
                        <select class="form-control" name="status" required>
                        <option style="color:black">Select Status</option>
                            <option style="color:black" value="1">Active</option>
                            <option style="color:black" value="2">Deactive</option>
                       </select>
                   </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link">Save changes</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit-modal-default" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title pull-left">Edit Category</h5>
                    </div>
                    <div class="modal-body">
                           {!!Form::open(['url'=>'category/update','method' => 'post', 'id'=>'category_update'])!!}
                           {{method_field('PUT')}}
                           <div class="form-group">
                         <input type="text" class="form-control form-control-sm" id="title" name ="title" value="">
                            <i class="form-group__bar"></i>
                            <input type="hidden" class="form-control form-control-sm" id="id" name ="id" value="">
                            <i class="form-group__bar"></i>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="status" id="status">
                            <option style="color:black">Select Status</option>
                                <option style="color:black" value="1">Active</option>
                                <option style="color:black" value="2">Deactive</option>
                           </select>
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link">Update</button>
                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>

        <script>
            $(document).on('click','.edit',function(){
                var catid = $(this).attr('id');
                $.get('/catbyid/'+ catid, function(data){
                    $('#category_update').find('#title').val(data.title);
                    $('#category_update').find('#id').val(data.id);
                    $('#category_update').find('#status').val(data.status);
                });
            });
            $('#category_update').on('submit',function(e){
                e.preventDefault();
                var data = $(this).serialize();
                var url = $(this).attr('action');
                $.post(url,data,function(data){
                    $('#category_update').trigger('reset');
                    //$('#allcategory').load(location.href + ' #allcategory');
                    window.location = "/category/";
                    //console.log(data);
                });

            });
        
        </script>
        <script>
            $('#data-table').dataTable( {
                    paging: false,
                    searching: false
                } );
            </script>
@endsection