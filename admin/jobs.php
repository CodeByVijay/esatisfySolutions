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
                    <h3 class="text-center text-primary">Feedback Data</h3>
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
  
<?php include('adminfooter.php'); ?>