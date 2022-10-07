<?php include('adminheader.php'); ?>
<?php include('adminsidebar.php'); ?>

        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">All Jobs</h2>
            </div>
        </header>
        <!-- Breadcrumb-->
        <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">All Jobs</li>
            </ul>
        </div>

    <section class="feedback">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center text-primary float-left">Jobs List</h3>
                    <a href="./adminjobpost.php" class="btn btn-success float-right"><i class="fa fa-plus"></i> Create New Job</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="feedbackTable">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Job Title</th>
                                    <th>Qualification</th>
                                    <th>Location</th>
                                    <th>Job Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i =1;
                            $jobs = "SELECT * FROM `jobs` ORDER BY `id` DESC";
                            $result = mysqli_query($conn, $jobs);
                            while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $data['job_title'] ?></td>
                                    <td><?= $data['qualification'] ?></td>
                                    <td><?= $data['location'] ?></td>
                                    <td><?php if($data['job_type'] == 1){echo "Part Time";}elseif($data['job_type']==2){echo "Full Time";}else{echo "Both";} ?></td>
                                    <td><a href="./viewJob.php?job=<?= $data['id']; ?>&page=jobs" class="btn btn-primary"><i class="fa fa-eye"></i></a>  <a href="./editJob.php?job=<?= $data['id']; ?>&page=jobs" class="btn btn-success"><i class="fa fa-edit"></i></a> <a href="../main.php?delete-job=<?= $data['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure delete this job.')"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
  
<?php include('adminfooter.php'); ?>