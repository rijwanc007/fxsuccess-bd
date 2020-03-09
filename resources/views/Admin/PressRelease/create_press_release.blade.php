@extends('Admin.master')
@section('content')
    <header class="content__title">
        <a href="{{route('Press_Release.index')}}" class="custom-button">Show Release List</a>
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
            {!! Form::open(['route'=>'Press_Release.store','method'=>'POST']) !!}
                <h4 class="text-secondary text-center">Source</h4>
                {!! Form::label('source_tag','Tag :')!!}
                {!! Form::text('source_tag',null,['class'=>'form-control','placeholder'=>'Put Source Tag']) !!}
                <br>
                {!! Form::label('source_link','Link :') !!}
                {!! Form::text('source_link',null,['class'=>'form-control','placeholder'=>'Put Source Link']) !!}
                <br>
                <h4 class="text-secondary text-center">Detail Information</h4>
                {!! Form::label('detail_tag','Tag :') !!}
                {!! Form::text('detail_tag',null,['class'=>'form-control','placeholder'=>'Put Detail Tag']) !!}
                <br>
                {!! Form::label('detail_link','Link :') !!}
                {!! Form::text('detail_link',null,['class'=>'form-control','placeholder'=>'Put Detail Link']) !!}
                <br>
                {!! Form::submit('Add Press Release',['class'=>'btn btn-danger btn-lg btn-block blockbtn']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
