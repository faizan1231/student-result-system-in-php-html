<!DOCTYPE html>
<html>
<head>
   
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
            .form-container {
  max-width: 400px;
  background-color: #fff;
  padding: 32px 24px;
  font-size: 14px;
  font-family: inherit;
  color: #212121;
  display: flex;
  flex-direction: column;
  gap: 20px;
  box-sizing: border-box;
  border-radius: 10px;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.084), 0px 2px 3px rgba(0, 0, 0, 0.168);
}

.form-container button:active {
  scale: 0.95;
}

.form-container .logo-container {
  text-align: center;
  font-weight: 600;
  font-size: 18px;
}

.form-container .form {
  display: flex;
  flex-direction: column;
}

.form-container .form-group {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.form-container .form-group label {
  display: block;
  margin-bottom: 5px;
}

.form-container .form-group input {
  width: 100%;
  padding: 12px 16px;
  border-radius: 6px;
  font-family: inherit;
  border: 1px solid #ccc;
}

.form-container .form-group input::placeholder {
  opacity: 0.5;
}

.form-container .form-group input:focus {
  outline: none;
  border-color: #1778f2;
}

.form-container .form-submit-btn {
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: inherit;
  color: #fff;
  background-color: #212121;
  border: none;
  width: 100%;
  padding: 12px 16px;
  font-size: inherit;
  gap: 8px;
  margin: 12px 0;
  cursor: pointer;
  border-radius: 6px;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.084), 0px 2px 3px rgba(0, 0, 0, 0.168);
}

.form-container .form-submit-btn:hover {
  background-color: #313131;
}

.form-container .link {
  color: #1778f2;
  text-decoration: none;
}

.form-container .signup-link {
  align-self: center;
  font-weight: 500;
}

.form-container .signup-link .link {
  font-weight: 400;
}

.form-container .link:hover {
  text-decoration: underline;
}


            </style>
</head>
<body>
<center>
  <div align="center">
<div id="box">
<span class="formHeading">Welcome </span>
</div>
  </div>
    <div class="form-container">
      <div class="logo-container">
        <h1>Check Result Here </h1>
      </div>

      <form action="result.php" method="">
                <fieldset>
                    <legend class="heading">For Students</legend>

                    <?php
                        include('connect.php');

                        $class_result=mysqli_query($conn,"SELECT class FROM results");
                            echo '<select name="class">';
                            echo '<option selected disabled>Select Class</option>';
                        while($row = mysqli_fetch_array($class_result)){
                            $display=$row['class'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                        echo'</select>'
                    ?>

                    <input type="select" name="rno" placeholder="Roll No">
                    <input type="submit"  name="add" value="Get Result">
                </fieldset>
            </form>
      

       
      </div>
    <a href="maindash.php">Go Back</a>
  </div>

    </div>
    </center>

</body>
</html>
<?php

include('config.php');

if(isset($_POST['add']))
{
// Get login credentials from form
$classname = $_POST['class'];
$rollnumber = $_POST['rno'];

// Prepare SQL query to check user credentials
$sql = "SELECT * FROM results WHERE class = '$classname' AND rno = '$rollnumber'";
$result = mysqli_query($conn, $sql);

// Check if user exists and password matches
if (mysqli_num_rows($result) > 0) {
      session_start();
      $_SESSION['login']=true;
      $_SESSION['email']=$email;
      header("Location:result.php");
      
   
} else {
    // Invalid login credentials
    echo "Invalid email or password";
}

// Close connection
mysqli_close($conn);
}
?>