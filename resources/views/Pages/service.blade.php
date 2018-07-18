@extends('layout.app')
@section('content')

    <h1>{{$title}}</h1>
    <p>Hi, This is a service page.</p>
    <ul class="list-group">
        @if(count($services)>0)
            @foreach($services as $sa)
                <li class="list-group-item">{{$sa}}</li>
            @endforeach
        @endif

    </ul>
    <p>{{$services[1]}}</p>
@endsection