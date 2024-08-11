<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Bank Management System</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <style>
      #rotatableImage {
        transition: transform 0.5s ease;
      }
    </style>
  </head>
  <body>
  <?php
    include_once "Navbar.php";
    ?>
    <div class="d-flex justify-content-center m-5">
        <div class="card bg-black">
        <img src="./Elements/Images/—Pngtree—international red day red blood_546138.png" id="rotatableImage" class="card-img" alt="..." height="650">
        <div class="card-img-overlay">
            <div class="p-5">
                <h5 class="card-title text-center m-5 text-light">Sign In</h5>
            </div>
            <br>
            <div class="p-5 pb-3">
                <h5 class="text-light" id="username">Username or Email</h5>
                <input type="email" class="form-control" id="usernameField" placeholder="name@example.com">
            </div>
            <div class="p-5 pt-0 pb-0">
                <h5 class="text-light" id="password">Password</h5>
                <input type="text" class="form-control" id="passwordField" placeholder="***************">
                <div class="text-center m-2">
                    <button class="btn text-light btn-success" id="loginButton">
                        <b>Log in</b>
                    </button>
                </div>
                <p class="text-light text-center" id="orText">-----or------<br>Don't have an account?</p>
            </div>
            <div>
                <h5 class="text-center text-light">
                    <button id="rotateButton" onclick="rotateImage()" class="btn text-light">
                        <b>
                            <span id="logInButton">Sign Up</span>
                        </b>
                    </button>
                </h5>
            </div>
        </div>
        </div>
    </div>
    <script>
      let currentRotation = 0;

      function rotateImage() {
        currentRotation += 180;
        document.getElementById(
          "rotatableImage"
        ).style.transform = `rotate(${currentRotation}deg)`;

        // Change text from "Sign In" to "Sign Up"
    const signInText = document.querySelector(".card-title");
    signInText.textContent = currentRotation % 360 === 180 ? "Sign Up" : "Sign In";


    // Change text from "Sign Up" to "Log In"
    const signUpButton = document.getElementById("logInButton");
    signUpButton.textContent = currentRotation % 360 === 180 ? "Log In" : "Sign Up";

          // Hide text fields after rotation
    if (currentRotation % 360 === 180) {
      document.getElementById("usernameField").style.display = "none";
      document.getElementById("passwordField").style.display = "none";
      document.getElementById("loginButton").style.display = "none";
      document.getElementById("orText").style.display = "none";
      document.getElementById("username").style.display = "none";
      document.getElementById("password").style.display = "none";

    } else {
      // Show text fields before rotation
      document.getElementById("usernameField").style.display = "block";
      document.getElementById("passwordField").style.display = "block";
      document.getElementById("loginButton").style.display = "block";
      document.getElementById("orText").style.display = "block";
      document.getElementById("username").style.display = "block";
      document.getElementById("password").style.display = "block";

      // Center the login button after rotation
      document.getElementById("loginButton").style.margin = "auto";

      }
    }
    </script>
    <?php
    include_once "Footer.php";
    ?>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</html>
