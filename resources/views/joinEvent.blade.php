<!DOCTYPE html>
<html lang="en">
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}

h1{
    margin-left:710px;

}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 3px;
  padding-right: 50px;
  border-width:8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

join-button {
  cursor: pointer;
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
        <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-theme-l1">Logo</a>
            <a href="/" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
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

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
s
<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main">

  <div class="w3-row w3-padding-64" >
    <div class="w3-twothird w3-container" >
      <h1 class="w3-text-teal " style = "border-style:groove;border-width:5px;border-radius:50px;text-align:center;">Join Event</h1>
      <p style="font-size:25px;" >On this page,you will be able to see all the available events you would like to join.<br>Click on the corresponding button if you are 
      interested in join any of these events!  </p>
    </div>
    <div class="w3-third w3-container">
    </div>
  </div>
  <table>
    <tr>
      <th>Event Name</th>
      <th>Event Details</th>
      <th>Date</th>
      <th>Organizer</th>
      <th></th>
    </tr>
    @foreach($events as $events)
    <form method="GET" action="{{ route('joinEventInfo') }}">
      <tr>
        <td>{{$events['Event_name']}}</td>
        <td>{{$events['Event_description']}}</td>
        <td>{{$events['Date_and_time']}}</td>
        <td>{{$events['Organizer_name']}}</td>
        <td>
          <input type="hidden" name="eventId" value="{{ $events->Event_ID }}">
          <button class = "join-button" type = "submit" name="join">{{ __('Join Event') }} </button>
        </td>
      </tr>
    </form>
    
    @endforeach
  </table>

<!-- END MAIN -->
</div>




<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
