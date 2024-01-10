<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Custom Auth</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

        <div class="min-h-screen flex items-center justify-center">
            {{ $slot }}
        </div>


    {{-- <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="{{ route('home') }}" class="p-3">Home</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
            <li><a href="" class="p-3">{{ auth()->user()->name }}</a></li>
            <form action="{{ route('logout') }}" method="POST" class="p-2 inline">
                @csrf
                <button type="submit">Logout</button>
            </form>
            @endauth

            @guest
            <li><a href="{{ route('login') }}" class="p-3">Login</a></li>
            <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
            @endguest
            
        </ul>
    </nav> --}}

    {{-- <div class="container mx-auto mt-6 px-6">
        @yield('content')
    </div> --}}
    
</body>
</html>