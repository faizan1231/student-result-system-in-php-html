<!DOCTYPE html>
<html>

<head>

    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <style>
           .card {
                 width: 300px;
                  height: 410px;
                  border-radius: 50px;
                  background: url(images.jpg);
                  background-position: fix;
                  background-size: cover;
                  box-shadow: 15px 15px 30px black,
                  -15px -15px 30px black;
                 margin: 50px;
                 
           }
           .body{
            background: url(images.jpg);
                  background-position: fix;
                  background-size: cover;
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

<body style="background: MediumSeaGreen;">
      <center>
    <div class="card text-warning">
        <div class="row">

            <h1 class="text-center text-warning  mb-3">
                <b> signup </b> <div class="spinner-grow text-primary"style="width: 2rem; role="status">
                    <span class="visually-hidden">Loading...</span>
                </div> 
            </h1>
            <center>
                <form method="post" action="config.php">

                    <div class="mb-3">
                        <label class="form-lable"><b>Student Name<b></lable>

                            <input type="text" class="form-control" name="studentname" placeholder="Enter the name"
                                required>
                    </div>
                    <div class="mb-3">
                        <label class="form-lable">Email</lable>
                            <input type="email" class="form-control" name="email" placeholder="Enter the email"
                                required>
                    </div>
                    <div>
                <label for="passwordField" class="form-lable ">Password:</label>
                      <input type="password" id="passwordField"class="form-control" name="password">
   
                      <input type="checkbox" id="showPassword" onclick="togglePassword()">
                      <label for="showPassword">Show Password</label>
                       </div><br>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-warning" name="sub">Register</button>
                    </div>
                   
                    <p>if You have an account?  <a class="dropdown-item-right" href="index.php">Login</a></p>
                </form>
         
        </div>
   </center>
</body>

</html>