<?php include('adminheader.php'); ?>
<?php include('adminsidebar.php'); ?>

<?php
$id =1;
$job = "SELECT * FROM `admin` WHERE `id`=" . $id;
$result = mysqli_query($conn, $job);
$data = mysqli_fetch_assoc($result);
?>
<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Profile</h2>
    </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="./dashboard.php">Home</a></li>
        <li class="breadcrumb-item active">Profile</li>
    </ul>
</div>
<!-- Forms Section-->
<section class="forms">
    <div class="container-fluid">
        <div class="row">

            <!-- Form Elements -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-close">
                        <div class="dropdown">
                            <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                            <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                        </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                        <a href="javascript:void(0)" onclick="history.back()">
                            <h3 class="h4"><i class="fa fa-arrow-left"></i> Back</h3>
                        </a>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="../main.php" class="form-horizontal">
                            <input type="hidden" name="id" value="<?= $id; ?>" class="form-control">
                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Name" name="name" value="<?= $data['name']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" placeholder="Email" value="<?= $data['username']; ?>" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="Password" placeholder="Password" name="password" id="pass" class="form-control">
                                </div>
                            </div>
                            <div class="line"></div>

                            <div class="form-group row">
                                <label class="col-sm-3 form-control-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="Password" placeholder="Password" name="con_password" id="con_pass" class="form-control">
                                </div>
                            </div>
                            <div class="line"></div>


                            <div class="form-group row">
                                <div class="col-sm-4 offset-sm-3">
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <button type="submit" name="update_job" id="update_btn" class="btn btn-primary">Update changes</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('adminfooter.php'); ?>