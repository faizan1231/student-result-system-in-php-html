<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: gray;
        }
        .button {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <center>
        <h1>Student Result</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $rollnumber = $_POST['rno'];
            $classname = $_POST['classname'];
            $paper1 = $_POST['p1'];
            $paper2 = $_POST['p2'];
            $paper3 = $_POST['p3'];
            $paper4 = $_POST['p4'];
            $paper5 = $_POST['p5'];

            $marks = $paper1 + $paper2 + $paper3 + $paper4 + $paper5;
            $average = $marks / 5;
        ?>
        
        <table>
           
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Roll Number</td>
                <td><?php echo $rollnumber; ?></td>
            </tr>
        
            <tr>
                <td>Class Name</td>
                <td><?php echo $classname; ?></td>
            </tr>
            </table>
            <table>
            <tr>
                <th><s>Subjects</s></th>
                <th>Numbers</th>
            </tr>
            <tr>
                <td>Paper 1</td>
                <td><?php echo $paper1; ?></td>
            </tr>
            <tr>
                <td>Paper 2</td>
                <td><?php echo $paper2; ?></td>
            </tr>
            <tr>
                <td>Paper 3</td>
                <td><?php echo $paper3; ?></td>
            </tr>
            <tr>
                <td>Paper 4</td>
                <td><?php echo $paper4; ?></td>
            </tr>
            <tr>
                <td>Paper 5</td>
                <td><?php echo $paper5; ?></td>
            </tr>
            <tr>
                <td>Total Marks</td>
                <td><?php echo $marks; ?></td>
            </tr>
            <tr>
                <td>Average</td>
                <td><?php echo $average; ?></td>
            </tr>
        </table>

        <?php }
         ?>
      
        <div class="button">
            <button class="btn btn-info" onclick="window.print()">Print Result</button>
        </div>
        
    </center>
</body>
</html>
