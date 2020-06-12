<?php
include_once('configDatabase.php');
$select = "SELECT * FROM `products`";
$r = mysqli_query($conn, $select);
?>

<html>

<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index_style.css">

  <title> bags stor </title>
  <script src="js/jquery-3.3.1.slim.min.js"> </script>
  <script src="js/popper.min.js"> </script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>


  <!--  <div class="test">    <h1> welcome in our website </h1>  </div>-->
  <div class="contant">
    <i class="fab fa-facebook-square"></i>
    <i class="insta fab fa-instagram"></i>
    <i class="fab fa-twitter" style="color:#3b5998"></i>
  </div>






  <section class="heder">
    <nav class="fixed-top navnav navbar navbar-expand-lg navbar-dark ">
      <a class="navbar-brand" href="#">
        <img style="width: 50px" src="img/logo6.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">products <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about_us">about Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">profiles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">servieces</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login/loginPage.php">Login</a>
          </li>
       
        </ul>

      </div>
    </nav>

  </section>
  <section class="slider">
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/i.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/i1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/i5.jpg" s class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

  </section>
  <div class="clr"></div>

  <section id="about_us">
    <div class="overlay">

      <div class="about_heder">
        <h1> About US </h1>
        <div class="hr"> </div>
        <hr style="width: 20% ; border-color:  black;">
        <hr style="width: 10%; border-color: black;">
      </div>
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-12 col-sm-12 ">
            <div class="about_logo">
              <img class="img-fluid" src="img/bag.jpg">
            </div>
          </div>

          <div class=" col-lg-7 col-md-12 col-sm-12">
            <div class="about_caption text-left mt-3">
              <h2> ACADEMIC COMMITTEE: </h2>
              <p> At this aspect we believe that each and every one of us is in a deep need of coping with the recent
                business updates around him. So, we provide a totally modern and interactive academic
              </p>
              <h2> ACADEMIC COMMITTEE: </h2>
              <p> At this aspect we believe that each and every one of us is in a deep need of coping with the recent
                business updates around him. So, we provide a totally modern and interactive academic
              </p>
              <h2> ACADEMIC COMMITTEE: </h2>
              <p> At this aspect we believe that each and every one of us is in a deep need of coping with the recent
                business updates around him. So, we provide a totally modern and interactive academic
              </p>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>



  <section class="profile">
    <div class="container">
      <div class="row">

      </div>
    </div>
  </section>


  <section id="gallary">
    <div class="gallary_heder text-center ">
      <h1> Gallary</h1>
      <div class="hr"> </div>
      <hr style="width: 20% ; border-color:  black;">
      <hr style="width: 10%; border-color: black;">
    </div>
    <ul class="nav nav-tabs justify-content-around" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">shoot'16</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">shoot'17</a>
      </li>

    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="container">
          <div class="row">
            <div class=" col-xl-4 col-md-6 mt-4">
              <img class="img-fluid" src="img/b3.jpg">
            </div>
            <div class=" col-xl-4 col-md-6 mt-4">
              <img class="img-fluid" src="img/b1.jpg">
            </div>
            <div class=" col-xl-4 col-md-6 mt-4">
              <img class="img-fluid" src="img/b2.jpg">
            </div>
            <div class=" col-xl-4 col-md-6 mt-4">
              <img class="img-fluid" src="img/b4.jpg">
            </div>
            <div class=" col-xl-4 col-md-6 mt-4">
              <img class="img-fluid" src="img/b5.jpg">
            </div>
            <div class=" col-xl-4 col-md-6 mt-4">
              <img class="img-fluid" src="img/b6.jpg">
            </div>


          </div>

        </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="container">
          <div class="row">
            <div class=" col-xl-4 col-md-6 mt-4">
              <img class="img-fluid" src="img/b7.jpg">
            </div>
            <div class=" col-xl-4 col-md-6 mt-4">
              <img class="img-fluid" src="img/b8.jpg">
            </div>
            <div class=" col-xl-4 col-md-6 mt-4">
              <img class="img-fluid" src="img/b9.jpg">
            </div>
            <div class=" col-xl-4 col-md-6 mt-4">
              <img class="img-fluid" src="img/b10.jpg">
            </div>
            <div class=" col-xl-4 col-md-6 mt-4">
              <img class="img-fluid" src="img/b11.jpg">
            </div>
            <div class=" col-xl-4 col-md-6 mt-4">
              <img class="img-fluid" src="img/b12.jpg">
            </div>
          </div>
        </div>
      </div>

  </section>




  <section class="product">
    <div class="product_heder text-center ">
      <h1>product</h1>
      <div class="hr"> </div>
      <hr style="width: 20% ; border-color:  black;">
      <hr style="width: 10%; border-color: black;">
    </div>
    <div class="container">
      <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="our_product">
              <div class="card">
                <img src="img/b1.jpg" alt="...">
                <div class="card-body">
                  <h6 class="card-title">product ID 5</h6>
                  <h5 class="card-title"> jhskjald</h5>
                  <p class="card-text"> d lkmsk </p>
                  <p class="text-center"> Price : 9000 </p>
                  <a href="#contact_us" class="btn btn-primary">BUY NOW</a>
                </div>
              </div>
            </div>
          </div>
        <?php while ($row =  mysqli_fetch_array($r)) { ?>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="our_product">
              <div class="card">
                <img src="adminpages/uploded_images/<?php echo $row['img']; ?>" alt="...">
                <div class="card-body">
                  <h6 class="card-title">product ID <?php echo $row['id']; ?></h6>
                  <h5 class="card-title"><?php echo $row['name']; ?></h5>
                  <p class="card-text"><?php echo $row['desc'] ?> </p>
                  <p class="text-center"> Price : <?php echo $row['price'] ?> </p>
                  <a href="#contact_us" class="btn btn-primary">BUY NOW</a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </section>


  <section id="contact_us">
    <div class="contact_heder text-center  mt-5">
      <h1> Contact Us </h1>
      <div class="hr"> </div>
      <hr style="width: 20% ; border-color:  black;">
      <hr style="width: 10%; border-color: black;">
    </div>

    <div class="container">
      <div class="row">

        <div class=" col-lg-6 col-md-12">
          <div class="contact_img">
            <h1> select your location </h1>
          <a href="https://www.google.com.eg/maps/place/%D9%85%D9%87%D9%85%D8%B4%D8%A9%D8%8C+%D8%A7%D9%84%D8%B4%D8%B1%D8%A7%D8%A8%D9%8A%D8%A9%D8%8C+%D9%85%D8%AD%D8%A7%D9%81%D8%B8%D8%A9+%D8%A7%D9%84%D9%82%D8%A7%D9%87%D8%B1%D8%A9%E2%80%AC%E2%80%AD/@30.0727731,31.2669666,16z/data=!4m5!3m4!1s0x14583f873cae96c1:0x3ddbbf1f2c6dfb2c!8m2!3d30.073968!4d31.2640673"> <img class="img-fluid" src="img/location.png"></a>  
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div id="contact_form">




            <form method="POST" action="order.php">
              <div class="form-group">
                <label for="exampleInputEmail1"> Name </label>
                <input type="text" class="form-control" name="name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                  else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Phone</label>
                <input type="number" class="form-control" name="phone" placeholder="phone">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                  else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="adress" placeholder="Address">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Product ID</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="proid" placeholder="product ID">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Quantity</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="quantity" placeholder="Quantity">
              </div>


              <input class="btn btn-primary " type="submit" name="submit" value="Submit">
            </form>

          </div>
        </div>



      </div>
    </div>
  </section>

  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the upcoming
            programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code
            wants to be simple. We will help programmers build up concepts in different programming languages that
            include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
            <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
            <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
            <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
            <li><a href="http://scanfcode.com/category/android/">Android</a></li>
            <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="http://scanfcode.com/about/">About Us</a></li>
            <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
            <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
            <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
            <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
            <a href="#">Scanfcode</a>.
          </p>
        </div>


      </div>
    </div>
  </footer>

</body>


</html>