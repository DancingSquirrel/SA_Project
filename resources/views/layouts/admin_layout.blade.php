<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.css" rel="stylesheet">
    <title>Larave Layout</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" bg-white font-sans antialiased">
@include('layouts.subviews.admin_navbar')
    <main class="min-h-screen bg-gray-100">
        
        <div class="flex justify-center h-[150px] w-full bg-stone-600 from-indigo-600 via-indigo-700 to-violet-800 ">
            <div class="flex h-4/5 px-16 items-center border-b-2 md:w-[1300px]">
                <div>
                    <h1 class="font-poppin text-4xl text-white"> ADMIN management</h1>
                </div>
                
            </div>

        </div>

                <div class="flex w-full justify-between">
                @include('layouts.subviews.admin_sidebar')          
                @yield('admin_content')
                
                </div>
    </main>
    
</body>
</html>