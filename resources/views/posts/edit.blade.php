@extends('layout.app')
@section('content')
    <div>
        <h1>Edit Post</h1>
        {!! Form::open(['action'=>['PostsController@update',$post->id],'method'=>'POST']) !!}

        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        <button type="reset" class="btn btn-secondary">Reset</button>
        {{Form::hidden('_method','PUT')}}
        {!! Form::close() !!}
    </div>
@endsection
