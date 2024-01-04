<?php
include('connect.php');


if(isset($_POST['add']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $rollnumber=$_POST['rno'];
    $class = $_POST['class'];
    $paper1 = $_POST['p1'];
    $paper2 = $_POST['p2'];
    $paper3 = $_POST['p3'];
    $paper4 = $_POST['p4'];
    $paper5 = $_POST['p5'];
    $marks = $_POST['marks'];
    $percentage = $_POST['percentage'];
    
    $qry ="UPDATE results SET  name='$name',rno='$rollnumber',class='$class',p1='$paper1',p2='$paper2',p3='$paper3',p4='$paper4',p5='$paper5',marks='$marks', percentage =' $percentage 'WHERE id='$id'";
    $result= mysqli_query($conn,$qry);
    if($result)
    {
        header("location: viewresult.php");

    } 
    else
    {
        echo "error";
    }
    mysqli_close($conn);
}
?>