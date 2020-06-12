<?php
include_once('../configDatabase.php');

$select = "SELECT * FROM `products`  WHERE category='male' ";
$r = mysqli_query($conn, $select);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $del = "DELETE FROM `products` WHERE id=$id ";
    mysqli_query($conn, $del);
    $_SESSION['message'] = "Rcord has been deleted done";
    header("location: actionProduct.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <a class="btn btn-info btn-block btn-lg" href="../index.php"> Home Page </a>
    <a class="btn btn-info btn-block btn-lg" href="admin.php"> admin Page </a>



    <div class="alert alert-primary" role="alert">
        <h3> Welcome . now you in product male</h3>
    </div>
    <div class="container mt-5 text-center md-6">
        <table class="table">
            <tr>
                <th>#</th>
                <th>name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <?php while ($row =  mysqli_fetch_array($r)) { ?>
                <tr>
                    <td> <?php echo $row['id'] ?> </td>
                    <td> <?php echo $row['name'] ?> </td>
                    <td> <?php echo $row['price'] ?> </td>
                    <td> <?php echo $row['category'] ?> </td>

                    <td> <a class="btn btn-danger" href="actionProduct.php?delete=<?php echo $row['id']; ?>">Delete </a>
               <a class="btn btn-primary" href="addProduct.php?edit=<?php echo $row['id']; ?>">Edit
                         </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>