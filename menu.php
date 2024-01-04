<!DOCTYPE html>
<html>

<head>

    <title>Home</title>
</head>

<body  >

    <nav class="navbar navbar-expand-lg navbar-light bg-primary"style=' background: url(back2.jpg); background-position: fix;
    background-size: cover;'>
        <div class="container-fluid">
            <a href="#" class="navbar-brand  ">
                <img src="people.png" height="28" alt="studentbrand"><b>Student Management System</b>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="dashboard.php" class="nav-item nav-link active link-danger"> <h5><b>Home</b></h5></a>
                    <li class="nav-item dropdown">
                        <a class=" nav-link dropdown-toggle link-danger" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                         <h6> <b> Students</b> </h6>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item link-warning" href="addstudent.php"><b>Add Student</b></a></li>
                            <li><a class="dropdown-item link-success" href="viewstudent.php"><b>Manage Student</b></a></li>    
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-danger" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <h6><b>Classes</b></h6>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item link-danger" href="addclass.php"><b>Add Class</b></a></li>
                            <li><a class="dropdown-item link-warning" href="viewclass.php"><b>Manage Class</b></a></li>    
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-danger" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                          <h6> <b> Subjects</b></h6>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item link-info" href="addsubject.php"><b>Add Subject</b></a></li>
                            <li><a class="dropdown-item link-danger" href="viewsubject.php"><b>Manage Subject</b></a></li>    
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-danger" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                         <h6>  <b> Result</b></h6>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item link-info" href="addresult.php"><b>Add Result</b></a></li>
                            <li><a class="dropdown-item link-danger" href="viewresult.php"><b>Manage Result</b></a></li>    
                        </ul>
                    </li>
                </div>
                <div class="navbar-nav ms-auto">
                    <button class="btn btn-outline-danger"><a href="logout.php"
                            class="nav-item nav-link"><b>Logout</b></button></a>
                </div>
            </div>
          
        </div>
       
        
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>