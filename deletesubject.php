<?php
 include('connect.php');
 $id=$_GET['id'];
$qry= "DELETE FROM subjects WHERE id = '$id'";
$result=mysqli_query($conn, $qry);
if($result)
{
  header("location: viewsubject.php");

}
else{
    echo "error";
}

mysqli_close($conn);
 ?>