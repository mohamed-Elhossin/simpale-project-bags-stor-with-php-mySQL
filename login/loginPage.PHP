<?php
session_start();
include_once('../configDatabase.php');
$mess = '<div class="alert alert-danger" role="alert">
Sorry - you can not enter try agin by correct user name and password 
</div>';
if (isset($_POST['btn'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM admins where name = '$user' and pass = '$pass' ";
    $q = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($q);
    if ($rows > 0) {
        $_SESSION['user'] = $user;
        header('location: ../adminpages/admin.php');
    } else {
        echo $mess;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>

    <form method="POST">
        <a class="btn btn-info btn-block btn-lg" href="../index.php"> Home Page </a>

        <div class="container col-md-5 text-center mt-5">
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" name="user" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">User Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Password">
            </div>
            <button class="btn btn-info btn-lg" name="btn"> Login</button>

    </form>
    </div>
</body>

</html>