        <!-- Page Footer-->
        <footer class="main-footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <p>Test Footer &copy; 2017- <?= date('Y'); ?></p>
                <!-- <p> Esatisfy Solutions Private Limited &copy; 2017- <?= date('Y'); ?></p> -->
              </div>
              <div class="col-sm-6 text-right">
                <p>Design by <a href="http://rkitechdigital.com/" class="external"> Test Footer</a></p>
                <!-- <p>Design by <a href="http://rkitechdigital.com/" class="external"> Rkitech Digital Solutions</a></p> -->
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </footer>
        </div>
        </div>
        </div>
        <!-- JavaScript files-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper.js/umd/popper.min.js"> </script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
        <script src="js/charts-home.js"></script>
        <!-- Main File-->
        <script src="js/front.js"></script>

        <!-- Datatable -->
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

        <!-- CKeditor -->
        <script src="https://cdn.ckeditor.com/4.20.0/standard-all/ckeditor.js"></script>

        <script>
          //  Active Class 
          $('.click').on('click', function() {
            $('.click').removeClass('active');
            $(this).addClass('active');
          })
          //  Active Class 

          //  Feedback Datatable 
          $(document).ready(function() {
            $('#feedbackTable').DataTable({
              dom: 'Bfrtip',
              buttons: [
                'excel', 'pdf', 'print'
              ]
            });
          });
          //  Feedback Datatable End 

          // Create new job ckeditor
          CKEDITOR.replace('job_desc');
        </script>

        </body>

        </html>