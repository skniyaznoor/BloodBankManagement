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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <?php
    include_once "Navbar.php";
    ?>
    <?php
    if (isset($_GET['thanks']) && $_GET['thanks'] == 'true') {
        echo '<div class="container text-center mt-3 mb-2">';
        echo '<p class="text-success">Thanks for supporting!</p>';
        echo '</div>';
    }
    ?>
    <div class="d-flex justify-content-center mt-5">
            <div id="carouselExampleCaptions" class="carousel slide w-50">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        <div class="carousel-inner">
            <div class="carousel-item active p-5">
            <img src="./Elements/Images/blood_donation_campagin.gif" class="d-block w-100" alt="BloodDonation" >
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
            </div>
            <div class="carousel-item p-5">
            <img src="./Elements/Images/healthcare_800.gif" class="d-block w-100" alt="BloodDonation">
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
            </div>
            <div class="carousel-item p-5">
            <img src="./Elements/Images/dailyui-014.gif" class="d-block w-100" alt="BloodDonation" >
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
    <?php
      include_once "Footer.php";
    ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
