<?php
   include('menu.php');
   ?>
<!DOCTYPE html>
<html>

<head>

    <title>Addclass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style=' background: url(class.jpg); background-position: fix;
    background-size: ;'>

    <center>
        <div class="container " >
        
            <form method="post"  >
            <div class="row">
                <h2><img src="presentation.gif" height="100" alt="bookbrand"> <b>Add Class </b> </h2>

                <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                    <label class="form-lable"><b>Class Name:</b></lable>
                        <input type="text" class="form-control" name="classname" requried>
                        <p> bsab,bsml,etc</p>
                </div>

                <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                    <label class="form-lable"><b>Session:</b></lable>
                        <input type="text" class="form-control" name="session">
                </div>
               
                <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                    <button type="submit" class="btn btn-outline-success" name="add"><b>Save</b></button>
                </div>
           </div>
         </form>
    </center>
  
</body>

</html>

<?php
include('connect.php');


if(isset($_POST['add']))
{
   
    $classname=$_POST['classname'];
    $session=$_POST['session'];
   

    $qry ="INSERT INTO tblclass(classname,session) VALUES ('$classname','$session')";
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