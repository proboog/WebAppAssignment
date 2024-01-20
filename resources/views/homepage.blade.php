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
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1">Logo</a>
    <a href="home" class="w3-bar-item w3-button w3-theme-l1">About</a>
    <a href="login" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Log in</a>
    <a href="register" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Sign up</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
  </div>
</div>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Company description</h1>
      <p>Step into the world of The Partey, your premier destination for crafting extraordinary and bespoke birthday celebrations. 
        At The Partey, we believe that each birthday is a unique chapter in 
        one's life, deserving of a celebration that reflects individuality, joy, and the magic of the moment.
        Our passionate team of event specialists is dedicated to curating immersive and enchanting experiences tailored to your specific preferences. Whether you're dreaming of a whimsical fairy-tale celebration, a stylish and sophisticated soirée, 
        or a fun-filled themed extravaganza, we have the expertise to turn your vision into a reality.
        From the initial conceptualization to the final execution, we meticulously plan and design every element of your birthday party. Our extensive range of services includes thematic decorations, custom-designed invitations, delectable catering, and entertainment that captivates every guest.
        Imagine a celebration where every detail, from the color palette to the smallest decorative element, reflects the personality and passions of the birthday honoree. We strive to create an atmosphere that not only meets but exceeds your expectations, leaving you and your guests with lasting memories.
        In addition to our commitment to creativity and aesthetics, The Partey also prides itself on professionalism and reliability. Our experienced team works seamlessly behind the scenes to ensure that your event runs smoothly, allowing you to savor every moment of your special day.
        Choose The Partey for your next birthday celebration and embark on a journey where each event is uniquely crafted to celebrate life's milestones. Let us transform your dreams into an unforgettable reality, making your birthday an occasion that will be cherished for years to come.</p>
      <a class="w3-bar-item w3-button w3-hover-black" href="#">Book Now</a>
      <a class="w3-bar-item w3-button w3-hover-black" href="#">Room Type</a>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center"><img src='images\birthday1.jpg' style="width:100%"></p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center"><img src='images\birthday4.jpg' style="width:100%"></p>
    </div>
  </div>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <!-- <h4>Footer</h4> -->
      <a href="#">About</a>
      <a href="#">Contact</a>
    </div>

    <!-- <div class="w3-container w3-theme-l1">
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  </footer> -->

<!-- END MAIN -->
</div>

</body>
</html>