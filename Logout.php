<?php
session_start();
session_destroy();
header("location:HomePage.php");
?>