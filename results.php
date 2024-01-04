<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
</head>
<body>
    <center>
        <h1>Student Result</h1>

        <?php
        function validateGrade($marks) {
            if ($marks >= 64 && $marks < 80) {
                return 'A';
            } elseif ($marks >= 53 && $marks < 63) {
                return 'B';
            } elseif ($marks >= 39 && $marks < 52) {
                return 'C';
            } elseif ($marks >= 30 && $marks < 38) {
                return 'D';
            } elseif ($marks >= 0 && $marks < 25) {
                return 'F';
            } else {
                return 'Invalid Grade';
            }
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST['name'];
            $rollnumber = $_POST['rno'];
            $classname = $_POST['classname'];
            $paper1 = $_POST['p1'];
            $paper2 = $_POST['p2'];
            $paper3 = $_POST['p3'];
            $paper4 = $_POST['p4'];
            $paper5 = $_POST['p5'];

            // Validate grades for each paper
            $grade1 = validateGrade($paper1);
            $grade2 = validateGrade($paper2);
            $grade3 = validateGrade($paper3);
            $grade4 = validateGrade($paper4);
            $grade5 = validateGrade($paper5);

            // Display student details, marks, and grades
            echo "<p>Name: $name</p>";
            echo "<p>Roll Number: $rollnumber</p>";
            echo "<p>Class Name: $classname</p>";

            echo "<table border='1'>";
            echo "<tr><th>Subject</th><th>Numeric Marks</th><th>Grade</th></tr>";
            echo "<tr><td>Paper 1</td><td>$paper1</td><td>$grade1</td></tr>";
            echo "<tr><td>Paper 2</td><td>$paper2</td><td>$grade2</td></tr>";
            echo "<tr><td>Paper 3</td><td>$paper3</td><td>$grade3</td></tr>";
            echo "<tr><td>Paper 4</td><td>$paper4</td><td>$grade4</td></tr>";
            echo "<tr><td>Paper 5</td><td>$paper5</td><td>$grade5</td></tr>";
            echo "</table>";

            // Calculate and display total marks and average
            $marks = $paper1 + $paper2 + $paper3 + $paper4 + $paper5;
            $average = $marks / 5;
            echo "<p>Total Marks: $marks</p>";
            echo "<p>Average Marks: $average</p>";
        } else {
            // If form is not submitted, display a message or redirect to the form
            echo "<p>Please submit the form to view the result.</p>";
            // Alternatively, you can redirect to the form page using header() function
            // header("Location: your_form_page.php");
            // exit();
        }
        ?>
    </center>
</body>
</html>
