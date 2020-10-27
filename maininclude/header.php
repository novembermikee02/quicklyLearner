<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome css -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet"> 
    <!-- custome css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Quickly Learner</title>
</head>
<body>
<!-- Start Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
  <a class="navbar-brand" href="index.php">Quickly Learner</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav custom-nav pl-5">
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="courses.php">Courses</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="paymentstatus.php">Payment status</a>
      </li>
      <?php
        session_start();
        if(isset($_SESSION['is_login'])){
          echo '<li class="nav-item custom-nav-item">
          <a class="nav-link" href="student/studentProfile.php">My Profile</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>';
        } else {
          echo '<li class="nav-item custom-nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a>
        </li>';
        }
      ?>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Feedback</a>
      </li>
      <li class="nav-item custom-nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<!-- End Navigation -->
