<!-- Start include header -->
<?php
include('./dbconnection.php');
include('./maininclude/header.php');
?>
<!-- End include header -->

<!-- Start Video Background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted Loop style="height:700px; width:100%; object-fit:cover;">
            <source src="video/Laptop.mp4">
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to Quickly Learner</h1>
        <small class="my-content">Learn and Implement</small> <br><br>

        <?php
            if(!isset($_SESSION['is_login'])){
                echo '<a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
            } else {
                echo '<a class="btn btn-primary mt-3" href="student/studentProfile.php">My Profile</a>';
            }
        ?>     
    </div>
</div>
<!-- End Video Background -->

<!-- Start Text Banner -->
<div class="container-fluid bg-danger text-banner">
    <div class="row bottom-banner">
    <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee*</h5>
        </div>
    </div>
</div>
<!-- End Text Banner -->

<!-- Start Most Popular Course -->
<div class="container mt-5">
    <h1 class="text-center">Popular Course</h1>
    <!-- Start Most Popular Course 1st Card Deck -->
    <div class="card-deck mt-4">
    <?php
        $sql = "SELECT * FROM course LIMIT 3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                echo '<a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
                            <div class="card">
                                <img src="'. str_replace('..','.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['course_name'].'</h5>
                                        <p class="card-text">'.$row['course_desc'].'</p>
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
                                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                                    </div>
                            </div>
                        </a>';
            }
        }


    ?>
    </div>
    <!-- End Most Popular Course 1st Card Deck -->

    <!-- Start Most Popular Course 2st Card Deck -->
    <div class="card-deck mt-4">
    <?php
        $sql = "SELECT * FROM course LIMIT 3, 3";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                echo '<a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin:0px;">
                            <div class="card">
                                <img src="'. str_replace('..','.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['course_name'].'</h5>
                                        <p class="card-text">'.$row['course_desc'].'</p>
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
                                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                                    </div>
                            </div>
                        </a>';
            }
        }


    ?>
        
    </div>
    <!-- End Most Popular Course !st Card Deck -->
    <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="courses.php">View All Course</a>
    </div>
</div>
<!-- End Most Popular Course -->

<!-- Start Contact Us -->
<?php
include('./contact.php');
?>
<!-- End Contact Us -->

<!-- Start Social Follow -->
<div class="container-fluid bg-danger">
    <div class="row text-white text-center p-1">
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-facebook"></i>Facebook</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i>Twitter</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>Whatsapp</a>
        </div>
        <div class="col-sm">
            <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a>
        </div>
    </div>
</div>
<!-- End Social Follow -->



<!-- Start include Footer -->
<?php
include('./maininclude/footer.php');
?>
<!-- End include Footer -->