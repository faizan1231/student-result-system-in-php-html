<?php
include('connect.php');


if(isset($_POST['add']))
{
    $id=$_POST['id'];
    $subjectname=$_POST['subjectname'];
    $subject2=$_POST['subject2'];
    $subject3=$_POST['subject3'];
    $subject4=$_POST['subject4'];
    $subject5=$_POST['subject5'];
    
    
    $qry ="UPDATE subjects SET subjectname='$subjectname',subject2='$subject2',subject3='$subject3',subject4='$subject4',subject5='$subject5'WHERE id='$id'";
    $result= mysqli_query($conn,$qry);
    if($result)
    {
        header("location: viewsubject.php");

    } 
    else
    {
        echo "error";
    }
    mysqli_close($conn);
}
?>