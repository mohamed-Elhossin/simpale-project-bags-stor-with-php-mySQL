<?php
session_start();

if (isset($_SESSION['user'])) {
} else {
    header('location: ../login/loginPage.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <a class="btn btn-info btn-block btn-lg" href="../index.php"> Home Page </a>
    <div class="alert alert-primary" role="alert">
        <h1> Welcome . <?php echo $_SESSION['user'];  ?> now you can select any action you want to do </h1>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add New Product </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="addProduct.php" class="btn btn-primary">Go To Add</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit or Delete Product </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="prodmale.php" class="btn btn-primary">veiw Male's Producs </a>
                        <a href="prodfemale.php" class="btn btn-primary">veiw Female's Producs </a>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Show User's oders </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="ordersList.php" class="btn btn-primary">Go To Show</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>