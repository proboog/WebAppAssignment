<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: "Roboto", sans-serif;
      background-color: #f8f9fa;
    }

    .header {
      text-align: center;
      padding: 20px;
      background-color: #343a40;
      color: #ffffff;
      position: relative;
    }

    .logout-button {
      position: absolute;
      top: 10px;
      right: 20px;
      background-color: #343a40;
      color: #ffffff;
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none; /* Remove default underline for anchor element */
    }

    .centered-content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh; 
    }

    .content-container {
      width: 100%;
      max-width: 1400px; 
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 20px;
    }

    .sidebar {
      background-color: #f5f5f5;
      border-right: 1px solid #ddd;
    }

    .sidebar-sticky {
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      height: 100vh;
      padding-top: 20px;
    }

    .main-content {
      margin-left: 220px; 
    }
  </style>
</head>
<body>

<div class="header">
  <h1 class="w3-text-teal">Admin Page</h1>
  
  <!-- Logout button with popup -->
  <a href="#" onclick="confirmLogout()" class="logout-button">Logout</a>

  <!-- Logout form -->
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
  </form>

  <!-- JavaScript for the confirmation popup -->
  <script>
    function confirmLogout() {
      if (confirm('Are you sure you want to logout?')) {
        document.getElementById('logout-form').submit();
      }
    }
  </script>
</div>

<div class="centered-content">
  <div class="content-container">
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="/eventManage">
                  Event Manage
                </a>
              </li>
              <!-- Add more menu items as needed -->
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Customer List
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Analytics
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 main-content">
          <p>Welcome to the admin page!</p>
          <!-- Add more content or customize as needed -->
        </main>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
