@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h3> Your Blog Posts </h3>
                        <hr>
                        <a class="btn btn-primary float-right" href="/posts/create">Create Posts</a><br><br><br>
                        @if(count($posts)>0)
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Updated at</th>
                                    <th scope="col">Editable</th>
                                    <th scope="col">Deletable</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($posts as $post)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$post->title}}</td>
                                        <td>
                                            {{$post->created_at}}
                                        </td>
                                        <td>
                                            {{$post->updated_at}}
                                        </td>
                                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edite</a></td>
                                        <td>
                                            {!! Form::open(['action'=>['PostsController@destroy',$post->id,'method'=>'POST','class'=>'']]) !!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                            {!! Form::close() !!}
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        @else
                         <p> You have no posts</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
