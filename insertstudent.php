<?php
include('connect.php');


if(isset($_POST['add']))
{
    $studentname=$_POST['studentname'];
    $fathername=$_POST['fathername'];
    $rollnumber=$_POST['rollnumber'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $class=$_POST['class'];
    $dob=$_POST['dob'];

    $qry ="INSERT INTO tblstudent(stname,ftname,rollnumber,email,gender,class,dob) VALUES ('$studentname','$fathername','$rollnumber','$email','$gender','$class','$dob')";
    $result= mysqli_query($conn,$qry);
    if($result)
    {
        header("location: addstudent.php");

    } 
    else
    {
        echo "error";
    }
    mysqli_close($conn);
}
?>