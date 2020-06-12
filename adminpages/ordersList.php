<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
include_once('../configDatabase.php');
if ($conn) {
  //echo 'connected';
}
?>
<div>
<a class="btn btn-info btn-block btn-lg" href="../index.php"> Home Page </a>
<a class="btn btn-info btn-block btn-lg" href="admin.php"> admin Page </a>

  <div class="container text-center mt-5">
  <table class="table table-hover">
    <thead>
      <tr>
      <th scope="col"> #</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Adress</th>
        <th scope="col">Quantity</th>
        <th scope="col"> product id</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM `order` ;";
      $runQuery = mysqli_query($conn, $query);
      if ($runQuery) {
        //echo ' runned';

      } else {
        echo 'not runned';
      }
      foreach ($runQuery as $element) {
        // code...
        $id = $element['id'];
        //echo '<button onclick="">Delete</button>';
      ?>
        <tr>
        <td> <?php echo $element['id']; ?> </td>
          <td> <?php echo $element['name']; ?></td>
          <td> <?php echo $element['email']; ?> </td>
          <td> <?php echo $element['phone']; ?> </td>
          <td> <?php echo $element['adress']; ?> </td>
          <td> <?php echo $element['quantity']; ?> </td>
          <td> <?php echo $element['proid']; ?> </td>


        </tr>
      <?php
      } ?>
    </tbody>
  </table>
  </div>
</div>