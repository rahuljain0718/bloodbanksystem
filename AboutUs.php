<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>




    <!-- <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
     

     
      
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
    


    </style>



<style>
        .dropdown-menu{
          margin-left: -29px;
        }
    .size{
        padding: 80px 0px;
    }
   
    h2{
        color: #e74c3c;
    }
    .white{
        background-color: white;
    }
    p{
        font-size: 18px;
    }
    .right{
        float: right;
    }
    h1{
        color: black;
    }
    .size{
        min-height: 0px;
        padding: 60px 0 40px 0;
        
    }

     .red-bar{
        margin-left:34px;
    }
    .tm{
        margin-left:180px;
    }
    .rounded{
        margin-right:-118px;
    }
    .td{
        margin-left:180px;
    }
    @media (min-width:10px) and (max-width: 1366px){
        .tm{
        margin-left:20px;
    }
        .td{
        margin-left:20px;
    }
    .rounded{
        margin-right:20px;
    }
    }
 
 
.fa {
    padding: 8px;
    font-size: 18px;
    width: 58px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 51%;
}
.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
} 
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
  

</style>

</head>
<body>
<?php
    include "server.php";
?> 


<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color:lightblue">Blood Bank System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" >
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        
        <a class="nav-link active" aria-current="page"style="color:red; font-size:20px;" href="index1.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="pricing.php" style="color:red; font-size:20px;">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.php" style="color:red; font-size:20px;">About Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Contact.php" style="color:red; font-size:20px;">Contact</a>
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:red; font-size:20px;">
           Profile
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item"href="update-process.php">Edit profile</a></li>
            <li><a class="dropdown-item" name="logout" href="logout.php">Logout</a></li>
          
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid red-background size">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center">About Us</h1>
            <hr class="white-bar">
        </div>
    </div>
</div>
<div class="container-fluid size">
    
    <div class="container">
        <div class="row">
        <div class="col-md-4"><img src="img/about1.jfif" alt="Our Vission" class="rounded float-left img-fluid"></div>
        <div class=" tm col-md-6">
            <h2 class="text-center">Our Vission</h2>
            <hr class="red-bar">
            <p>
                Blood donation is healthy for our body because it makes our blood less viscose which will help in combating cardiovascular and other diseases. 38% of the population all over the world is capable of donating blood; however, less than 10% do so. There are many people who die because of shortage of blood while undergoing treatment. 
            </p>
            <p>
                Every year on the 14th of June World Blood Donor Day is celebrated to encourage blood donation and appreciate or thank the blood donors all over the world. 
            </p>
        </div>
    </div>
    </div>
</div>

<div class="container-fluid white size">
    <div class="container ">
    <div class="container">
        <div class="row ">
        <div class="col-md-6">
            <h2 class="text-center">Our Goal</h2>
            <hr class="red-bar">
            <p>
                The goals of World Blood Donor Day are: 
            </p>
            <p>
                To raise awareness that individuals can save lives and improve the health of others by donating blood.
To encourage people to donate blood voluntarily without compensation.
To support the operation of safe and reliable blood services. 
            </p>
        </div>
        <div  class="col-md-4"><img src="img/about2.jpeg" alt="Our Vission" class="rounded img-fluid float-right"></div>
    </div>
    </div>      
</div>
</div>
    

    <div class="container-fluid size">
        <div class="container">
        <div class="row">
        <div class="col-md-4"><img src="img/about3.jpeg" alt="Our Vission" class="rounded float-left img-fluid"></div>
        <div class=" td col-md-6">
            <h2 class="text-center">Our Mission</h2>
            <hr class="red-bar">
            <p>
                To enhance the well being of patients in our service area by assuring a reliable and economical supply of the safest possible blood, by providing innovative hemotherapy services, and by promoting research and education programs in transfusion medicine. 
            </p>
        </div>
    </div>
    </div>
    </div>



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
    <a href="#" class="fa fa-facebook"></a>
  </p>
  <p>
  <a href="#" class="fa fa-instagram"></a>
  </p>
  <p>
  <a href="#" class="fa fa-twitter"></a>
  </p>
  <p>
  <a href="#" class="fa fa-google"></a>
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