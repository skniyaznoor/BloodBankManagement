<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
</head>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
<body>
<?php
    include_once "Navbar.php";
?>
<?php
    require_once "DataBaseConnect.php";
    $qry = "SELECT did,dname,gender,bloodgrp,dob,email FROM bloodbankinformation";    
    $res = $conn->query($qry);
?>
<div class="d-flex justify-content-center">
<div class="table-responsive-sm m-5 w-75">
<table class="table table-info table-striped table-hover">
<caption class="text-light">List of Donors</caption>
    <tr>
        <th scope="col">Donor Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Blood Group</th>
        <th scope="col">DOB</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
    </tr>
    <?php
        while($bdt = $res->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $bdt['dname'] ?></td>
        <td><?php echo $bdt['gender'] ?></td>
        <td><?php echo $bdt['bloodgrp'] ?></td>
        <td><?php echo $bdt['dob'] ?></td>
        <td><?php echo $bdt['email'] ?></td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-danger" >
                    <a href="DonorDetails.php?id=<?php echo $bdt['did'] ?>" class="text-decoration-none text-light">Details</a>
                </button>
                <button type="button" class="btn btn-warning">
                    <a href="DonorUpdate.php?id=<?php echo $bdt['did'] ?>" class="text-decoration-none text-light">Update</a>
                </button>
                <button type="button" class="btn btn-success">
                    <a href="DonorDelete.php?id=<?php echo $bdt['did'] ?>" class="text-decoration-none text-light">Delete</a>
                </button>
            </div>
        </td>
    </tr>
    <?php
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