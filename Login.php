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
  <?php
    if(isset($_POST['login'])){
        require_once "DataBaseConnect.php";
        $username = $_POST['loginusername'];
        $password = $_POST['loginpassword'];

        $qry = "SELECT * FROM usertable WHERE username='$username' AND password='$password'";
        $res = $conn->query($qry);
        if($res->num_rows>0){
            $user = $res->fetch_assoc();
            session_start();
            $_SESSION['email'] = $user['email'];
            $_SESSION['username'] = $user['username'];
            header("location:HomePage.php");
        } else {
          //$error_message = "Invalid Password or Username";
          $msg="Invalid Email or Password.";
        }
    }
  ?>
  <?php
    if (isset($error_message)) {
      echo '<script>alert("' . $error_message . '");</script>';
    }
  ?>
      <div class="d-flex justify-content-center m-5">
        <div class="card bg-black">
          <img
            src="./Elements/Images/—Pngtree—international red day red blood_546138.png"
            id="rotatableImage"
            class="card-img"
            alt="..."
            height="650"
          />
          <div class="card-img-overlay">
            <div class="p-5" id="loginContainer">
              <h5 class="card-title text-center m-5 text-light" id="loginTitle">
                Sign In
              </h5>
            </div>
            <br />
            <div class="p-5 pb-3" id="loginFields">
              <?php
              if(isset($msg)){
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <?php echo $msg; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
                }
              ?>
              <form action="Login.php" method="post">
                <h5 class="text-light" id="username">Username</h5>
                <input
                  type="text"
                  class="form-control"
                  id="usernameField"
                  placeholder="username"
                  name="loginusername"
                  required
                />
                </div>
                <div class="p-5 pt-0 pb-0" id="loginButtons">
                  <h5 class="text-light" id="password">Password</h5>
                  <input
                    type="password"
                    class="form-control"
                    id="passwordField"
                    placeholder="***************"
                    name="loginpassword"
                    required
                  />
                  <div class="text-center m-2">
                    <button
                      class="btn text-light btn-success center-button"
                      id="loginButton"
                      name="login"
                    >
                      <b>Log in</b>
                    </button>
                </form>
              </div>
              <p class="text-light text-center" id="orText">
                -----or------<br />Don't have an account?
              </p>
            </div>

            <div
              class="p-5 pb-3 pt-0"
              id="signupContainer"
              style="display: none"
            >
              <h5 class="text-center text-light" id="">Sign Up</h5>
              <form action="Login.php" method="post">
                <h5 class="text-light" id="signusername">Username</h5>
                <input
                  type="text"
                  class="form-control"
                  id="signusernameField"
                  placeholder="username"
                  name="signinusername"
                  required
                />
                <h5 class="text-light" id="signemail">Email</h5>
                <input
                  type="email"
                  class="form-control"
                  id="signemailField"
                  placeholder="name@example.com"
                  name="signinemail"
                  required
                />
                </div>
                <div class="p-5 pt-0 pb-0" id="signupButtons" style="display: none">
                <h5 class="text-light" id="signpassword">New Password</h5>
                <input
                  type="password"
                  class="form-control"
                  id="signpasswordField"
                  placeholder="***************"
                  name="signinpasswordnew"
                />
                <h5 class="text-light" id="confirmsignpassword">
                  Confirm Password
                </h5>
                <input
                  type="password"
                  class="form-control"
                  id="confirmsignpasswordField"
                  placeholder="***************"
                  name="signinpasswordconfirm"
                />
                <div class="text-center m-2">
                <button
                  class="btn text-light btn-success center-button"
                  id="signupButton"
                  name="signup"
                >
                  <b>Sign Up</b>
                </button>
              </form>
              </div>
              <p class="text-light text-center" id="orText">
                -----or------<br />Already have an account?
              </p>
            </div>

            <div>
              <h5 class="text-center text-light">
                <button
                  id="rotateButton"
                  onclick="rotateImage()"
                  class="btn text-light"
                >
                  <b>
                    <span id="toggleButton">Sign Up</span>
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

        // Toggle between Log In and Sign Up elements
        const loginContainer = document.getElementById("loginContainer");
        const loginFields = document.getElementById("loginFields");
        const loginButtons = document.getElementById("loginButtons");

        const signupContainer = document.getElementById("signupContainer");
        const signupButtons = document.getElementById("signupButtons");

        const toggleButton = document.getElementById("toggleButton");
        const buttonText = currentRotation % 360 === 180 ? "Log In" : "Sign Up";

        loginContainer.style.display =
          currentRotation % 360 === 180 ? "none" : "block";
        loginFields.style.display =
          currentRotation % 360 === 180 ? "none" : "block";
        loginButtons.style.display =
          currentRotation % 360 === 180 ? "none" : "block";

        signupContainer.style.display =
          currentRotation % 360 === 180 ? "block" : "none";
        signupButtons.style.display =
          currentRotation % 360 === 180 ? "block" : "none";

        toggleButton.textContent = buttonText;

        // Hide text fields after rotation
        if (currentRotation % 360 === 180) {
          document.getElementById("usernameField").style.display = "none";
          document.getElementById("passwordField").style.display = "none";
          document.getElementById("orText").style.display = "none";
          document.getElementById("username").style.display = "none";
          document.getElementById("password").style.display = "none";
          document.getElementById("signupTitle").style.display = "block";
          document.getElementById("signusername").style.display = "block";
          document.getElementById("signusernameField").style.display = "block";
          document.getElementById("signemail").style.display = "block";
          document.getElementById("signemailField").style.display = "block";
          document.getElementById("signpassword").style.display = "block";
          document.getElementById("signpasswordField").style.display = "block";
          document.getElementById("confirmsignpassword").style.display =
            "block";
          document.getElementById("confirmsignpasswordField").style.display =
            "block";
        } else {
          // Show text fields before rotation
          document.getElementById("usernameField").style.display = "block";
          document.getElementById("passwordField").style.display = "block";
          document.getElementById("orText").style.display = "block";
          document.getElementById("username").style.display = "block";
          document.getElementById("password").style.display = "block";
          document.getElementById("signupTitle").style.display = "none";
          document.getElementById("signusername").style.display = "none";
          document.getElementById("signusernameField").style.display = "none";
          document.getElementById("signemailField").style.display = "none";
          document.getElementById("signpassword").style.display = "none";
          document.getElementById("signpasswordField").style.display = "none";
          document.getElementById("confirmsignpassword").style.display = "none";
          document.getElementById("confirmsignpasswordField").style.display = "none";
        }
      }
    </script>
    <?php
    include_once "Footer.php";
    ?>

    <?php
    if(isset($_POST['signup'])){
        
        require_once "DataBaseConnect.php";

        $username=$_POST['signinusername'];
        $email=$_POST['signinemail'];
        $password1=$_POST['signinpasswordnew'];
        $password2=$_POST['signinpasswordconfirm'];

        // Check if the username or email already exists in the database
        $checkQuery = "SELECT * FROM usertable WHERE username='$username' OR email='$email'";
        $checkResult = $conn->query($checkQuery);

        if ($checkResult->num_rows > 0) {
          echo "<script>alert('Username or email already exists.');</script>";
        } 
        else {
          if($password1===$password2){
            $qry="INSERT INTO usertable 
            VALUES('$username','$email','$password1')";
            $res=$conn->query($qry); 
          }
          else{
            echo "<script>alert('Password didn\'t match.');</script>";
          }
        } 
    }
    ?>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
</html>
