<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])

     <!-- Styles -->
     @livewireStyles

<title class="te">@yield('title')</title>
</head>
<body class="bg-gray-200 h-screen">
    <div class="-m-1">
        @include('navigation-menu')
    </div>
    
    <div class=" h-full flex flex-col  my-5 mt-4">
            <h1 class="text-center py-3 bg-white">@yield('titlebody')</h1>
        <div class="flex-grow ">
            @yield('content')
        </div>
        
        <div class=" bottom-0 ">
            <footer >
                <div class=" bg-gray-800 p-6 text-white text-center pl-3 ">
                    Derechos de autor © 2023 Copyright Albano Villar Alijarte:
                    <a class="text-white my-4 pl-2" href="mailto:albanovillar@me.com">albanovillar@me.com</a>
                  </div>
                
              </footer>
        </div>
        
    </div>
    @livewireScripts
</body>
</html>