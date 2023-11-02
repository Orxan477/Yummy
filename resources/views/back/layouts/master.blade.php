<!DOCTYPE html>
<html lang="en">
<head>
    @include('back.layouts.head')    
    @yield('css')
</head>
<body>
    <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
        @include('/back.layouts.sidebar')
    <!--  Sidebar End -->
        <!--  Main wrapper -->
            <div class="body-wrapper">
        <!--  Header Start -->
        @include('back.layouts.header')
         <!--  Header End -->
            @yield('content')  
            @include('back.layouts.footer')
            @include('back.layouts.script')
            @yield('js')
</body>
</html>