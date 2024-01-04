<?php
     include('menu.php');
     ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     
</head>

<body class='.bg-info-subtle'style=' background: url(back2.jpg); background-position: fix;
    background-size: cover;'>
    <?php
    include('connect.php');
    // Define the SQL query
$sql = "SELECT COUNT(*) AS total_complete_records FROM tblclass ";
// Execute the query
$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}

// Fetch the result
$row = $result->fetch_assoc();
$totalCompleteRecords = $row['total_complete_records'];


    ?>
    <div class="container-fluid">

        <h3 class='text-center text-decoration-underline'> <b>Student Result Mangement System</b></h3>
        <div class='row mt-5'>
            <div class="col-4 mt-4" style="width: 18rem;">
                <div class='card bg-warning'>
                    <div class='card-header bg-secondary'>
                        <h5> <b> classes</b> </h5>
                    </div>
                    <div class='card-body'>
                        <p class='card-text'>
                            <?php 
                                echo   $totalCompleteRecords;

                                 ?>
                        </p>
        
                    </div>
                </div>

            </div>

            <?php
    include('connect.php');
    // Define the SQL query
$sql = "SELECT COUNT(*) AS total_complete_records FROM tblstudent ";
// Execute the query
$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}

// Fetch the result
$row = $result->fetch_assoc();
$totalCompleteRecords = $row['total_complete_records'];


    ?>

            <div class="col-4 mt-4" style="width: 18rem;">

                <div class='card bg-body-tertiary'>
                    <div class="card-header bg-success ">
                        <h5> <b> Students</b> </h5>
                    </div>
                    <div class='card-body'>
                        <p class='card-text'>
                            <?php 
                                echo   $totalCompleteRecords;

                                 ?>
                        </p>

                    </div>

                </div>


            </div>
            <?php
    include('connect.php');
    // Define the SQL query
$sql = "SELECT COUNT(*) AS total_complete_records FROM subjects ";
// Execute the query
$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}

// Fetch the result
$row = $result->fetch_assoc();
$totalCompleteRecords = $row['total_complete_records'];

    ?>
            <div class="col-4 mt-4" style="width: 18rem;">
                <div class='card bg-danger -subtle'>
                    <div class="card-header bg-success-subtle">
                        <h5> <b> Subjects </b> </h5>
                    </div>
                    <div class='card-body'>
                        <p class='card-text'>
                            <?php 
                                echo   $totalCompleteRecords;

                                 ?>
                        </p>

                    </div>

                </div>

            </div>
            <?php
    include('connect.php');
    // Define the SQL query
$sql = "SELECT COUNT(*) AS total_complete_records FROM results ";
// Execute the query
$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}

// Fetch the result
$row = $result->fetch_assoc();
$totalCompleteRecords = $row['total_complete_records'];

    ?>
            <div class="col-4 mt-4  " style="width: 18rem;">
                <div class='card bg-info-subtle'>
                    <div class="card-header bg-danger-subtle">
                        <h5> <b> Results </b> </h5>
                    </div>
                    <div class='card-body'>
                        <p class='card-text'>
                            <?php 
                                echo   $totalCompleteRecords;

                                 ?>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
<?php
   include('footer.php');
   ?>

    
</body>

</html>
<?php

$conn->close();
?>