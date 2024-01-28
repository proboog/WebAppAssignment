<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .w3-top {
            width: 100%;
            z-index: 1;
        }

        .w3-navbar {
            background-color: #333;
            color: #fff;
            padding: 1px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 0; /* Remove margin bottom */
        }

        .w3-container {
            width: 100%;
            text-align: left;
            margin-top: 0;
        }

        .username-container {
            margin-left: 20px;
        }

        .logout-button {
            background-color: #555;
            color: #fff;
            padding: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #777;
        }

        .message-container {
            margin: 20px auto;
            padding: 10px;
            border: 3px solid #555;
            border-radius: 5px;
            width: 60%;
            box-sizing: border-box;
        }

        .data-label {
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        .data-value {
            margin-bottom: 15px;
            border-top: 1px solid #555;
            padding-top: 10px;
        }
    </style>
</head>

<body>

    <div class="w3-top">
        <div class="w3-navbar w3-theme w3-left-align w3-large">
            <div class="username-container">
                <p>{{ Auth::user()->name }}</p>
            </div>
            <div class="homepage-container">
            <a href="/" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
            </div>
            <button class="logout-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </button>
        </div>

        <header class="w3-container w3-teal">
            <h1>User Profile</h1>
        </header>
    </div>

    

    <div class="message-container">
        <div class="data-label">Username</div>
        <div class="data-value">{{ Auth::user()->name }}</div>

        <div class="data-label">Email</div>
        <div class="data-value">{{ Auth::user()->email }}</div>

        <div class="data-label">Date Joined</div>
        <div class="data-value">{{ Auth::user()->created_at }}</div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</body>
</html>
