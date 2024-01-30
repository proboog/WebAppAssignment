<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 110px; /* Add margin top to accommodate the alert */

        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }

        .button-container {
            text-align: center; /* Center align the button */
            margin-top: 20px; /* Add margin top to separate from event info */
        }

        .join-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .join-button:hover {
            background-color: #0056b3;
        }

        .alert {
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
        }

        .alert-container {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            padding: 10px;
            text-align: center;
            z-index: 1000; /* Ensure the alerts are on top of other content */
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
    @endif
    <div class="container">
        <h1>Event Information</h1>
        <p>Hi,this is the event details:</p>
        <p>Event Details: {{ $events->Event_description }}</p>
        <p>Event Details: {{ $events->Event_description }}</p>
        <p>Event Type: {{ $events->Type_of_event }}</p>
        <p>Event Date & Time: {{ $events->Date_and_time}}</p>
        <p>Event Address: {{$events->City}}, {{$events->State_Province}}, {{$events->Country}}, {{$events->Zip_Postal_Code}}</p>
        <p>Host Contact: {{ $events->Contact}}</p>
        
        <div class="button-container">
            <form method="POST" action="{{ route('saveUsers2Events') }}">
                @csrf <!-- Add CSRF token for form submission -->
                <input type="hidden" name="eventId" value="{{ $events->Event_ID }}">
                <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                <button class="join-button" type="submit">{{ __('Join Event') }}</button>
            </form>
        </div>
    </div>

</body>
</html>
