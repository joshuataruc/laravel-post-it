<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{asset('image/laravel.png')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST IT</title>
</head>

<body class="bg-gray-200  ">
    <nav class="p-6 bg-white flex justify-between mb-4">
        <ul class="flex items-center">
            <li><a href="{{route('home')}}" class="p-3">Home</a></li>
            <li><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></li>
            <li><a href="{{route('posts')}}" class="p-3">Posts</a></li>
        </ul>
        <ul class="flex items-center">
            @auth
                <li><a href="" class="p-3">{{ucfirst(auth()->user()->name)}}</a></li>
                <li>
                    <form action="{{route('logout')}}" method="post" class="inline p-3">
                        @csrf
                        <button>Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li><a href="{{route('login')}}" class="p-3">Login</a></li>
                <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>

</html>
