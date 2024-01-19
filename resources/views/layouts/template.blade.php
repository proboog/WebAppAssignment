<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <body>
            <div class="w3-top">
                <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
                    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
                    <a href="#" class="w3-bar-item w3-button w3-theme-l1">Logo</a>
                    <a href="home" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
                    <a href="login" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Log in</a>
                    <a href="register" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sign up</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
                </div>
            </div>

            @yield('body')

        </body>
    </html> 