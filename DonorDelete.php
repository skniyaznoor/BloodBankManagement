<?php
    if(!isset($_GET['id'])){
        header('location:Display.php');
    }
    require_once "DataBaseConnect.php";
    $did=$_GET['id'];
    $qry = "DELETE FROM bloodbankinformation WHERE did=$did";    
    if($conn->query($qry)){
        header('location:Display.php?status=ok');
    }
    else{
        header('location:Display.php?status=error');
    }
?>