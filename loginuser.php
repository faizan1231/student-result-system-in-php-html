<?php
  include('log.php');
  ?>
<?php
if (!isset($_SESSION)) {
    session_start();
  }
  
  
  if (isset($_SESSION['login'])) {
  
    header("Location: userresult.php");
    exit();
  }
?>
<!DOCTYPE html>
<html>
<head>
   
    <title> User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <style>
           .card {
                 width: 300px;
                  height: 460px;
                  border-radius: 30px;
                  background: #e0e0e0;
                  box-shadow: 15px 15px 30px blue,
                  -15px -15px 30px blue;
                margin: 50px;
  }
  
            </style>
</head>
<body style=' background: url(bgimg.png); background-position: fix;
    background-size: cover;'>>
    <center>
<div class="card">
    <div class="mb-3">
            <img src="login.png" height="110" alt="loginbrand"><br></div>
            <h1 class="text-center text-info  mb-3">
                <b> Login User </b> <div class="spinner-grow text-primary"style="width: 2rem; role="status">
                    <span class="visually-hidden">Loading...</span>
                </div> 
            </h1>
            <form method="post" action="">
                <div class="mb-3">
                    <label class="form-lable ">Email</lable>
                    <div class="input-group has-validation">
                    <input type="email" class="form-control" name="email">
                        
                </div>
                
                <div class="mb-2">
                    <label class="form-lable">Password</lable>
                        <input type="text" class="form-control" name="password">
                       
                </div><br>
                
                <div>
                    <button type="submit" class="btn btn-outline-info" name="subb"> Login</button>
                </div>
                <div class="dropdown-divider"></div>
                <p>New around here?
                <a class="dropdown-item-right" href="index.php"> Singin</a></p>
                <a class="dropdown-item-right" href="maindash.php">Go Back</a>
           </div>
    </center>

</body>
</html>

<?php

include('connect.php');

if(isset($_POST['subb']))
{
// Get login credentials from form
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare SQL query to check user credentials
$sql = "SELECT * FROM tblstudent WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);

// Check if user exists and password matches
if (mysqli_num_rows($result) > 0) {
      session_start();
      $_SESSION['login']=true;
      $_SESSION['email']=$email;
      $id=$_POST['id'];
      header("Location:userresult.php?id='$id'");
      
   
} else {
    // Invalid login credentials
    echo "Invalid email or password";
}

// Close connection
mysqli_close($conn);
}
?>