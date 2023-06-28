<?php
$id_reg = $_GET['status'];
$hasil = explode(" ", $id_reg);
$status = $hasil[0];
include 'header.php';?>
<?php include 'sidebar.php';
include '../koneksi.php';
$no_hp = $_SESSION['nohp'];

if ($status== "berkas_lengkap"){
    $status = "Berkas Lengkap";
?>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Review Formulir Berkas Lengkap</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                           
                        <tr>
                          <th>
                            ID Siswa Baru
                          </th>
                          <th>
                           Status 
                          </th>
                          <th>
                           Keterangan 
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                      <form method="post" id="review">
                        <td><?php echo $hasil[1]; ?> </td>
                        <td><?php echo $status; ?></td>
                        <td><input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"> </td>
                      </tr>
                          <tr>
                          <td><button name="berkas_lengkap" id="berkas_lengkap" class="btn-success" onClick='reply_click(this.id,"<?php echo $id_reg; ?>")'>Berkas Lengkap</button></td>
                          <td><button name='kurang_lengkap' id='kurang_lengkap' class='btn-warning' onClick='reply_click(this.id,"<?php echo $id_reg; ?>")'>Kurang Lengkap</button></td>
                          </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       

      <?php } 
      else { 
        $status = "Kurang Lengkap" ?>
        <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Review Formulir Kurang Lengkap</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                           
                        <tr>
                          <th>
                            ID Siswa Baru
                          </th>
                          <th>
                           Status 
                          </th>
                          <th>
                           Keterangan 
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <tr>
                      <form method="post" id="review">
                        <td><?php echo $hasil[1]; ?> </td>
                        <td><?php echo $status; ?></td>
                        <td><input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"> </td>
                      </tr>
                          <tr>
                          <td><button name="berkas_lengkap" id="berkas_lengkap" class="btn-success" onClick='reply_click(this.id,"<?php echo $id_reg; ?>")'>Berkas Lengkap</button></td>
                          <td><button name='kurang_lengkap' id='kurang_lengkap' class='btn-warning' onClick='reply_click(this.id,"<?php echo $id_reg; ?>")'>Kurang Lengkap</button></td>
                          </tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      <?php  include 'footer.php';?>
</div>
        </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../src/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../src/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../src/vendors/chart.js/Chart.min.js"></script>
  <script src="../src/vendors/select2/select2.min.js"></script>
  <script src="../src/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../src/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../src/js/off-canvas.js"></script>
  <script src="../src/js/hoverable-collapse.js"></script>
  <script src="../src/js/template.js"></script>
  <!-- <script src="../src/js/settings.js"></script> -->
  <script src="../src/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../src/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../src/js/dashboard.js"></script>
  <script src="../src/js/Chart.roundedBarCharts.js"></script>
  <script src="../src/js/file-upload.js"></script>
  <script src="../src/js/typeahead.js"></script>
  <script src="../src/js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>