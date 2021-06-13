<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, fixed, after scrolling page, navbar, menu CSS examples" />
<meta name="description" content="Bootstrap 5 fixed navbar on scroll page examples, Bootstrap 5" />  

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
		
		window.addEventListener('scroll', function() {
	       
			if (window.scrollY > 50) {
				document.getElementById('navbar_top').classList.add('fixed-top');
				// add padding top to show content behind navbar
				navbar_height = document.querySelector('.navbar').offsetHeight;
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
			 	document.getElementById('navbar_top').classList.remove('fixed-top');
				 // remove padding top from body
				document.body.style.paddingTop = '0';
			} 
		});
	}); 
	// DOMContentLoaded  end
</script>










    <!-- <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
      
        .icon_class {
            height: 60px;
            padding-right: 20px;
        }

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
.col{
    padding-top:70px;
}
.imgh{
    margin-left:auto;
    margin-right: auto;
    margin-bottom:30px;
}
body {
    background-color: #ecf0f1;
    width: 100%;
    overflow-x: hidden;
}
.red{
  padding-top:30px;
  padding-bottom:20px;
}
.white-bar{
	height: 3px;
	width: 100%;
	color: red;
	background-color: red;
}
.btn-default{
	color: #e74c3c;;
	border-radius: 25px;
	padding: 10px 30px;
 margin-left: 35%;
	font-size: 22px;
	font-weight: 700;
  background-color:#fff;
 
 

}

.btn-default:hover{
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}

       
        @media (min-width:400px) and (max-width: 1366px){
         .my_card_css{
            
            padding-bottom:12px;
            margin-bottom:29px;
            margin-right:auto;
            margin-left:auto;

        }
       
      }
       
        @media (max-width:966px){
         
        .btn-default{
          margin-left:11%;
        }
        }


        .carousel-item {
  height: 450px;
}

.item img {
    position: absolute;
    top: 0;
    left: 0;
    min-height: 300px;
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
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
  
    


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
















    
    
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/rahul4.jpg" class="d-block w-100" alt="..." style="height: 500px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Blood Donation</h5>
          <p>Your little effort can give some one other chance to live life</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/rahul3.jpg" class="d-block w-100" alt="..." style="height: 500px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Blood Donation</h5>
          <p>Your little effort can give some one other chance to live life</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/banner1.jpg" class="d-block w-100" alt="..." style="height: 500px;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Blood Donation</h5>
          <p>Your little effort can give some one other chance to live life</p>
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

  
  <div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: black; font-weight: 700;padding: 50px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.

							We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
            </p>
            

					
					</div>
				</div>
			</div>
			
			<!-- end doante section -->
			
            <div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Our Vission</h3>
								<img src="img/about1.jfif" alt="Our Vission" class="imgh img-responsive" width="168" height="168">
								<p class="text-center">
                Blood donation is healthy for our body because it makes our blood less viscose which will help in combating cardiovascular and other diseases. 38% of the population all over the world is capable of donating blood; however, less than 10% do so. There are many people who die because of shortage of blood while undergoing treatment. 
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Our Goal</h3>
								<img src="img/about2.jpeg" alt="Our Vission" class="imgh img-responsive" width="168" height="168">
								<p class="text-center">
								To raise awareness that individuals can save lives and improve the health of others by donating blood.
To encourage people to donate blood voluntarily without compensation.
To support the operation of safe and reliable blood services. 
            </p>
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Our Mission</h3>
								<img src="img/about3.jpeg" alt="Our Vission" class="imgh img-responsive" width="168" height="168">
								<p class="text-center">
                To enhance the well being of patients in our service area by assuring a reliable and economical supply of the safest possible blood, by providing innovative hemotherapy services, and by promoting research and education programs in transfusion medicine. 
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>


   
    
    <div class="line">
        <h1>Whats Our Aim?</h1>
    </div>
    <div class="line2">
        <p>To connect the people with same blood group with the help of there information.Be a hero, A real hero in someone’s life. There are various myths surrounding the blood donation activities. Actual awareness and right information can really benefit both the donor and recipient. Come forward and join the hands in this initiative.Donating blood is one of the greatest ways to help humankind. By doing so, we save someone’s precious life, and that is a blessing in itself. There are people who hesitate to donate blood if they aren’t given monetary returns or because of the various myths surrounding it.</p>
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
  <!-- Footer -->
    <!-- 
    <div class=container>
        <h2>BLOOD DONATION</h2>
        <h3>Yor little effort can give others second chance to live life<h3>
    </div>
    </div>
    <div id="main boxes">
        <div class="boxes">
            <a href="donate">
                <h2>Donate</h2>
            </a>
        </div>
        <div class="box">
            <a href="search">
                <h2>Search Donors</h2>
            </a>
        </div>
    </div>
    <div class="line">
        <h1>Whats Our Aim?</h1>
    </div>
    <div class="line2">
        <p>To connect the people with same blood group with the help of there information</p>
    </div>
    <div class="footer">
        <h2>About Us</h2>
        <p>To help people who are not able to get<br><br> blood because of covid-19 lockdown.<br><br>help people to get
            blood by various people</p>
    </div>
    <div></div>
    <div class="footer2">
        <div class="head">
            <h2>Get In Touch</h2>
            <p>676 north kasba balives,solapur-413007</p>
            <p>Contact No- +9191124565</p>
            <p>rahuljain2961@gmail.com</p>
            <form action="/home.html" method="post">
                <label for=subscirbe>
                    <h2>Subscribe</h2>
                </label>
                <br>
                <input type="text" name="meal">
                <br>
                <button class=button>Subscribe</button>
            </form>
        </div>
    </div> -->
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