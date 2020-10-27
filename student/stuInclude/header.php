<?php
include('../dbConnection.php');
if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['is_login'])){
    $stuLogEmail = $_SESSION['stuLogEmail'];
} 
// else {
//     echo "<script> location.href='../index.php'; </script>";
// }
if(isset($stuLogEmail)){
    $sql = "SELECT stu_img FROM student WHERE stu_email = '$stuLogEmail'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stu_img = $row['stu_img'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet"> 
    <!-- custome css -->
    <link rel="stylesheet" href="../css/stustyle.css">   

</head>
<body>
<!-- Top Navbar -->
<nav class="navbar navbar-dark fixed-top fiex-md-nowrap p-0 shadow" style="background-color: #225470;">
    <a href="../index.php" class="navbar-brand col-sm-3 col-md-2 mr-0">Quikly Learner <small class="text-white">Student Area</small></a>
</nav>

<!-- Side Bar -->
<div class="container-fluid mb-5" style="margin-top:40px;">
    <div class="row">
        <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item mb-3">
                        <img src="<?php echo $stu_img ?>" alt="studentimage" class="img-thumbnail rounded-circle">
                    </li>
                    <li class="nav-item">
                        <a href="studentProfile.php" class="nav-link <?php if(PAGE == 'profile') { echo 'active';} ?>">
                            <i class="fas fa-user"></i>
                            Profile <span class="sr-only">(current)</span>
                        </a>
                    </li>  
                    <li class="nav-item">
                        <a href="myCourse.php" class="nav-link">
                            <i class="fab fa-accessible-icon"></i>
                            Courses
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a href="stufeedback.php" class="nav-link">
                            <i class="fab fa-accessible-icon"></i>
                            Feedback
                        </a>
                    </li>  
                    <li class="nav-item">
                        <a href="studentChangePass.php" class="nav-link">
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