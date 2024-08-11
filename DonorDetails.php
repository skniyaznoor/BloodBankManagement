<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
$qry="select * from bloodbankinformation where did=$did";
$res=$conn->query($qry);
if($res->num_rows>0){
?>
<div class="d-flex justify-content-center">
<div class="table-responsive-sm m-5 w-50">
<table class="table table-info table-striped table-hover">
<caption class="text-light">Donor Details</caption>
    <?php
        $bdt = $res->fetch_assoc();
    ?>
    <tr>
        <th scope="col">Donor Name</th>
        <td><?php echo $bdt['dname'] ?></td>
    </tr>
    <tr>
        <th scope="col">Donor Guardian Name</th>
        <td><?php echo $bdt['dgname'] ?></td>
    </tr>
    <tr>
        <th scope="col">Gender</th>
        <td><?php echo $bdt['gender'] ?></td>
    </tr>
    <tr>
        <th scope="col">Blood Group</th>
        <td><?php echo $bdt['bloodgrp'] ?></td>
    </tr>
    <tr>
        <th scope="col">DOB</th>
        <td><?php echo $bdt['dob'] ?></td>
    </tr>
    <tr>
        <th scope="col">Mobile</th>
        <td><?php echo $bdt['mobile'] ?></td>
    </tr>
    <tr>
        <th scope="col">Email</th>
        <td><?php echo $bdt['email'] ?></td>
    </tr>
    <tr>
        <th scope="col">Address</th>
        <td><?php echo $bdt['address'] ?></td>
    </tr>
    <tr>
        <th scope="col">Aadhar No</th>
        <td><?php echo $bdt['aadhar'] ?></td>
    </tr>
    <tr>
        <th scope="col">Pan No</th>
        <td><?php echo $bdt['pan'] ?></td>
    </tr>
    <?php
        }
        else{
            echo "No Data Found";
        }
    ?>
</table>
</div>
</div>
<?php
    include_once "Footer.php";
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</html>