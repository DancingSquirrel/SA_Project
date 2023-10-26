<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Larave Layout</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" bg-white font-sans antialiased">
    @if(Auth::check())
    @include('layouts.subviews.admin_navbar')
    @else
    @include('layouts.subviews.navbar')
    @endif

    <main class="min-h-screen bg-gray-100 animate-fade-down">
        @yield('content')
    </main>
    @include('layouts.subviews.footer')
</body>
</html>