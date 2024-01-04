<?php
  include('menu.php');
   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <center>
    <h1>Student Result</h1>
    <form action="result.php" method="post">
      
       
        <div class="container">
        <label for="name"><b>Student Name:<b></label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="rno">Roll Number:</label>
        <input type="text" name="rno" id="rno" required><br><br>
        <label for="class">Class</label>
        <?php
                    include("connect.php");
                    

                    $select_class_query="SELECT `classname` from `tblclass`";
                    $class_result=mysqli_query($conn,$select_class_query);
                    //select class
                    echo '<select name="classname">';
                    echo '<option selected disabled>Select Class</option>';
                    
                        while($row = mysqli_fetch_array($class_result)) {
                            $display=$row['classname'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';                      
                ?><br><br>

        
        <label for="p1">Subject 1:</label>
        <input type="number" name="p1" id="p1" required><br><br>

        <label for="p2">Subject 2:</label>
        <input type="number" name="p2" id="p2" required><br><br>

        <label for="p3">Subject 3:</label>
        <input type="number" name="p3" id="p3" required><br><br>

        <label for="p4">Subject 4:</label>
        <input type="number" name="p4" id="p4" required><br><br>
        
        <label for="p5">Subject 5:</label>
        <input type="number" name="p5" id="p5" required><br><br>
        <input type="submit" name="add" value="Submit">
                      </div>
    </form>
                      </center>
</body>
</html>

<?php
// Include the database connection
include('connect.php');

if(isset($_POST['add'])) {
    // Escape user inputs to prevent SQL injection
    $name =  $_POST['name'];
    $rno = $_POST['rno'];
    $classname =  $_POST['classname'];
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



