<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layout.style')
</head>
<body class="gradient-bg">
        @include('layout.header')
        
        @yield('content')
        
        
    <hr class="mt-5 text-secondary" />

         @include('layout.footer')
    
  </body>
</html>
 