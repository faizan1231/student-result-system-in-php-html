<?php
  include('menu.php');
?>
<!DOCTYPE html>
<html>
<head>

    <title>Addstudents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style=' background: url(student.jpg); background-position: fix;
    background-size: cover;'>>
    <center>
    <div class="login-container ">
        <form method="post">
        <div class="row">
            <h2 style="color: red;"><img src="student.png" height="100" alt="studentbrand"> <b>Add Student </b> </h2>
            <div>
            
                <label class="form-lable text-warning" ><b>Student Name:</b></lable>
                <input type="text" class="form-control" name="studentname" required>
                <div class="valid-feedback">
                 Looks good!
                  </div>
            </div>
            <div class="mb-3">
                <label class="form-lable text-primary"><b>Father Name:</b></lable>
                <input type="text" class="form-control" name="fathername" required>
            </div>
            <div class="mb-3">
                <label class="form-lable text-primary"><b>Roll Number:</b></lable>
                <input type="text" class="form-control" name="rollnumber" required>
            </div>
            <div class="mb-3">
                <label class="form-lable text-primary"><b>Email:</b></lable>
                <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                <input type="email" class="form-control" name="email">
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Please choose a username
                </div>
            </div>
            <div class="mb-3">
                <label class="form-lable text-primary"><b>Password:</b></lable>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div>
            <div class="mb-3">
                <label for="default" class="col-sm-2 control-label text-primary" ><b>Gender:</b></label>
                <div class="col-sm-10">
                                
                   <input type="radio" name="gender" value="Male" required="required"><b>Male</b> 
                   <input type="radio" name="gender"value="Female" required="required" checked><b>Female</b> 
                   <input type="radio" name="gender" value="Other" required="required"> <b>other<b>
                            
                </div>
                <div class="mb-3">
                <label class="form-lable text-primary" ><b>class:<b></lable>
                <input type="select" class="form-control" name="class" required>
                  </div>
                  <div class="mb-3">
                  <label class="form-lable text-primary" r><b>DOB:</b></lable>
                <input type="date" class="form-control" name="dob" required>
            </div>
            <div>
                    <button type="submit" class="btn btn-outline-danger" name="add"><b>Save</b></button>
                 </div>
           </div>
        </form>
        
    </div>
</center>

</body>

</html>

<?php
include('connect.php');

if (isset($_POST['add'])) {
  $studentname = $_POST['studentname'];
  $fathername = $_POST['fathername'];
  $rollnumber = $_POST['rollnumber'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];
  $class = $_POST['class'];
  $dob = $_POST['dob'];

  $qry = "INSERT INTO tblstudent (stname, ftname, rollnumber, email, password, gender, class, dob) VALUES ('$studentname', '$fathername', '$rollnumber', '$email', '$password', '$gender', '$class', '$dob')";
  $result = $conn->query($qry);

  if ($result) {
    echo "<script>alert('Student Added Successfully');</script>";
     header("location: addstudent.php");
  } else {
    echo "error";
  }
  mysqli_close($conn);
}
?>
