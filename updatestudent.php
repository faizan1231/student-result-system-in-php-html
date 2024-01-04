<?php
include('connect.php');


if(isset($_POST['add']))
{
    $id=$_POST['id'];
    $studentname=$_POST['studentname'];
    $fathername=$_POST['fathername'];
    $rollnumber=$_POST['rollnumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $class=$_POST['class'];
    $dob=$_POST['dob'];

    $qry ="UPDATE tblstudent SET stname='$studentname',ftname='$fathername',rollnumber='$rollnumber',email='$email',gender='$gender',class='$class',dob='$dob' WHERE id='$id'";
    $result= mysqli_query($conn,$qry);
    if($result)
    {
        header("location: viewstudent.php");

    } 
    else
    {
        echo "error";
    }
    mysqli_close($conn);
}
?>