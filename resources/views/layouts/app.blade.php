<!DOCTYPE html>
<html lang="lt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
  <title>Laravel project - @yield('title')</title>
</head>
<body>
<div>
    <div class="m-10">
        @guest
                <a class="btn btn-link" href="{{route('login')}}">{{__('Login')}}</a>
        @else
                <a class="btn btn-link" href="{{route('logout')}}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('Logout')}}
                    ({{auth()->user()->name}})</a>
                <form action="{{route('logout')}}" method="post" id="logout-form" style="display: none">
                    @csrf
                </form>
        @endguest
        <a class="btn btn-link" href="{{route('home.index')}}">{{__('Conferences')}}</a>
        <a class="btn" href="{{redirect('/greeting/en')}}">En</a>
        <a class="btn" href="{{redirect('greeting/lt')}}">Lt</a>
    </div>
    <div style="
    position: relative;
    top: 35px;
    ">
        @yield('content')
    </div>

</div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>
