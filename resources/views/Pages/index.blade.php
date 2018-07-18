@extends('layout.app')

@section('content')
    @if(Auth::guest())
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome To Blog</h1>
            <p>This is the laravel application </p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>&nbsp;<a
                        class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        </div>
    @else
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome Back </h1>
            <p>Create your Post now </p>
            <p><a href="/posts/create" class="btn btn-primary">Create</a>
                <a href="/dashboard" class="btn btn-secondary">Dashboard</a></p>
        </div>
    @endif
@endsection