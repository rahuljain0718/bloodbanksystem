<!DOCTYPE html>
<html lang="en">
<head>
  <!-- <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>  -->
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>
    <style>
      

        .my_card_css {
            background-color: #00FFFF;
            margin:90px 0px 0px 160px;
            padding:0px 0px 0px 0px;
        }

        .slide{
            margin-top:0px;
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

.line h1{
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
  padding-top:40px;
}
.line2 p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
  padding-left:50px;
  padding-right:50px;
  margin-bottom:90px;
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
	
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
            
 

       
        @media (min-width:10px) and (max-width: 1366px){
         .my_card_css{
            
            padding-bottom:12px;
            margin-bottom:29px;
            margin-right:auto;
            margin-left:auto;


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
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
                   session_start(); 
                ?>
  <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container">
 	 <a class="navbar-brand" href="#"style="color:lightblue" >Blood Bank System</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="main_nav">
	

	<ul class="navbar-nav ms-auto">
		<li class="nav-item"><a class="nav-link" style="color:red; font-size:20px;" href="index.php"> Home </a></li>
		<li class="nav-item"><a class="nav-link" style="color:red; font-size:20px;"href="AboutUs2.php"> About Us</a></li>
		<li class="nav-item"><a class="nav-link" style="color:red;font-size:20px;"href="contact1.php"> Contact </a></li>
		<li class="nav-item"><a class="nav-link" style="color:red; font-size:20px;"href="register1.php">Register </a></li>
		<li class="nav-item"><a class="nav-link" style="color:red;font-size:20px;"href="login1.php">Login</a></li>
	
	</ul>

  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>


    <div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Contact Us</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>

<div class="container text-center">
		<div class="row">
        <div class="col-md-3"><img src="img/ico2.jpg" alt="Our Vission" class="rounded float-left img-fluid"></div>
		<div class="col-md-6">
			<hr class="red-bar text-center">
			<p>
               swapnashilpa housing society<br>
                676 north kasba balives near kasba peth,pune 413007<br>
                phone : +91991249432<br>
                &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;   +91911238929<br>
                Email : rahuljain0718@gmail.com      
			</p>
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