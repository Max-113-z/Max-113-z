<html> 
    <head> 
        <meta charset="utf-8"> 
        <title>@yield('title')</title>
        <script src="{{asset('assets/js/jquery-2.2.4.min.js')}}"defer></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}" defer></script>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fonts/icons-1.11.3/font/bootstrap-icons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/istyle.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/fonts/icomoon/style.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/style (1).css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/all (1).css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/bostyle.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/bomedia.css')}}">  
    </head> 
    <body>
    @include("layout.header") 
    </body>
    <main>
    </main>
    <div class="container"> 
            @yield('content') 
    </div> 
    @include("layout.footer") 
</html> 
