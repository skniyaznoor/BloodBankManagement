<?php 
    if(isset($_POST['updatedetails'])){

        require_once "DataBaseConnect.php";

        $did=$_POST['did'];
        $dname=$_POST['dname'];
        $dgname=$_POST['dgname'];
        $gender=$_POST['gender'];
        $bloodgrp=$_POST['bloodgrp'];
        $dob=$_POST['dob'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $aadhar=$_POST['aadhar'];
        $pancard=$_POST['pancard'];

        $qry = "UPDATE bloodbankinformation SET 
        dname='$dname',
        gender='$gender',
        bloodgrp='$bloodgrp',
        dob='$dob',
        dgname='$dgname',
        mobile=$mobile,
        address='$address',
        aadhar=$aadhar,
        pan='$pancard',
        email='$email' WHERE did=$did";

        if ($conn->query($qry)) {
            header("location: Display.php?update=ok");
        } else {
            //header('location:Display.php?update=error');
            echo "Error: " . $qry . "<br>" . $conn->error;
        }
    } 
?>