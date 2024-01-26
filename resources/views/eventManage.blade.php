<!-- eventManage.blade.php -->

<!DOCTYPE html>
<html>
<title>Event Management</title>
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

    <div class="w3-container w3-half w3-margin-top">
        <header class="w3-container w3-teal w3-padding-top-32">
            <h1>Delete/Edit Event</h1>
        </header>

        <form action="{{ route('storeEvent')}}" class="w3-container w3-card-4" method="POST">
            @csrf
            <p>
                <label>Select Event:</label>
                <select class="w3-select" name="selectedEvent">
                    <!-- Populate this dropdown with events dynamically from your backend -->
                    <option value="event1">Event 1</option>
                    <option value="event2">Event 2</option>
                    <option value="event3">Event 3</option>
                </select>
            </p>

            <p>
                <label>Action:</label>
                <select class="w3-select" name="action">
                    <option value="delete">Delete</option>
                </select>
            </p>

            <p>
                <button class="w3-button w3-section w3-red w3-ripple" type="submit">  Perform Action </button>
            </p>
        </form>
    </div>
</body>

</html>