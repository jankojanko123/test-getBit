@extends('layout.app')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            getBlocked
        </div>

        <div class="container">
            <h1>Get Blockchain Block</h1>
            {!! Form::open(['action' => 'IdsController@store', 'method' => 'GET', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('hash', 'Insert hash id here')}}
                {{Form::text('hash', '', ['class' => 'from-control', 'placeholder' => 'hash id'])}}
            </div>

            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
</div>

    @endsection
