<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.layouts.head')    
    @yield('css')
</head>
<body>
@include('front.layouts.header')
@yield('content')  
@include('front.layouts.footer')
@include('front.layouts.script')
@yield('js')
</body>
</html>