<?php
 include('connect.php');
if (isset($_POST['subb'])) {
    

    $email = $_POST['email'];
   $Password = $_POST['password'];

    $sql = "SELECT * FROM aidmn WHERE email = '$email' AND password = '$Password'";
     $result = mysqli_query($conn, $sql);

     if (mysqli_num_rows($result) > 0){
        session_start();
      $_SESSION['login']=true;
      $_SESSION['email']=$email;
      header("Location:dashboard.php");
      
      
       
    } else {
        echo "Invalid email or password:";
       
    }

    mysqli_close($conn);
}
?>
