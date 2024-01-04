<?php
include('connect.php');
include('menu.php');

$id=$_GET['id'];
$qry= "SELECT * FROM subjects WHERE id = '$id'";
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

<body>

    <div class="container">
        <div class="row">

            <center>
                <h1> Edit Subject</h1>
                <form method="post" action="updatesubject.php">
                    <div>

                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                    </div>
                    <div>
                        <label class="form-group">Subject Name</lable>
                            <input type="text" class="form-control" name="subjectname"
                                value="<?php echo $row['subjectname'] ?>">
                    </div>
                    <div>
                        <label class="form-lable">Subject Two</lable>
                            <input type="text" class="form-control" name="subject2"
                                value="<?php echo $row['subject2'] ?>">
                    </div>
                    <div>
                        <label class="form-lable">Subject Three</lable>
                            <input type="text" class="form-control" name="subject3"
                                value="<?php echo $row['subject3'] ?>">
                    </div>
                    <div>
                        <label class="form-lable">Subject Four</lable>
                            <input type="text" class="form-control" name="subject4"
                                value="<?php echo $row['subject4'] ?>">
                    </div>
                    <div>
                        <label class="form-lable">Subject Five</lable>
                            <input type="text" class="form-control" name="subject5"
                                value="<?php echo $row['subject5'] ?>">
                    </div>
                   
                    <div>
                        <button type="submit" class="btn btn-outline-info" name="add"> Update</button>
                    </div>
                </form>
                <center>
        </div>

    </div>
</body>

</html>