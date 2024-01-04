<?php
include('connect.php');


if(isset($_POST['add']))
{
    $id=$_POST['id'];
    $classname=$_POST['classname']; 
    $session=$_POST['session'];
    
    $qry ="UPDATE tblclass SET classname='$classname',session='$session'WHERE id='$id'";
    $result= mysqli_query($conn,$qry);
    if($result)
    {
        header("location: viewclass.php");

    } 
    else
    {
        echo "error";
    }
    mysqli_close($conn);
}
?>