<?php
  include('menu.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Subject</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body  style=' background: url(subject.jpg); background-position: fix;
    background-size: cover;'>>
    <div class="shadow p-3 mb-5 ">
        <div class="container  ">
            <span class="border border-warning  border-5">
                <form method="post">
                    <h2 style="color: white;"><img src="book.gif" height="100" alt="bookbrand"><b>Add Subject</b></h2>
                    <div class="row">
                        <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                            <label class="form-label"><b>Subject Name:</b></label>
                            <input type="text" class="form-control" name="subjectname" placeholder="Enter subject name"
                                required>
                        </div>
                      
                        <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                            <label class="form-label"><b>Subject2:</b></label>
                            <input type="text" class="form-control" name="subject2" placeholder="Enter subject name"
                                required>
                        </div>
                        <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                            <label class="form-label"><b>Subject3:</b></label>
                            <input type="text" class="form-control" name="subject3" placeholder="Enter subject name"
                                required>
                        </div>
                        <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                            <label class="form-label"><b>subject4:</b></label>
                            <input type="text" class="form-control" name="subject4" placeholder="Enter subject name"
                                required>
                        </div>
                        <div class=" w-40 p-3 col-md-6 mb-3 bg-dark text-white border border-success p-2 mb-2">
                            <label class="form-label"><b>Subject5:</b></label>
                            <input type="text" class="form-control" name="subject5" placeholder="Enter subject name"
                                required>
                        </div>
                    </div>
                    <div class="p-3 mb-2">
                        <button type="submit" class="btn btn-outline-info" name="add"><b>Save</b></button>
                    </div>
                </form>
            </span>
        </div>
    </div>
    <?php
   include('footer.php');
   ?>
</body>

</html>
<?php
include('connect.php');


if(isset($_POST['add']))
{
   
    $subjectname=$_POST['subjectname'];
    $subject2=$_POST['subject2'];
    $subject3=$_POST['subject3'];
    $subject4=$_POST['subject4'];
    $subject5=$_POST['subject5'];
    
    $qry ="INSERT INTO subjects(subjectname,subject2,subject3,subject4,subject5) VALUES ('$subjectname','$subject2','$subject3','$subject4','$subject5')";
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