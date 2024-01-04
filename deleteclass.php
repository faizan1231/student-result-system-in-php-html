<?php
 include('connect.php');
 $id=$_GET['id'];
$qry= "DELETE FROM tblclass WHERE id = '$id'";
$result=mysqli_query($conn, $qry);
if($result)
{
  header("location: viewclass.php");

}
else{
    echo "error";
}

mysqli_close($conn);
 ?>