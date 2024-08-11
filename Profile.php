<?php
 include_once "Navbar.php";
 include_once "DataBaseConnect.php";
//  session_start();
if(!isset($_SESSION['email'])){
    header("location:Login.php");
}
 $email = $_SESSION['email'];
 $qry = "SELECT * FROM usertable WHERE email = '$email'";
 $res = $conn->query($qry);
 $user = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
</head>
<body>
<div class="d-flex justify-content-center">
    <div class="card text-bg-danger p-5 m-5 w-50">
        <div class="card-header">
            <h3>User Profile</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <table class="table table-danger table-striped">
                <tr>
                    <td>Name</td>
                    <td><?php echo $user['username'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $user['email'] ?></td>
                </tr>
            </table>
    </div>
    </div>
</div>
<?php
    include_once "Footer.php";
?>
</body>
</html>