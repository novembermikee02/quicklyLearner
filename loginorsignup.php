<?php
include('./dbconnection.php');
include('./maininclude/header.php');
?>

<!-- Start course page banner -->
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/coursebanner.jpg" class="img-overlay" alt="courses" style="height:500px; width:100%; object-fit:cover; box-shadow:10px;">

    </div>

</div>
<!-- End course page banner -->

<div class="container jumbotron mb-5">
    <div class="row">
        <div class="col-md-4">
            <h5 class="mb-3">If Already Registered !! Login</h5>
            <!-- Start Student Login Form -->
            <form role="form" id="stuLoginForm">
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <label for="stuLogemail" class="pl-2 font-weight-bold">Email</label><small id="statusLogMsg1"></small>
                    <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
                </div>
                
                <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
            </form><br/>
            <small id="statusLogMsg"></small>
            <!-- End Student Login Form -->
        </div>
        <div class="col-md-6 offset-md-1">
            <h5 class="mb-3">New User !! Sign Up</h5>
            <!-- Start Student Registration Form -->
            <form role="form" id="stuRegForm">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="stuname" class="pl-2 font-weight-bold">Name</label>
                    <small id="statusMsg1"></small>
                    <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
                    <small id="statusMsg2"></small>
                    <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="stupass" class="pl-2 font-weight-bold">New Password</label>
                    <small id="statusMsg3"></small>
                    <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
                </div>
                
                <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
            </form><br/>
            <span id="successMsg"></span>
            <!-- End Student Registration Form -->
        </div>
    </div>

</div>
<hr/>

<?php
include('./contact.php');
?>

<!-- Start include Footer -->
<?php
include('./maininclude/footer.php');
?>
<!-- End include Footer -->
