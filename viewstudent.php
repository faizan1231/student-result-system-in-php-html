<?php

include('connect.php');
include('menu.php');
  
?>
<!DOCTYPE html>
<html >
<head>
   
    <title>View data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container{
            
            padding-right: 0px;
            
        }
        h1{
            font-family: 'Times New Roman';
        }
        </style>
</head>
<body>
    <center>
    <div class="container">
        <h1 style="color: gray"> <b>Student List </b></h1>
            <table class="table table-striped table-hover table-responsive table-secondary  ">
                <tr class="table-success">
             <td class="table-success"><b> Id </b></td>
             <td class="table-info"> <b>Student Name </b></td>
             <td class="table-success"> <b>Father Name </b></td>
             <td class="table-info"> <b>Roll Number </b></td>
             <td class="table-success"><b> Email </b></td>
             <td class="table-info"><b> Gender </b></td>
             <td class="table-success"> <b>Class </b></td>
             <td class="table-info"> <b>DOB </b></td>
             <td class="table-success"><b> Action </b></td>
                </tr>
                <?php
                  $qry="SELECT * FROM tblstudent";
                  $result=mysqli_query($conn,$qry);
                  if(mysqli_num_rows($result)>0)
                  {
                     while($row= mysqli_fetch_assoc($result))
                     {
                        echo "<tr>";
                        echo "<td>". $row['id']."</td>";
                        echo "<td>". $row['stname']."</td>";
                        echo "<td>". $row['ftname']."</td>";
                        echo "<td>". $row['rollnumber']."</td>";
                        echo "<td>". $row['email']."</td>";
                        echo "<td>". $row['gender']."</td>";
                        echo "<td>". $row['class']."</td>";
                        echo "<td>". $row['dob']."</td>";
                        echo "<td> <a href='deletestudent.php?id=".$row['id']." 'class='btn btn-warning'> Delete</a>";
                        echo " <a href='editstudent.php?id=".$row['id']." 'class='btn btn-secondary'> Update</a></td>";
                        echo "</tr>";
                     }
                  }
                else{
                    echo "record not found";
                }
                ?>


       </table>
    </div>
            </center>
  </body>
 </html>