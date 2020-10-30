<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" href="home.css">
    <script src="home.js"></script>  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
         body{
            background-image: url("img/rahul3.jpg");
        }
        .navbar-nav{
            padding-left: 300px;
         
        }
        .navbar-brand {
            font-size: 40px !important;
            font-family: 'Courier New', Courier, monospace !important;
            color: aquamarine !important;
            color:rgb(199, 27, 27);
        }
      
        .icon_class {
            height: 60px;
            padding-right: 20px;
        }
        .nav-item a {
            font-size: 25px !important;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(199, 27, 27) !important;
        }

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
            
        @media (min-width:10px) and (max-width: 1266px){
        
        .nav-link{
          margin-left:-120px;
        }
   
    }
    </style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
    <!-- <div class="topnav">
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">Eligiblity</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
            <li id="border" style="float:right"><a href="login.html">Login</a></li>
            <li id="border" style="float:right"><a href="/register/register.html">Register</a></li>
        </ul>

    </div> -->
    <?php 
                   session_start(); 
                ?>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
     <img src="img/ico.jpg" class="icon_class">
  <a class="navbar-brand" href="#">Blood bank System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="pricing.php">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.php">About Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profile
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="update-process.php">Edit profile</a>
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="index.php?logout='1'">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


<?php
include "connection2.php";
?> 

<div class="container"> 
<div class="jumbotron">
    <h3 class="text-center">Recive Blood</h3>
    <h3 class="text-center">Its pleasant so your helping nature</h3>
    <h3 class="text-center">Hope all wishes are completed</h3>

    <form method="post" name="registation" action="">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Patient Name</label>
                <input name="patient_name" type="text" class="form-control" id="inputEmail4" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Patient age:</label>
                <input name="age" type="number" class="form-control" id="inputPassword4" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Reference By:</label>
                <input name="reference_name" type="text" class="form-control" id="inputEmail4" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Hospital Name(Referenced By):</label>
                <input name="hospital_name" type="text" class="form-control" id="inputPassword4" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Collected By:</label>
                <input name="collected_name" type="text" class="form-control" id="inputEmail4" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Gender:</label>
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
                <label for="inputEmail4">10 digit mobile number:</label>
                <input name="tel" type="number" class="form-control" id="inputEmail4" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">City</label>
                <input name="city" type="text" class="form-control" id="inputPassword4" required>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Blood Group:</label>
                <select name="blood_grp" class="form-control form-control-md" required>
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
                <label for="inputEmail4">Required ml of Blood:</label>
                <input name="ml_required" type="text" class="form-control" id="inputEmail4" required>
            </div>
        </div>

        <button name="submit" type="submit" class="btn btn-info btn-lg btn-block">Submit</button>
    </form>
</div>
</div>

<?php
if(isset($_POST['submit']))
  {   
      $count=0;
      $sql="SELECT phone from `receive_table`";
      $res=mysqli_query($dbw,$sql);
      
      while($row=mysqli_fetch_assoc($res))
      {
         if($row['phone']==$_POST['phone'])
         {
             $count=$count+1;
         }
      }
      if($count==0)
      {
       mysqli_query($dbw,"INSERT INTO `receive_table` VALUES('$_POST[patient_name]','$_POST[age]','$_POST[reference_name]','$_POST[hospital_name]','$_POST[collected_name]','$_POST[gender]','$_POST[phone]',  '$_POST[city]','$_POST[blood_grp]','$_POST[ml_required]');");
    ?>
       <script type="text/javascript">
           window.location = "submited.php";
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