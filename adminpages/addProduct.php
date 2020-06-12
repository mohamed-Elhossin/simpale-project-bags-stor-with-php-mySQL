<?php
include_once('../configDatabase.php');

if (isset($_POST['btn'])) {
  if (
    !empty($_POST['name'])
    && !empty($_POST['desc'])
    && !empty($_POST['price'])
  ) {
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $gender = $_POST['gender'];

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
 ('$name' , '$nameImg' , '$desc' ,'$price','$gender')";
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


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
  <a class="btn btn-info btn-lg btn-block" href="../index.php"> HOME PAGE </a>
  <a class="btn btn-info btn-block btn-lg" href="admin.php"> admin Page </a>

  <div class="container mt-5 col-md-4 text-center">
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Product Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Images</label>
        <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Descraption</label>
        <textarea type="textarea" name="desc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> </textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input type="number" name="price" class="form-control">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Male</label>
        <input type="radio" name="gender" value="male">
        <label for="exampleInputEmail1" >Femail</label>
        <input type="radio" name="gender" value="female">
      </div>
      <button type="submit" name="btn" class="btn btn-primary">ADD Product</button>
    </form>
  </div>
</body>

</html>