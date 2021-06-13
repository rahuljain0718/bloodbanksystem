<!DOCTYPE html>
<html>

<head>
    <!-- <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>  -->
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
      

        .icon_class {
            height: 60px;
            padding-right: 20px;
        }

        .dropdown-menu{
          margin-left: -29px;
        }
       
        .my_card_css {
            background-color: #00FFFF;
        }
        body{
            background-image: url("img/rahul4.jpg");
        }
            
      
   
    
    </style>
</head>


<body>
 
   

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


<?php
    include "server.php";
?> 


    <div class="container mt-5">
        <div class="jumbotron">
        <h3 class="text-center" style="color:brown">____________Donate Blood_____________</h3>
        <h3 class="text-center">Its pleasant so your helping nature</h3>
        <br>
 
        
          

            <form name="registation" method="POST" action="">
                <div class="form-row">
               

                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" name="name" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Age(Your age must be 18 and above):</label>
                        <input type="number" name="age" class="form-control" id="inputPassword4" min="18" max="60" required>
                    </div>
                </div> 

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Address:</label>
                        <input type="text" name="address" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">City:</label>
                        <input type="text" name="city" class="form-control" id="inputPassword4" value="Pune" readonly> 
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                       <label for="inputEmail4">10 digit mobile number:</label>
                       <input type="tel" name="phone" class="form-control" id="inputEmail4" pattern="[0-9]{10}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Email:</label>
                        <input type="email" name="email" class="form-control" id="inputPassword4" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="bloodgroup">Blood Group:</label>
                        <select name="bloodgroup" class="form-control form-control-md" required>
                            <option readonly>Chooose your blood</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                          </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Gender</label>
                        <select name="gender" class="form-control form-control-md" required>
                            <option readonly>Chooose your gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                          </select>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Height:(in inch)</label>
                        <input name="height" type="number" step="0.01" min="0" max="10"class="form-control" id="inputEmail4" required>

                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Weight:(in kgs)</label>
                        <input name="weight" type="number" class="form-control" id="inputEmail4" required>
                    </div>
               </div>

                <button type="submit" name="submit" class="btn btn-info btn-lg btn-block">Submit</button>
            </form>
        </div>
    </div>

<?php
  if(isset($_POST['submit']))
  {   
      $count=0;
      $sql="SELECT phone from `donate_table`";
      $res=mysqli_query($db,$sql);
      
      while($row=mysqli_fetch_assoc($res))
      {  
         if($row['phone']==$_POST['phone'])
         {
             $count=$count+1;
         }
      }
      if($count==0)
      {
    mysqli_query($db,"INSERT INTO `donate_table` VALUES('$_POST[name]','$_POST[age]','$_POST[address]','$_POST[city]','$_POST[phone]','$_POST[email]','$_POST[bloodgroup]','$_POST[gender]','$_POST[height]','$_POST[weight]');");
  ?>
  <script type="text/javascript">
    window.location = "submit_blood_form.php";
  </script>
<?php

  }
  else
  {
 ?>
    <script type="text/javascript">
      alert("The phone number already exists");
   </script> 
   <?php
   }
}
  ?>

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