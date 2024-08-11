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
  </head>
  <body>
    <?php
    include_once "Navbar.php";
    ?>
    <?php
        if(!isset($_GET['id'])){
            header('location:Display.php');
        }
        require_once "DataBaseConnect.php";
        $did=$_GET['id'];
        $qry = "SELECT * FROM bloodbankinformation WHERE did=$did";    
        $res=$conn->query($qry);
        $bdt=$res->fetch_assoc();
    ?>
    <form
      class="container border border-2 border-dark mt-5 rounded-2 bg-body-tertiary"
      action="DonorUpdateData.php?id=<?php echo $bdt['did']; ?>"
      method="post"
    >
      <div class="bg-info rounded-2">
        <h1 class="text-center mt-2 text-light p-1">Update Form</h1>
      </div>
      <input
          type="hidden"
          name="did"
          value="<?php echo $bdt['did'] ?>"
        />
      <div>
        <h6>Donor's Name</h6>
        <input
          type="text"
          name="dname"
          placeholder="Enter Your Name"
          class="form-control"
          value="<?php echo $bdt['dname'] ?>"
        />
        <h6 class="mt-2">Donor's Guardian's Name</h6>
        <input
          type="text"
          name="dgname"
          placeholder="Enter Your Guardian's Name"
          class="form-control"
          value="<?php echo $bdt['dgname'] ?>"
        />
      </div>
      <div class="input-group pb-3 pt-3">
        <div class="w-50">
          <h6>Gender</h6>
          <input class="m-2" type="radio" name="gender" value="Male" <?php $bdt['gender']=="Male"? print "checked":"" ;?>/>Male
          <input class="m-2" type="radio" name="gender" value="Female" <?php $bdt['gender'] == "Female" ? print "checked" : "" ?>/>Female
          <input class="m-2" type="radio" name="gender" value="Others" <?php $bdt['gender'] == "Others" ? print "checked" : "" ?>/>Others
        </div>
        <div class="w-50">
        <h6 class="m-2">Blood Group</h6>
          <select class="form-control" name="bloodgrp">
            <option>-select-</option>
            <option value="O+" <?php $bdt['bloodgrp'] === "O+"? print "selected" : ""; ?>>O+</option>
            <option value="O-" <?php $bdt['bloodgrp'] === "O-"? print "selected" : ""; ?>>O-</option>
            <option value="A+" <?php $bdt['bloodgrp'] === "A+"? print "selected" : ""; ?>>A+</option>
            <option value="A-" <?php $bdt['bloodgrp'] === "A-"? print "selected" : ""; ?>>A-</option>
            <option value="B+" <?php $bdt['bloodgrp'] === "B+"? print "selected" : ""; ?>>B+</option>
            <option value="B-" <?php $bdt['bloodgrp'] === "B-"? print "selected" : ""; ?>>B-</option>
            <option value="AB+" <?php $bdt['bloodgrp'] === "AB+"? print "selected" : ""; ?>>AB+</option>
            <option value="AB-" <?php $bdt['bloodgrp'] === "AB-"? print "selected" : ""; ?>>AB-</option>
          </select>
        </div>
      </div>
      <div class="input-group pb-3">
        <h6 class="m-2">DOB</h6>
        <input class="form-control" type="date" name="dob" value="<?php echo $bdt['dob'] ?>"/>     
        <h6 class="m-2">Mobile</h6>
        <input class="form-control" type="number" name="mobile" value="<?php echo $bdt['mobile'] ?>"/>
      </div>     
      <div class="pb-3">
        <h6 class="m-2">Email</h6>
        <input
          name="email"
          class="form-control"
          type="email"
          placeholder="Enter Your Email"
          value="<?php echo $bdt['email'] ?>"
        />
      </div>
      <div class="pb-3">
        <h6 class="m-2">Address</h6>
        <textarea name="address" class="form-control" ><?php echo $bdt['address'] ?></textarea>
      </div>
      <div class="input-group pb-3 pt-3">
      <h6 class="m-2">Aadhar Card No:</h6>
        <input class="form-control" type="number" name="aadhar" value="<?php echo $bdt['aadhar'] ?>"/>     
        <h6 class="m-2">Pan Card</h6>
        <input class="form-control" type="text" name="pancard" value="<?php echo $bdt['pan'] ?>"/>
      </div>
      <div class="container text-center mt-3 mb-2">
        <input type="submit" name="updatedetails" class="btn btn-info text-light" value="Update" />
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