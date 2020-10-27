<!-- Start include header -->
<?php
include('./dbconnection.php');
include('./maininclude/header.php');
?>
<!-- End include header -->

<!-- Start course page banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/coursebanner.jpg" class="img-overlay" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">

    </div>

</div>
<!-- End course page banner -->


<!-- Start All Course -->
<div class="container mt-5">
    <h1 class="text-center">All Course</h1>
    <div class="row mt-4">
    <?php
        $sql = "SELECT * FROM course";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $course_id = $row['course_id'];
                echo '<div class="col-sm-4 mb-4">
                        <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px;">
                            <div class="card">
                                <img src="'. str_replace('..','.', $row['course_img']) .'" class="card-img-top" alt="Guitar" />
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['course_name'].'</h5>
                                        <p class="card-text">'.$row['course_desc'].'</p>
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small> <span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
                                        <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                                    </div>
                            </div>
                        </a>
                    </div>';
            }
        }


    ?>

    </div>
</div>
<!-- End All Course -->


<!-- Start include Footer -->
<?php
include('./maininclude/footer.php');
?>
<!-- End include Footer -->

