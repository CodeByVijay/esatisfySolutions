<div class="page-content d-flex align-items-stretch">
  <!-- Side Navbar -->
  <nav class="side-navbar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="img/1.jpg" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h4"><?= $_SESSION['userName']; ?></h1>
        <p>Test Sidebar</p>
        <!-- <p>Esatisfy Solutions</p> -->
      </div>
    </div>
    <!-- Sidebar Navidation Menus<span class="heading">Main</span> -->
    <ul class="list-unstyled">
      <li class="click <?php if ($_GET['page'] == 'home' || !isset($_GET['page'])) {
                          echo "active";
                        } ?>"><a href="dashboard.php?page=home"> <i class="icon-home"></i>Home </a></li>

      <li class="click <?php if ($_GET['page'] == 'jobs' || $_GET['page'] == 'addjob') {
                          echo "active";
                        } ?>"><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Jobs </a>
        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
          <li class="<?php if ($_GET['page'] == 'jobs') {
                        echo "active";
                      } ?>"><a href="jobs.php?page=jobs"> <i class="fa fa-id-card"></i> All Jobs</a></li>
          <li class="<?php if ($_GET['page'] == 'addjob') {
                        echo "active";
                      } ?>"><a href="adminjobpost.php?page=addjob"> <i class="fa fa-plus"></i> Create New Job</a></li>
        </ul>
      </li>

      <li class="click <?php if ($_GET['page'] == 'feedback') {
                          echo "active";
                        } ?>"><a href="./feedback.php?page=feedback"> <i class="icon-mail"></i>Feedback </a></li>
    </ul>
  </nav>
  <div class="content-inner">
    <!-- Page Header-->