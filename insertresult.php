<?php
// Include the database connection
include('connect.php');

if(isset($_POST['add'])) {
    // Escape user inputs to prevent SQL injection
    $name =  $_POST['name'];
    $rno = $_POST['rno'];
    $classname =  $_POST['class'];
    $paper1 =  $_POST['p1'];
    $paper2 =  $_POST['p2'];
    $paper3 =  $_POST['p3'];
    $paper4 =  $_POST['p4'];
    $paper5 = $_POST['p5'];

    // Calculate total marks and percentage
    $marks = $paper1 + $paper2 + $paper3 + $paper4 + $paper5;
    $percentage = $marks / 5;

    // Prepare and execute SQL query
    $qry = "INSERT INTO results (name, rno, class, p1, p2, p3, p4, p5, marks, percentage) VALUES ('$name','$rno','$classname','$paper1','$paper2','$paper3','$paper4','$paper5','$marks','$percentage')";
    $result = mysqli_query($conn, $qry);

    // Check if the query was successful
    if($result) {
        // Redirect to the addresult.php page after successful insertion
        header("location: addresult.php");
        exit(); // Ensure to stop further execution after redirection
    } else {
        // Display an error message if the query fails
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
