<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet"> 
    <!-- custome css -->
    <link rel="stylesheet" href="../css/adminstyle.css">   

</head>
<body>
<!-- Top Navbar -->
<nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
    <a href="adminDashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0">Quickly Learner <small class="text-white">Admin Area</small></a>
</nav>

<!-- Side Bar -->
<div class="container-fluid mb-5" style="margin-top:40px;">
    <div class="row">
        <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="adminDashboard.php" class="nav-link">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                        </a>
                    </li>  
                    <li class="nav-item">
                        <a href="courses.php" class="nav-link">
                            <i class="fab fa-accessible-icon"></i>
                            Courses
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a href="lessons.php" class="nav-link">
                            <i class="fab fa-accessible-icon"></i>
                            Lessons
                        </a>
                    </li>  
                    <li class="nav-item">
                        <a href="students.php" class="nav-link">
                            <i class="fas fa-user"></i>
                            Student
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="sellReport.php" class="nav-link">
                            <i class="fas fa-table"></i>
                            Sell Report
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="adminPaymentStatus.php" class="nav-link">
                            <i class="fas fa-table"></i>
                            Payment Status
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a href="feedback.php" class="nav-link">
                            <i class="fab fa-accessible-icon"></i>
                            Feedback
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="adminChangePass.php" class="nav-link">
                            <i class="fas fa-key"></i>
                            Change Password
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a href="../logout.php" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </li>                
                </ul>
            </div>
        </nav>