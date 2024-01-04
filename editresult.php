<?php
include('connect.php');
include('menu.php');

$id=$_GET['id'];
$qry= "SELECT * FROM results WHERE id = '$id'";
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
                <h1> Edit Result</h1>
                <form method="post" action="updateresult.php">
                <div class="row">
                    <div>

                        <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                    </div>
                    <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                        <label class="form-group">Student Name</lable>
                            <input type="text" class="form-control" name="name"
                                value="<?php echo $row['name'] ?>">
                    </div>

                    <div class=" w-40 p-3 col-md-6 mb-3 bg-blue text-white border border-success p-2 mb-2">
                        <label class="form-lable">Roll Number</lable>
                            <input type="text" class="form-control" name="rno"
                                value="<?php echo $row['rno'] ?>">
                    </div>
                    <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                        <label class="form-lable">Class</lable>
                            <input type="select" class="form-control" name="class"
                                value="<?php echo $row['class'] ?>">
                    </div>
                    <div class=" w-40 p-3 col-md-6 mb-3 bg-blue text-white border border-success p-2 mb-2">
                        <label class="form-lable">Paper1</lable>
                            <input type="text" class="form-control" name="p1"
                                value="<?php echo $row['p1'] ?>">
                    </div>
                    <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                        <label class="form-lable">Paper2</lable>
                            <input type="text" class="form-control" name="p2"
                                value="<?php echo $row['p2'] ?>">
                    </div>
                    <div class=" w-40 p-3 col-md-6 mb-3 bg-blue text-white border border-success p-2 mb-2">
                        <label class="form-lable">Paper3</lable>
                            <input type="text" class="form-control" name="p3"
                                value="<?php echo $row['p3'] ?>">
                    </div>
                    <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                        <label class="form-lable">Paper4</lable>
                            <input type="text" class="form-control" name="p4"
                                value="<?php echo $row['p4'] ?>">
                    </div>
                    <div class=" w-40 p-3 col-md-6 mb-3 bg-blue text-white border border-success p-2 mb-2">
                        <label class="form-lable">Paper5</lable>
                            <input type="text" class="form-control" name="p5"
                                value="<?php echo $row['p5'] ?>">
                    </div>
                    <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                        <label class="form-lable">Marks</lable>
                            <input type="text" class="form-control" name="marks"
                                value="<?php echo $row['marks'] ?>">
                    </div>
                    <div class=" w-40 p-3 col-md-6 mb-3 bg-blue text-white border border-success p-2 mb-2">
                        <label class="form-lable"> Prcentage </lable>
                            <input type="text" class="form-control" name="percentage"
                                value="<?php echo $row['percentage'] ?>">
                    </div>
                      
                      
                    <div>
                        <button type="submit" class="btn btn-outline-warning" name="add"> Update</button>
                    </div>
                 </div>
                </form>
                <center>
        </div>

    </div>
</body>

</html>