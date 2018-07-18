<nav class="navbar navbar-expand-md navbar-dark bg-dark"><!-- fixed-top">-->
    <a class="navbar-brand" href="#">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarsExampleDefault">
        {{--navbarsExampleDefault--}}
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/services">Services</a>
                {{--disabled--}}
            </li>
            <li class="nav-item active">
                <a class="nav-link " href="/posts">Blog</a>
                {{--disabled--}}
            </li>
            @if(!Auth::guest())
                <li class="nav-item active">
                    <a class="nav-link" href="/posts/create">Create</a>
                </li>
            @endif
            {{--<li class="nav-item dropdown">--}}
            {{--<a class="nav-link dropdown-toggle"  id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>--}}
            {{--<div class="dropdown-menu" aria-labelledby="dropdown01">--}}
            {{--<a class="dropdown-item" href="#">Action</a>--}}
            {{--<a class="dropdown-item" href="#">Another action</a>--}}
            {{--<a class="dropdown-item" href="#">Something else here</a>--}}
            {{--</div>--}}
            {{--</li>--}}

        </ul>


        <form class="form-inline m-2">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>


        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav mt-2 mt-md-0">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">

                    <a id="navbarDropdown" class="btn btn-secondary nav-link dropdown-toggle" href="#"
                       data-toggle="dropdown" id='logoutdropdown' aria-haspopup="true" aria-expanded="false">
                        {{--role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>


                    {{--dropdown-menu-right--}}
                    <div class="dropdown-menu" aria-labelledby="logoutdropdown">
                        <a href="/dashboard" class="dropdown-item mr-4">Dashboard</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: block;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>


{{--<nav class="navbar navbar-inverse ">--}}
{{--navbar-fixed-top">--}}
{{--<div class="container">--}}
{{--<div class="navbar-header">--}}
{{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">--}}
{{--<span class="sr-only">Toggle navigation</span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--</button>--}}
{{--<a class="navbar-brand" href="#">Lartest</a>--}}
{{--</div>--}}
{{--<div id="navbar" class="collapse navbar-collapse">--}}
{{--<ul class="nav navbar-nav">--}}
{{--<li class="active"><a href="/">Home</a></li>--}}
{{--<li><a href="/about">About</a></li>--}}
{{--<li><a href="/services">Services</a></li>--}}
{{--</ul>--}}
{{--</div><!--/.nav-collapse -->--}}
{{--</div>--}}
{{--</nav>--}}