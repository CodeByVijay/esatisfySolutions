<?php include('adminheader.php'); ?>
<?php include('adminsidebar.php'); ?>

<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">Feedback</h2>
    </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
        <li class="breadcrumb-item active">Feedback</li>
    </ul>
</div>

<section class="feedback">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center text-primary">Feedback/Contact-us Data</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="feedbackTable">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i =1;
                            $feedback = "SELECT * FROM `contact_us`";
                            $result = mysqli_query($conn, $feedback);
                            while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $data['name']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['phone']; ?></td>
                                    <td><?php echo $data['subject']; ?></td>
                                    <td><?php echo $data['message']; ?></td>
                                    <td><a href="../main.php?feedback-delete=<?= $data['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure delete this feedback.')"><i class="fa fa-trash-o"></i></a></td>
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