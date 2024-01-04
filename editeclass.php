<?php
include('connect.php');
include('menu.php');

$id=$_GET['id'];
$qry= "SELECT * FROM tblclass WHERE id = '$id'";
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

                <h1> Edit Class</h1>
                <form method="post" action="updateclass.php">
                    <div>

                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                    </div>
                    <div>
                        <label class="form-group">Class Name</lable>
                            <input type="text" class="form-control" name="classname"
                                value="<?php echo $row['classname'] ?>">
                    </div>
                   
                    <div>
                        <label class="form-lable">Session</lable>
                            <input type="text" class="form-control" name="session"
                                value="<?php echo $row['session'] ?>">
                    </div>
                     <br>
                    <div>
                        <button type="submit" class="btn btn-outline-primary" name="add"> Update</button>
                    </div>
                </form>
                <center>
        </div>

    </div>
</body>

</html>