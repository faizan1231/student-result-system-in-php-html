<?php
include('connect.php');
include('menu.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>View Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            padding-right: 0px;
        }

        h1 {
            font-family: 'Times New Roman';
            color: gray;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1><b>Result List</b></h1>
        <nav class="navbar bg-body-tertiary">
      <?php
      include('search.php');
      ?>
        </nav>
        <table class="table table-striped table-responsive table-secondary">
            <tr>
                <th class="table-primary "  scope="col">Id</th>
                <th class="table-danger"  scope="col">Student Name</th>
                <th class="table-primary" scope="col">Roll Number</th>
                <th class="table-danger" scope="col">Class</th>
                <th class="table-primary" scope="col">Paper1</th>
                <th class="table-danger" scope="col">Paper2</th>
                <th class="table-primary" scope="col">Paper3</th>
                <th class="table-danger" scope="col">Paper4</th>
                <th class="table-primary" scope="col">Paper5</th>
                <th class="table-danger" scope="col">Marks</th>
                <th class="table-primary" scope="col">Percentage</th>
                <th scope="col">Action</th>
            </tr>

            <?php
            
            $qry = "SELECT * FROM results";
            $result = mysqli_query($conn, $qry);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['rno'] . "</td>";
                    echo "<td>" . $row['class'] . "</td>";
                    echo "<td>" . $row['p1'] . "</td>";
                    echo "<td>" . $row['p2'] . "</td>";
                    echo "<td>" . $row['p3'] . "</td>";
                    echo "<td>" . $row['p4'] . "</td>";
                    echo "<td>" . $row['p5'] . "</td>";
                    echo "<td>" . $row['marks'] . "</td>";
                    echo "<td>" . $row['percentage'] . "</td>";

                    
                    echo "<td>
                            <a href='deleteresult.php?id=" . $row['id'] . "' class='btn btn-warning'>Delete</a>
                            <a href='editresult.php?id=" . $row['id'] . "' class='btn btn-danger'>Update</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No records found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>
