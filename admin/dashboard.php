<?php include('adminheader.php'); ?>
<?php include('adminsidebar.php'); ?>
<?php
$job = "SELECT count(`id`) as count FROM `jobs`";
$job_res = mysqli_query($conn,$job);
$jobs = mysqli_fetch_array($job_res);
$feedback = "SELECT count(`id`) as count FROM `contact_us`";
$feedback_res = mysqli_query($conn,$feedback);
$feedbacks = mysqli_fetch_array($feedback_res);
?>
<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Dashboard</h2>
    </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ul>
</div>

<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-lg-4">
                <div class="card">
                    <div class="card-body pt-4">
                        <h1 class="text-center text-primary">Total Jobs</h1>
                        <h5 class="text-center text-success"><?= $jobs['count']; ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4">
                <div class="card">
                    <div class="card-body pt-4">
                        <h1 class="text-center text-primary">Total Feedback</h1>
                        <h5 class="text-center text-success"><?= $feedbacks['count']; ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-lg-4">
                <div class="card">
                    <div class="card-body pt-4">
                        <h1 class="text-center text-primary">Total Applied Job Users</h1>
                        <h5 class="text-center text-success">0</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('adminfooter.php'); ?>