  
<?php
include_once('configDatabase.php');
if ($conn) {
    //echo 'connected';
}
//***************** */
if (isset($_POST['submit'])) {
    # code...
    if (
        !empty($_POST['name']) &&
        !empty($_POST['email'])
        && !empty($_POST['phone'])
        && !empty($_POST['adress'])
        && !empty($_POST['quantity'])
    ) {
        # code...
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $adress = $_POST['adress'];
        $quantity = $_POST['quantity'];
        $proid = $_POST['proid'];
        $query = "INSERT INTO `order` (`id`, `name`, `email`, `phone`, `adress`, `quantity`,`proid`) 
            VALUES (NULL, '$name', '$email', '$phone', '$adress', '$quantity','$proid');";
        $run_query = mysqli_query($conn, $query);
        if ($run_query) {
            # code...
            echo "<br><br><br>";
            echo '<center><h1>Thanks For Trusting Us</h1></center>';

            //header('Location: home.php');
            //header for actual page with session
        } else {
            echo 'faild order';
            //header('Location: index.html');
        }
    } else {
        //  echo 'please fill the form';
    }
} else {
    echo 'please fill the form';
}

?>

