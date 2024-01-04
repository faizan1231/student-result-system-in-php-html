<?php
  include('log.php');
  
  ?>
<?php
if (!isset($_SESSION)) {
    session_start();
  }
  
  
  if (isset($_SESSION['login'])) {
  
    header("Location: dashboard.php");
    exit();
  }
?>
<!DOCTYPE html>
<html>

<head>

    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <style>
           .card {
                 width: 300px;
                  height: 460px;
                  border-radius: 40px;
                  background: #e0e0e0;
                  box-shadow: 15px 15px 30px black,
                  -15px -15px 30px black;
                margin: 50px;
  }
         </style>
            <script>
        function togglePassword() {
            var passwordField = document.getElementById("passwordField");
            var toggleCheckbox = document.getElementById("showPassword");

            if (toggleCheckbox.checked) {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</head>

<body class=" bg-dark">
     <center>
      <div class="text-white">
      <h2> <b> STUDENT RESULT MANAGEMENT SYSTEM </b> </h3></div>
    <div class="card bs-bg-opacity:">
               
        
            <div class="mb-3">
            <img src="login.png" height="110" alt="loginbrand"><br></div>
            <h1 class="text-center text-info  mb-3">
                <b> Login </b> <div class="spinner-grow text-warning"style="width: 2rem; role="status>
                    <span class="visually-hidden">Loading...</span>
                </div> 
            </h1>
            <form method="post" action="">
                <div class="mb-3">
                    <label class="form-lable ">Email</lable>
                    <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    <input type="email" class="form-control border-success" name="email">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                       Please enter valid Email.
                        </div>
                </div>
                <div>
                <label for="passwordField" class="form-lable ">Password:</label>
                      <input type="password" id="passwordField"class="form-control border-success " name="password">
   
                      <input type="checkbox" id="showPassword" onclick="togglePassword()">
                      <label for="showPassword">Show Password</label>
                       </div><br>
                <div>
                    <button type="submit" class="btn btn-outline-info" name="subb"> Login</button>
                </div>
                   
                <div class="dropdown-divider"></div>
                <p>New around here?<a class="dropdown-item-right" href="signup.php"> Sign up</a></p>
                <a class="dropdown-item-right" href="maindash.php">Go Back</a>
    </div>
    </form>
    
    </div>
 </center>
</body>
</html>
