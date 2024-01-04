<?php
include('connect.php');

if(isset($_POST['sub']))
{
    $stname = $_POST['studentname']; // Changed '$_' to '$_POST'
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "INSERT INTO aidmn(stname, email, password) VALUES ('$stname','$email', '$password')";
    $result = mysqli_query($conn, $qry);

    if($result)
    {
        header("location: signup.php");
    } 
    else
    {
        echo "Error: "; // You should display the specific error message for debugging purposes.
    }
    mysqli_close($conn);
}
?>
