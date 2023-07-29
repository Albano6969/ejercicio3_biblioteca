<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    --}} @vite('resources/css/app.css')
<title class="te">@yield('title')</title>
</head>
<body class="bg-gray-200 h-screen">
    <div class="-m-1">
        @include('nav')
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
    
</body>
</html>