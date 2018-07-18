@extends('layout.app')


@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)

            @if($post->cover_image=="noimage.jpg")
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">
                            {{$post->title}}
                        </h3>
                    </div>
                    <div class="card-body px-2">


                        <a href="/posts/{{$post->id}}" class="card-link btn btn-primary">
                            View
                        </a> <br><br>
                        <div class="card-footer text-muted">
                            <small>Written on {{$post->created_at}}
                                by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>

            @else

                <div class="card flex-row flex-wrap">
                    <div class="card-header border-0">
                        <img src="/storage/cover_images/{{$post->cover_image}}" class="rounded img-fluid" alt="">
                    </div>
                    <div class="card-body px-2">

                        <h3 class="card-title">
                            {{$post->title}}
                        </h3>
                        <a href="/posts/{{$post->id}}" class="card-link btn btn-primary">
                            View
                        </a> <br><br>
                        <div class="card-footer text-muted">
                            <span class="small">Written on {{$post->created_at}}
                                by {{$post->user->name}}</span>
                        </div>
                    </div>
                </div>
            @endif

            <br>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
