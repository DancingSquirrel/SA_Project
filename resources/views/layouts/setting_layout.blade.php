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
<body class=" bg-white">
    <main>
        @include('layouts.subviews.admin_navbar')
        <div class="flex justify-center h-[150px] w-full bg-blue-900 from-indigo-600 via-indigo-700 to-violet-800 ">
            <div class="flex h-4/5 px-16 items-center border-b-2 md:w-[1300px]">
                <div>
                    <h1 class="font-poppin text-4xl text-white"> Setting Account</h1>
                </div>
                
            </div>

        </div>

                <div class="flex w-full justify-between">
                @include('layouts.subviews.setting_sidebar')          
                @yield('setting_content')
                
                </div>
    </main>
</body>
</html>