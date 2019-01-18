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
           <div class="fb-customerchat" page_id="438782096583523"></div>

            <script>
            window.fbAsyncInit = function() {
                FB.init({
                appId            : '438782096583523',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v3.2'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
        </body>
</html>