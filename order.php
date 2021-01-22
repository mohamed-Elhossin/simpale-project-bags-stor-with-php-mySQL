  
<?php
include_once('configDatabase.php');
if ($conn) {
  //  echo 'connected';
}
//***************** */

if (isset($_POST['submit'])) {
    # code...
 
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


?>

