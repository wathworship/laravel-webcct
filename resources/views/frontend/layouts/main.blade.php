<!DOCTYPE html>
    <html lang="en">
        <head>
            @include('frontend.partials._head')
        </head>
        <body>
            @include('frontend.partials._nav')

            @yield('content')
            
            @include('frontend.partials._footer')
            @include('frontend.partials._script')
        </body>
</html>