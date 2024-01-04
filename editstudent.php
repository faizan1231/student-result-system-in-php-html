<?php
include('connect.php');
include('menu.php');

$id=$_GET['id'];
$qry= "SELECT * FROM tblstudent WHERE id = '$id'";
$result=mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>

<head>

    <title>Update</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
    h1 {
        background: #666666;
        color: white;
    }

    form {
        color: white;
    }
    </style>

</head>

<body class=" bg-warning-subtle">
              <center>
    <div class="container">
    <div class="row">


            <h1> Edit User</h1>
            <form method="post" action="updatestudent.php">
            <div class="row">
                <div>

                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                </div>
                <div class=" w-40 p-3 col-md-5 mb-3 bg-warning text-white border border-warning p-2 mb-3">
                    <label class="form-group">Student Name</lable>
                        <input type="text" class="form-control" name="studentname" value="<?php echo $row['stname'] ?>">
                </div>
                <div class=" w-40 p-3 col-md-5 mb-3 bg-info text-white border border-danger p-2 mb-2">
                    <label class="form-lable">Father Name</lable>
                        <input type="text" class="form-control" name="fathername" value="<?php echo $row['ftname'] ?>">
                </div>
                <div class=" w-40 p-3 col-md-5 mb-3 bg-info text-white border border-warning p-2 mb-2">
                    <label class="form-lable">Roll Number</lable>
                        <input type="text" class="form-control" name="rollnumber"
                            value="<?php echo $row['rollnumber'] ?>">
                </div>
                <div class=" w-40 p-3 col-md-5 mb-3 bg-dark text-white border border-danger p-2 mb-2">
                    <label class="form-lable">Email</lable>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                </div>
                <div class=" w-40 p-2 col-md-5 mb-4 bg-info text-white border border-warning p-4 mb-4">
                    <label class="form-lable">Gender</lable>
                        <input type="text" class="form-control" name="gender" value="<?php echo $row['gender'] ?>">
                </div>
                <div class=" w-40 p-2 col-md-5 mb-3 bg-dark text-white border border-danger p-4 mb-4">
                    <label class="form-lable">class</lable>
                        <input type="text" class="form-control" name="class" value="<?php echo $row['class'] ?>">
                </div>
                <div class=" w-40 p-3 col-md-5 mb-3 bg-info text-white border border-warning p-2 mb-2">
                    <label class="form-lable">DOB</lable>
                        <input type="date" class="form-control" name="dob" value="<?php echo $row['dob'] ?>">
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-danger" name="add"> Update</button>
                </div>
              </div>
            </form>
        </div>

    </div>
</center>
</body>

</html>