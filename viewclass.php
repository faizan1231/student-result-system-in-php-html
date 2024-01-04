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
        <h1 style="color: gray"> <b>Class List </b></h1>
            <table class="table table-striped table-responsive table-secondary">
                <tr>
             <td class="table-info"><b> Id </b></td>
             <td class="table-warning"> <b>Class Name </b></td>
             <td class="table-warning"> <b>Session </b></td>   

             <td class="table-warning"><b> Action </b></td>
                </tr>
                <?php
                  $qry="SELECT * FROM tblclass";
                  $result=mysqli_query($conn,$qry);
                  if(mysqli_num_rows($result)>0)
                  {
                     while($row= mysqli_fetch_assoc($result))
                     {
                        echo "<tr>";
                        echo "<td>". $row['id']."</td>";
                        echo "<td>". $row['classname']."</td>";
                       echo "<td>". $row['session']."</td>";
                       
                      
                       echo "<td>
                        <a href='deleteclass.php?id=".$row['id']." 'class='btn btn-danger'> Delete</a>;
                        <a href='editeclass.php?id=".$row['id']." 'class='btn btn-danger'> Update </a>
                        </td>";
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