<?php
include_once('../configDatabase.php');
require('sessionDestrooy.php');
if (isset($_POST['save'])) {
    if (
        !empty($_POST['name'])
        && !empty($_POST['desc'])
        && !empty($_POST['price'])
    ) {
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $category = $_POST['category'];

        //image code here
        $image_type = $_FILES['image']['type'];
        $nameImg = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $location = 'uploded_images/';
        //--------
        if (move_uploaded_file($tmp_name, $location . $nameImg)) {
            echo '<div class="alert alert-primary" role="alert">
        image uploeaded succefully
      </div>';
        } else {
            echo "upload faild";
        }
        $insert = "INSERT INTO `products` (`name` , `img` , `desc` , `price`,`category`) values
 ('$name' , '$nameImg' , '$desc' ,'$price','$category')";
        $q = mysqli_query($conn, $insert);
        if ($q) {
            echo '<div class="alert alert-primary" role="alert">
    this order send to database succefully 
    </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
    ERROR - please try agin   
    </div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
    ERROR - please fail this form 
    </div>';
    }
}

// Edit Section 
$name = "";
$desc = "";
$price = "";
$update = "";
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = "true";
    $select = "SELECT * FROM `products` WHERE id =$id";
    $q = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($q);
    $name = $row['name'];
    $desc = $row['desc'];
    $price = $row['price'];

    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $gg = $_POST['category'];
        $update = "UPDATE `products` SET `name` = '$name' , `desc`='$desc' ,  `price`='$price',
   `category`='$gg' WHERE `id` ='$id'";
        $q = mysqli_query($conn, $update);

        if ($gg == 'female') {
            header("location: prodfemale.php");
        } else {
            header("location: prodmale.php");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
<title> Add Products </title>
</head>

<body>
    <?php require('layout.php'); ?>

    <div class="container mt-5 col-md-4 text-center">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" name="name" value="<?php echo $name ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Images</label>
                <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descraption</label>
                <input type="text" value="<?php echo $desc ?>" name="desc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="number" value="<?php echo $price ?>" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Male</label>
                <input type="radio" name="category" value="male">
                <label for="exampleInputEmail1">Femail</label>
                <input type="radio" name="category" value="female">
            </div>
            <?php if ($update == "true") : ?>
                <button type="submit" name="update" class="btn btn-info btn-block">Update</button>
            <?php else : ?>
                <button type="submit" name="save" class="btn btn-block btn-primary">ADD Product</button>
            <?php endif ?>
        </form>
    </div>
</body>

</html>
