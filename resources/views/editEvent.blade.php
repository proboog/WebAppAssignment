<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Management - Edit Event</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        html, body, h1, h2, h3, h4, h5, h6 {
            font-family: "Roboto", sans-serif;
        }

        h1 {
            font-size: 36px;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: #4CAF50;
            color: white;
            margin-bottom: 30px;
        }

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .edit-button {
            background-color: #4CAF50;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .edit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="w3-top">
        <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
            <a class="w3-bar-item w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
            <a class="w3-bar-item w3-theme-l1">
                <img src="/images/image.png" alt="Logo" style="max-width: 100px; height: auto;">
            </a>
            <a href="/" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
            <a href="joinEvent" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Join Event</a>
            <a href="createEvent" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Host Event</a>
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

<!-- Main content -->
<div class="w3-container w3-content" style="max-width: 800px; margin-top: 80px;">
    <h1>Edit Event</h1>

    <table>
        <tr>
            <th>Event ID</th>
            <th>Event Name</th>
            <th>Event Details</th>
            <th>Type Of Event</th>
            <th>Date</th>
            <th>Location</th>
            <th>Organizer</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>
        @foreach($events as $event)
        <tr>
            <td>{{$event->Event_ID}}</td>
            <td>{{$event->Event_name}}</td>
            <td>{{$event->Event_description}}</td>
            <td>{{$event->Type_of_event}}</td>
            <td>{{$event->Date_and_time}}</td>
            <td>{{$event->Address}}, {{$event->City}}, {{$event->State_Province}}, {{$event->Country}}, {{$event->Zip_Postal_Code}}</td>
            <td>{{$event->Organizer_name}}</td>
            <td>{{$event->Contact}}</td>
            <td>
                <a href="{{ route('editEventForm', ['id' => $event->Event_ID]) }}" class="edit-button"><i class="fas fa-edit"></i> Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
