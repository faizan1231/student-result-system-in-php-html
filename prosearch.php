<?php
include("connect.php");

// Fetch data based on search query
if(isset($_GET['search'])) {
    $search = $_GET['search'];

    $sql = "SELECT * FROM subjects WHERE subjectname LIKE '%$search%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Subject Name</th>
                <!-- Add other columns as needed -->
            </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['subjectname']."</td>
                <!-- Add other columns as needed -->
            </tr>";
        }
        echo "</table>";
    } else {
        echo "No results found.";
    }
}

$conn->close();
?>

