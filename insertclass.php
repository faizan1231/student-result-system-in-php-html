<?php
include('connect.php');


if(isset($_POST['add']))
{
   
    $classname=$_POST['classname'];
    $classnumaric=$_POST['classnumaric'];
    $session=$_POST['session'];
    $classstrength=$_POST['classstrength'];
    

    $qry ="INSERT INTO tblclass(classname,session) VALUES ('$classname','$classnumaric','$session','$classstrength')";
    $result= mysqli_query($conn,$qry);
    if($result)
    {
        header("location: addclass.php");

    } 
    else
    {
        echo "error";
    }
    mysqli_close($conn);
}
?>