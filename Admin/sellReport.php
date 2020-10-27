<?php
if(!isset($_SESSION)){
    session_start();
}

include('./admininclude/header.php');
include('../dbConnection.php');

if(isset($_SESSION['is_admin_login'])){
    $adminEmail = $_SESSION['adminLogEmail'];
} else {
    echo "<script> location.href='../index.php'; </script>";
}
?>

<div class="col-sm-9 mt-5">
    <form action="" method="post" class="d-print-none">
        <div class="form-row">
            <div class="form-group col-md-2">
                <input type="date" class="form-control" id="startdate" name="startdate">
            </div> <span> to </span>
            <div class="form-group col-md-2">
                <input type="date" class="form-control" id="enddate" name="enddate">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-secondary" name="searchsubmit" value="Search">
            </div>
        </div>
    </form>
    <?php
        if(isset($_REQUEST['searchsubmit'])){
            $startdate = $_REQUEST['startdate'];
            $enddate = $_REQUEST['enddate'];

            $sql = "SELECT * FROM courseorder WHERE order_date BETWEEN '$startdate' AND '$enddate' ";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                echo '
                <p class="bg-dark text-white p-2 mt-4"> Details </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Course ID</th>
                            <th scope="col">Student Email</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Order Date</th>
                            <th scope="col">Amount</th>
                        </tr>
                    </thead>
                    <tbody>';
                        while($row = $result->fetch_assoc()){
                            echo '
                            <tr>
                                <th scope="row">'.$row["order_id"].'</th>
                                <th>'.$row["course_id"].'</th>
                                <th>'.$row["stu_email"].'</th>
                                <th>'.$row["status"].'</th>
                                <th>'.$row["order_date"].'</th>
                                <th>'.$row["amount"].'</th>
                            </tr>';
                        }
                        echo '
                            <tr>
                                <td>
                                    <form class="d-print-none">
                                        <input type="submit" class="btn btn-danger" value="Print" onclick="window.print()">
                                    </form>
                                </td>
                            </tr>
                    </tbody>
                </table>';
            } else {
                echo "<div class='alert alert-warning cal-sm-6 ml-5 mt-2' role='alert'> No Records Found !</div> ";
            }
        }

    ?>
</div>

</div> <!-- Div Row Close From Header -->
</div> <!-- Div Conatiner-fluid Close From Header -->

<?php
include('./admininclude/footer.php');
?>