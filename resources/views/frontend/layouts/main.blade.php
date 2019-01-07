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
            
           <!-- Load Facebook SDK for JavaScript -->
            <div id="fb-root"></div>
                <script>
                    (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
                    fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <!-- Your customer chat code -->
                <div class="fb-customerchat"
                attribution=setup_tool
                page_id="438782096583523"
                theme_color="#7646ff"
                logged_in_greeting="สภาคริสตจักรในประเทศไทย ยินดีให้คำปรึกษา"
                logged_out_greeting="สภาคริสตจักรในประเทศไทย ยินดีให้คำปรึกษา">
            </div>
        </body>
</html>