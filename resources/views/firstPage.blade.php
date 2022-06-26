<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="top-bar d-flex justify-content-center">
    <div class="mt-2 mr-auto">
        <a>LOGO</a>
    </div>
    <div class="mt-2">
        <div class="mt-2">
            <a>Home</a>
            <a>Services</a>
            <a>Rent</a>
            <a>Location</a>
        </div>
    </div>
    <div class="mt-2 ml-auto">
        <a>Login</a>
        <a>Register</a>
    </div>


</div>

{{--@if (Route::has('login'))--}}
{{--    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--        @auth--}}
{{--            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>--}}
{{--        @else--}}
{{--            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>--}}
{{--            @if (Route::has('register'))--}}
{{--                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
{{--            @endif--}}
{{--        @endauth--}}
{{--    </div>--}}
{{--@endif--}}

</body>
</html>
