<?php
 include('connect.php');
 $id=$_GET['id'];
$qry= "DELETE FROM results WHERE id = '$id'";
$result=mysqli_query($conn, $qry);
if($result)
{
  header("location: viewresult.php");

}
else{
    echo "error";
}

mysqli_close($conn);
 ?>