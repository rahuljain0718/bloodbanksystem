<?php
include_once 'server.php';
if(count($_POST)>0) {
mysqli_query($db,"UPDATE register_table set  id='".$_POST['id']."',name='" . $_POST['name'] . "', username='" . $_POST['username'] . "',email='" . $_POST['email'] . "',password='" . $_POST['password'] . "' WHERE id='" .$_SESSION['id'] . "'");
header('location: index1.php');
$message = "Record Modified Successfully";
}
$result = mysqli_query($db,"SELECT * FROM register_table WHERE id='" .$_SESSION['id'] . "'")   or die( mysqli_error($db));;

$row= mysqli_fetch_array($result);



?>












<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css>
 


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <style>
  body {
    background-image: url("img/rahul4.jpg");
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8;
   
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none;
   
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 18px;
    padding-right:2px;
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
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


















<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div class="container rounded bg-primary mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center ">
                    <h4 class="text-right" style="color:chartreuse">Profile Settings</h4>

                    <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
                </div>


                <div class="row mt-3">
                    <div class="col-md-12" style="text-align:center"><label class="labels">Name:</label>
                    <input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
                </div>
                    
                </div>

                <div class="row mt-3">
                  <div class="col-md-12" style="text-align:center"><label class="labels">Email ID: </label>
                  <input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
                  </div>
                </div>

              <div class="row mt-3">
                <div class="col-md-12" style="text-align:center"><label class="labels">Username: </label>
                <input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>">
                </div>
              </div>


              <div class="row mt-3">
                <div class="col-md-12" style="text-align:center"><label class="labels">Password: </label>
                <input type="password" name="password" class="txtField" value="<?php echo $row['password']; ?>">
                </div>
              </div>

             <div class="mt-5 text-center">
               <button name="submit" class="btn btn-primary profile-button" type="submit">Save Profile</button>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">


</form>



</body>
</html>






















