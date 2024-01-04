<?php
include('connect.php');
include('menu.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>View data</title>
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
        <h1><b>Subject List</b></h1>
        <nav class="navbar bg-body-tertiary">
      <?php
      include('search.php');
      ?>
        </nav>
        <table class="table table-striped table-responsive table-secondary">
            <thead>
            <tr>
                <th class="table-primary">Id</th>
                <th class="table-danger">Subject Name</th>
                <th class="table-primary">Subject Two</th>
                <th class="table-primary">Subject Three</th>
                <th class="table-primary">Subject Four</th>
                <th class="table-primary">Subject Five</th>
                <th>Action</th>
            </tr>
            <thead>
            <?php
            
            $qry = "SELECT * FROM subjects";
            $result = mysqli_query($conn, $qry);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['subjectname'] . "</td>";
                    echo "<td>" . $row['subject2'] . "</td>";
                    echo "<td>" . $row['subject3'] . "</td>";
                    echo "<td>" . $row['subject4'] . "</td>";
                    echo "<td>" . $row['subject5'] . "</td>";
                    
                    echo "<td>
                            <a href='deletesubject.php?id=" . $row['id'] . "' class='btn btn-info'>Delete</a>
                            <a href='editesubject.php?id=" . $row['id'] . "' class='btn btn-danger'>Update</a>
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
