<?php
 include('connect.php');
 $id=$_GET['id'];
$qry= "DELETE FROM tblstudent WHERE id = '$id'";
$result=mysqli_query($conn, $qry);
if($result)

{
    header("location: viewstudent.php");

}
else{
    echo "error";
}

mysqli_close($conn);
 ?>