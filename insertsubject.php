<?php
include('connect.php');


if(isset($_POST['add']))
{
   
    $subjectname=$_POST['subjectname'];
    $subjectcode=$_POST['subjectcode'];
    
    $qry ="INSERT INTO subjects(subjectname,subjectcode) VALUES ('$subjectname','$subjectcode')";
    $result= mysqli_query($conn,$qry);
    if($result)
    {
        header("location: addsubject.php");

    } 
    else
    {
        echo "error";
    }
    mysqli_close($conn);
}
?>