<?php include('adminheader.php'); ?>
<?php include('adminsidebar.php'); ?>

<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Create New Job</h2>
  </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active">Create New Job</li>
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
            <h3 class="h4">All form elements</h3>
          </div>
          <div class="card-body">
            <form method="POST" action="../main.php" class="form-horizontal">

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Job Title</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="Job Title" name="job_title" class="form-control">
                </div>
              </div>
              <div class="line"></div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Qualification</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="B.Tech, ,B.Sc., MBA" name="qualification" class="form-control">
                </div>
              </div>
              <div class="line"></div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Location</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="location" name="location" class="form-control">
                </div>
              </div>
              <div class="line"></div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Experience</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="Minimum 1 year experience required." name="experience" class="form-control">
                </div>
              </div>
              <div class="line"></div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Salary</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="10k-15k" name="salary" class="form-control">
                </div>
              </div>
              <div class="line"></div>


              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Job Type</label>
                <div class="col-sm-9">

                  <div class="i-checks">
                    <input id="radioCustom1" type="radio" value="1" name="job_type" class="radio-template">
                    <label for="radioCustom1">Part Time</label>
                  </div>

                  <div class="i-checks">
                    <input id="radioCustom2" type="radio" value="2" name="job_type" class="radio-template">
                    <label for="radioCustom2">Full Time</label>
                  </div>

                  <div class="i-checks">
                    <input id="radioCustom3" type="radio" value="0" name="job_type" class="radio-template">
                    <label for="radioCustom3">Both</label>
                  </div>

                </div>
              </div>
              <div class="line"></div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Other Description</label>
                <div class="col-sm-9">
                  <textarea name="job_desc" placeholder="Test"><p><strong>Skill Required:-</strong></p><ol><li>Write here</li></ol><p><strong>Role and Responsibilities:-</strong></p><ul><li>Write Here</li></ul><p><strong>Benefits:-</strong></p><ol><li>Write Here</li></ol></textarea>
                </div>
              </div>
              <div class="line"></div>

              <div class="form-group row">
                <div class="col-sm-4 offset-sm-3">
                  <button type="reset" class="btn btn-secondary">Reset</button>
                  <button type="submit" name="save_job" class="btn btn-primary">Save changes</button>
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