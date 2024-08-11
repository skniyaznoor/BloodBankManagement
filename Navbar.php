<?php 
  session_start(); 
  $userRole = isset($_SESSION['username']) ? $_SESSION['username'] : '';
  $isAdmin = $userRole === 'skniyaznoor';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBMS</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
</head>
<body class="bg-black">
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a href="HomePage.php">
      <img
        src="./Elements/Images/Screenshot_2023-12-23_103946-removebg-preview.png"
        alt="logo"
        height="30"
      />
    </a>
    <a id="greeting" class="navbar-brand" href="HomePage.php">
        Blood Bank Management System
    </a>
    <button 
      class="navbar-toggler" 
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navbarid" 
      aria-controls="navbarid" 
      aria-expanded="false" 
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarid">
      <ul class="navbar-nav">
      <?php if ($isAdmin || isset($_SESSION['username'])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="RegisterPage.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="BloodProcess.php">Blood</a>
        </li>
        <?php } ?>
        <?php if ($isAdmin) { ?>
        <li class="nav-item">
          <a class="nav-link" href="Display.php">Display</a>
        </li>
        <?php } ?>
      </ul>
    </div>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
     
      <?php if (isset($_SESSION['username'])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="Profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <label class="nav-link">
            Welcome <?php echo $_SESSION['username']; ?>
          </label>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Logout.php">Log Out</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link text-light" href="Login.php">Log In</a>
        </li>
        <?php } ?>
        
      </ul>
    </div>
  </div>
</nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</html>
<?php
echo '<script>
    function updateGreeting() {
        var greeting = window.innerWidth >= 1024 ? "Blood Bank Management System" : "BBMS";
        document.getElementById("greeting").innerText = greeting;
    }

    window.addEventListener("resize", updateGreeting);

    updateGreeting();
</script>';
?>