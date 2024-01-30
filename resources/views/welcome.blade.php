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
            @if(auth()->check())
            
            @else 
            <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Log in</a>
            <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sign up</a>
            @endif
            @if(auth()->check())
            <a href="home"class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right">{{ Auth::user()->name }}</a>
            @else 
            @endif
            

            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
           
           

        </div>
    </div>

    <title>About Us</title>

    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif;
        }

        .w3-sidebar {
            z-index: 3;
            width: 250px;
            top: 43px;
            bottom: 0;
            height: inherit;
        }

    </style>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
    <div class="w3-main">

        <div class="w3-row w3-padding-64">
            <div class="w3-twothird w3-container">
                <h1 class="w3-text-teal">Company description</h1>
                <p>Welcome to The Events - Crafting Unforgettable Moments

                    At The , we believe that every event is a unique story waiting to unfold. We are your dedicated partners in turning ordinary gatherings into extraordinary experiences. With a passion for creativity and a commitment to excellence, we specialize in curating and executing events that leave a lasting impression.

                    Our Approach:

                    Creativity Unleashed: Our team of seasoned event planners thrives on creativity. From conceptualization to execution, we infuse each event with innovative ideas, ensuring a one-of-a-kind experience for you and your guests.

                    Attention to Detail: It's the little details that make a big difference. We meticulously plan every aspect of your event, leaving no stone unturned. Our keen attention to detail ensures a seamless and stress-free experience for our clients.

                    Tailored to You: We understand that each client is unique, and so should be their events. Whether it's a corporate gathering, a wedding celebration, or a social soirée, we tailor our services to match your vision, style, and preferences.

                    Our Services:

                    Event Planning: Let us handle the logistics while you enjoy the moment. Our comprehensive event planning services cover everything from venue selection and décor to entertainment and catering.

                    Wedding Coordination: Your wedding day should be perfect, and we are here to make it happen. Our wedding coordination services ensure that every detail of your special day is flawlessly executed.

                    Corporate Events: Impress clients, motivate teams, and celebrate success with our corporate event planning. From conferences to product launches, we've got your business events covered.

                    Social Gatherings: Whether it's a milestone birthday, an anniversary, or a themed party, we bring creativity and expertise to every social gathering, making it memorable for all.

                    Why Choose The Events:

                    Experience: With years of experience in the industry, we have honed our skills to deliver events that exceed expectations.

                    Professionalism: Our team is committed to professionalism at every stage. Expect prompt communication, transparent processes, and reliable execution.

                    Passion: We love what we do, and it shows in the events we create. Our passion for event planning is the driving force behind our success.

                    Make your next event extraordinary with The Events. Let's create memories together!</p>
                    <a class="w3-bar-item w3-button w3-hover-black" href="{{ Auth::check() ? route('joinEvent') : route('login') }}">Join event</a>

                    <a class="w3-bar-item w3-button w3-hover-black" href="{{ Auth::check() ? route('createEvent') : route('login') }}">Host event</a>
            </div>
            <div class="w3-third w3-container">
                <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src='images\birthday1.jpg' style="width:100%"></p>
                <p class="w3-border w3-padding-large w3-padding-64 w3-center"><img src='images\birthday4.jpg' style="width:100%"></p>
            </div>
        </div>

            <!-- <div class="w3-container w3-theme-l1">
                <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
            </div>
            </footer> -->

            <!-- END MAIN -->
    </div>

</body>

</html>