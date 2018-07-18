@extends('layout.app')

@section('content')

    <div class="d-flex">
        <div class="container ">
            <a href="/posts" class="btn btn-primary">Go Back</a>
        </div>
        @if(!Auth::guest())
            @if(Auth::user()->id==$post->user_id)
                <div class="container">
                    {!! Form::open(['action'=>['PostsController@destroy',$post->id,'method'=>'POST','class'=>'form-inline']]) !!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete',['class'=>'btn btn-danger float-right'])}}
                    <a href="/posts/{{$post->id}}/edit" class=" btn btn-info float-right mr-2">Edit</a>
                    {!! Form::close() !!}
                </div>
            @endif
        @endif
    </div>
    <br>
    <div class="card ">
        <img src="/storage/cover_images/{{$post->cover_image}}" class="rounded img-fluid card-img-top" alt="">
        <div class="card-header"><h1>{{$post->title}}</h1></div>

        <div class="card-body"><p>{{$post->body}}</p></div>
        <div class="card-footer text-muted">
            <span class="small">Written on </span> {{$post->created_at}} <span class="small"> by </span> {{$post->user->name}}
        </div>
    </div>
    <hr>

    </div>



@endsection