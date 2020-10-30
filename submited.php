<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successfully Submitted</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <style>
             nav{
              margin-top:0px;
             }
      .navbar{
          background-color:black;
         
        }
        .nav_my_class {
            font-size: 40px !important;
            font-family: 'Courier New', Courier, monospace !important;
            color: aquamarine !important;
            color:rgb(199, 27, 27);
        }

        .ul_my_class_in_nav a {
            font-size: 25px !important;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(199, 27, 27) !important;
        }
        .icon_class {
            height: 60px;
            padding-right: 20px;
        }
          h1{
              margin-top:100px;
          }
          .my_class{
    background-color: black;
    color:white;
}
.footer-copyright{
    background-color: rgb(122, 120, 120);
}
.footer-copyright a{
    color:white
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}
        </style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="ico.jpg" class="icon_class">
        <a class="navbar-brand nav_my_class" href="#">Blood bank System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown bgcolor-" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ul_my_class_in_nav">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item ul_my_class_in_nav">
                    <a class="nav-link" href="pricing.php">Pricing</a>
                </li>
                <li class="nav-item ul_my_class_in_nav">
                    <a class="nav-link" href="AboutUs.php">About Us</a>
                </li>
                <li class="nav-item ul_my_class_in_nav">
                    <a class="nav-link" href="Contact.php">Contact</a>
                </li>

            </ul>
        </div>
    </nav>
 <img class="center" src="thnk.jpg">

    <h1 class="text-center">Successfully Submitted </h1>
    <p class="text-center">You will receive blood on  
        <?php
         $date = strtotime("+3 day");
         echo date('M d, Y', $date);
       ?> 
    </p>
    <p class="text-center">Please Collect your blood from <h4 class="text-center">lokmangal blood bank swapnashilp housing society near model colony road,pune, 413007</h4></p>
    <h4 class="text-center">Your token-number is 
    <?php
echo(rand() . "<br>");
?>

 <!-- <input type="submit" value="Make Bill" class="btn btn-danger">  -->

    
 <footer>
     <div class="my_class bg-dark">
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
  
      <!-- Grid row -->
      <div class="row mt-3">
  
        <!-- Grid column -->
        <div class="col-md-4 pt-4 col-lg-4 col-xl-3 mx-auto mb-4">
  
          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">About Us</h6>
          <hr class="deep-purple accent-2 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Our aim is to help maximum number of people by giving them blood and get maximum number of responce.</p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
      
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4 pt-4 col-lg-3 col-xl-2 mx-auto mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="deep-purple accent-2 mb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Facebook</a>
          </p>
          <p>
            <a href="#!">Instagram</a>
          </p>
          <p>
            <a href="#!">twitter</a>
          </p>
          <p>
            <a href="#!">Yahoo</a>
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4  pt-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-1 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>676 North Kasba,solapur</p>
          <p> rahuljain2961@gmail.com</p>
          <p>+91911245869</p>
          <p>+91293393485</p>
  
        </div>
        <!-- Grid column   -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
</div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="#"> Rahul Jain</a>
    </div>
    <!-- Copyright -->

  </footer>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

</html>