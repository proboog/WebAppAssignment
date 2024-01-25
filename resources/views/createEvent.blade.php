<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<script src="{{ mix('js/app.js') }}" defer></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
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
    <div class="w3-top">
        <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-theme-l1">Logo</a>
            <a href="/" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
            <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sign up</a>
            @endif

            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
        </div>
    </div>

    <header class="w3-container w3-teal w3-padding-top-32">
        <h1>Create Event</h1>
    </header>

    <div class="w3-container w3-half w3-margin-top">

        <form action="{{ route('storeEvent')}}" class="w3-container w3-card-4" method="POST">
            @csrf
            <p>
                <input class="w3-input" type="text" name="Event_name" style="width:90%" required>
                <label>Event name</label>
            </p>
            <p>
                <textarea class="w3-input" name="Event_description" rows="4" cols="50" style="width:90%" required>
                </textarea>
                <label>Event description</label>
            </p>

            <p>
                <select class="w3-select" name="Type_of_event">
                    <option value="corporate">Corporate</option>
                    <option value="social">Social</option>
                    <option value="recreation">Recreation</option>
                </select>
                <label>Type of event</label>
            </p>

            <p>
                <input class="w3-input" type="datetime-local" name="Date_and_time">
                <label>Date and Time</label>
            </p>

            <p>
                <input class="w3-input" type="text" name="Venue">
                <label>Venue</label>
            </p>

            <p>
                <input class="w3-input" type="text" name="Organizer_name">
                <label>Organiser name</label>
            </p>
                <input class="w3-input" type="text" name="Contact">
                <label>Contact number</label>
            <p>

            </p>

            <p>
                <button class="w3-button w3-section w3-teal w3-ripple" type="submit">  Create event </button>
            </p>
        </form>

    </div>

</body>

</html>