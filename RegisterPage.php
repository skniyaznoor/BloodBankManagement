<?php
    if(isset($_POST['submit'])){
        
        require_once "DataBaseConnect.php";

        $dname=$_POST['dname'];
        $dgname=$_POST['dgname'];
        //$gender=$_POST['gender'];
        $gender=isset($_POST['gender']) ? $_POST['gender'] : '';
        $bloodgrp=$_POST['bloodgrp'];
        $dob=$_POST['dob'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $aadhar=$_POST['aadhar'];
        $pancard=$_POST['pancard'];
        
        $qry="INSERT INTO bloodbankinformation 
        VALUES('','$dname','$dgname','$gender','$bloodgrp','$dob',$mobile,'$email','$address',$aadhar,'$pancard')";
        $res=$conn->query($qry);

        if($res){
          header("Location: HomePage.php?thanks=true");
          exit();
        }
      }
?>
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
      body{
        background-image: url("./Elements/Images/can-i-give-blood-17-things-every-woman-needs-to-know-about-giving-blood-1624616194.gif");
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
  </head>
  <body>
    <?php
    include_once "Navbar.php";
?>
    <form
      class="container border border-2 border-dark mt-5 rounded-2 bg-body-tertiary w-50"
      action="RegisterPage.php"
      method="post"
    >
      <div class="bg-info rounded-2">
        <h1 class="text-center mt-2 text-light p-1">
        <img
        src="./Elements/Images/Screenshot_2023-12-23_103946-removebg-preview.png"
        alt="logo"
        height="30"
        /> Register Form</h1>
      </div>
      <div>
        <h6>Donor's Name</h6>
        <input
          type="text"
          name="dname"
          placeholder="Enter Your Name"
          class="form-control"
        />
        <h6 class="mt-2">Donor's Guardian's Name</h6>
        <input
          type="text"
          name="dgname"
          placeholder="Enter Your Guardian's Name"
          class="form-control"
        />
      </div>
      <div class="input-group pb-3 pt-3">
        <div class="w-50">
          <h6>Gender</h6>
          <input class="m-2" type="radio" name="gender" value="Male" />Male
          <input class="m-2" type="radio" name="gender" value="Female" />Female
          <input class="m-2" type="radio" name="gender" value="Others" />Others
        </div>
        <div class="w-50">
        <h6 class="m-2">Blood Group</h6>
          <select class="form-control" name="bloodgrp">
            <option>-select-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
          </select>
        </div>
      </div>
      <div class="input-group pb-3">
        <h6 class="m-2">DOB</h6>
        <input class="form-control" type="date" name="dob" />     
        <h6 class="m-2">Mobile</h6>
        <input class="form-control" type="number" name="mobile" />
      </div>     
      <div class="pb-3">
        <h6 class="m-2">Email</h6>
        <input
          name="email"
          class="form-control"
          type="email"
          placeholder="Enter Your Email"
        />
      </div>
      <div class="pb-3">
        <h6 class="m-2">Address</h6>
        <textarea name="address" class="form-control"></textarea>
      </div>
      <div class="input-group pb-3 pt-3">
      <h6 class="m-2">Aadhar Card No:</h6>
        <input class="form-control" type="number" name="aadhar" />     
        <h6 class="m-2">Pan Card</h6>
        <input class="form-control" type="text" name="pancard" />
      </div>
      <div class="container text-center mt-3 mb-2">
        <input type="reset" name="reset" class="btn btn-info text-light" />
        <input type="submit" name="submit" class="btn btn-info text-light" />
      </div>
    </form>
    <?php
    include_once "Footer.php";
    ?>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</html>

