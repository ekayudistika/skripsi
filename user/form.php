<?php include 'header.php';?>
<?php include 'sidebar.php';?>
<div class="main-panel">
 <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Input Data Pendaftaran (Data Ayah)</h2>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="form_action.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleInputUsername1"> Nama </label>
                      <input type="text" class="form-control" id="namaayah" name="namaayah" placeholder="Nama">
                    </div>
                    <div class="form-group"> 
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Tempat</label>
                                <input type="text" class="form-control" id="tempatayah" name="tempatayah" placeholder="Tempat">
                            </div>  
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Tangal Lahir</label>
                                <input type="date" class="form-control" id="tlayah" name="tlayah" placeholder="Tanggal">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaanayah"name="pekerjaanayah" placeholder="Pekerjaan">
                    </div>
          
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Pendidikan </label>
                      <input type="text" class="form-control" id="pendidikanayah" name="pendidikanayah" placeholder="Pendidkan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Penghasilan </label>
                      <input type="text" class="form-control" id="penghasilanayah"  name="penghasilanayah" placeholder="Penghasilan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> No Handphone</label>
                      <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $_SESSION['nohp'];?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Kebutuhan Khusus</label>
                      <input type="text" class="form-control" id="kebutuhankhususayah" name="kebutuhankhususayah" placeholder="Kebutuhan Khusus">
                    </div>
                    
                    
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input Data Pendaftaran (Data Ibu)</h4>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="form_action.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleInputUsername1"> Nama </label>
                      <input type="text" class="form-control" id="namaibu" name="namaibu" placeholder="Nama">
                    </div>
                    <div class="form-group"> 
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Tempat</label>
                                <input type="text" class="form-control" id="tempatibu" name="tempatibu" placeholder="Tempat">
                            </div>  
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Tangal Lahir</label>
                                <input type="date" class="form-control" id="tlibu" name="tlibu" placeholder="Tanggal">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Pekerjaan</label>
                      <input type="text" class="form-control" id="pekerjaanibu"name="pekerjaanibu" placeholder="Pekerjaan">
                    </div>
          
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Pendidikan </label>
                      <input type="text" class="form-control" id="pendidikanibu" name="pendidikanibu" placeholder="Pendidikan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Penghasilan </label>
                      <input type="text" class="form-control" id="penghasilanibu"  name="penghasilanibu" placeholder="Penghasilan">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Kebutuhan Khusus</label>
                      <input type="text" class="form-control" id="kebutuhankhususibu" name="kebutuhankhusibu" placeholder="Kebutuhan Khusus">
                    </div>
                    
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input Data Pendaftaran</h4>
                  <p class="card-description">
                  </p>
                  <form class="forms-sample" action="form_action.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleInputUsername1"> NIK (Calon Murid) </label>
                      <input type="text" class="form-control" id="nikcamur" name="nikcamur" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Nama Lengkap (Calon Murid Sesuai Akte) </label>
                      <input type="text" class="form-control" id="namalengkapcamur"name="namalengkapcamur" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                    <label  for="form-check-label"> Jenis Kelamin </label><br>
                      <div class="row">
                        <div class="col-md-3">
                          <input type="checkbox" class="form-check-input" id="jeniskelamin" name="jeniskelamin" value="lakilaki">
                          <label for="form-check-label"> Laki-Laki</label>
                        </div>
                        <div class="col-md-3">
                          <input type="checkbox" class="form-check-input" id="jeniskelamin" name="jeniskelamin" value="perempuan">
                          <label for="form-check-label"> Perempuan</label><br>
                        </div>
                      </div>
                    </div>
                    <div class="form-group"> 
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Tempat</label>
                                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat">
                            </div>  
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Tangal Lahir</label>
                                <input type="date" class="form-control" id="tl" name="tl" placeholder="Tanggal">
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Alamat Lengkap </label>
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Moda Transportasi </label>
                      <input type="text" class="form-control" id="modatransportasi"  name="modatransportasi" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> No Handphone</label>
                      <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $_SESSION['nohp'];?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Email </label>
                      <input type="text" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email'];?>" readonly>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                          <label for="exampleInputConfirmPassword1">Tinggi Badan</label>
                          <input type="text" class="form-control" id="tbanak" name="tbanak" placeholder="Tinggi badan (CM)"> 
                        </div>
                        <div class="col-md-6">
                          <label for="exampleInputConfirmPassword1">Berat Badan</label>
                          <input type="text" class="form-control" id="bbanak" name="bbanak" placeholder="Berat badan (Kg)"> 
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <label  for="form-check-label"> Golongan Darah </label><br>
                      <div class="row">
                        <div class="col-md-3">
                          <input type="checkbox" class="form-check-input" id="goldar" name="goldar" value="o">
                          <label for="form-check-label"> O</label>
                        </div>
                        <div class="col-md-3">
                          <input type="checkbox" class="form-check-input" id="goldar" name="goldar" value="ab">
                          <label for="form-check-label"> AB</label><br>
                        </div>
                        <div class="col-md-3">
                          <input type="checkbox" class="form-check-input" id="goldar" name="goldar" value="a">
                          <label for="form-check-label"> A</label><br>
                        </div>
                        <div class="col-md-3">
                          <input type="checkbox" class="form-check-input" id="goldar" name="goldar" value="b">
                          <label for="form-check-label"> AB</label><br>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <label  for="form-check-label"> Warna Kulit </label><br>
                      <div class="row">
                        <div class="col-md-3">
                          <input type="checkbox" class="form-check-input" id="warna_kulit" name="warnah_kulit" value="putih">
                          <label for="form-check-label"> Putih </label>
                        </div>
                        <div class="col-md-3">
                          <input type="checkbox" class="form-check-input" id="warna_kulit" name="warna_kulit" value="hitam">
                          <label for="form-check-label"> Hitam</label><br>
                        </div>
                        <div class="col-md-3">
                          <input type="checkbox" class="form-check-input" id="warna_kulit" name="warna_kulit" value="sawomatang">
                          <label for="form-check-label"> Sawo Matang </label><br>
                        </div>
                        <div class="col-md-3">
                          <input type="checkbox" class="form-check-input" id="warna_kulit" name="warna_kulit" value="kuninglangsat">
                          <label for="form-check-label"> Kuning Langsat </label><br>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <label  for="form-check-label"> Bentuk Wajah </label><br>
                      <div class="row">
                        <div class="col-md-4">
                          <input type="checkbox" class="form-check-input" id="bentuk_wajah" name="bentuk_wajah" value="bulat">
                          <label for="form-check-label"> Bulat </label>
                        </div>
                        <div class="col-md-4">
                          <input type="checkbox" class="form-check-input" id="bentuk_wajah" name="bentuk_wajah" value="oval">
                          <label for="form-check-label"> Oval </label><br>
                        </div>
                        <div class="col-md-4">
                          <input type="checkbox" class="form-check-input" id="bentuk_wajah" name="bentuk_wajah" value="lonjong">
                          <label for="form-check-label"> Longjong </label><br>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                    <label  for="form-check-label"> Jenis Rambut </label><br>
                      <div class="row">
                        <div class="col-md-4">
                          <input type="checkbox" class="form-check-input" id="jenis_rambut" name="jenis_rambut" value="lurus">
                          <label for="form-check-label"> Lurus </label>
                        </div>
                        <div class="col-md-4">
                          <input type="checkbox" class="form-check-input" id="jenis_rambut" name="jenis_rambut" value="keriting">
                          <label for="form-check-label"> keriting </label><br>
                        </div>
                        <div class="col-md-4">
                          <input type="checkbox" class="form-check-input" id="jenis_rambut" name="jenis_rambut" value="bergelombang">
                          <label for="form-check-label"> Bergelombang </label><br>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Jarak rumah ke sekolah (Km) </label>
                      <input type="text" class="form-control" id="jarak" name="jarak" placeholder="Jarak rumah ke sekolah (Km)">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Waktu tempuh ke sekolah (Menit) </label>
                      <input type="text" class="form-control" id="waktutempuh" name="waktutempuh" placeholder="Waktu tempuh ke sekolah (Menit)">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Jumlah saudara sandung </label>
                      <input type="text" class="form-control" id="saudara" name="saudara" placeholder="Jumlah saudara kandung">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Metode Quran yang sudah di pelajari </label>
                      <input type="text" class="form-control" id="metode" name="metode" placeholder="Metode">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Upload Kartu Keluarga</label>
                      <input type="file" name="kk" id="kk" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Upload KIA</label>
                      <input type="file" name="kia" id="kia" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1"> Upload Akta Kelahiran</label>
                      <input type="file" name="akta" id="akta" class="form-control">
                    </div>
                   
                    <button type="submit" name="Submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
        <?php include 'footer.php';?>
            </div>
        </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!--CUSTOM JS-->
 
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
        <!-- content-wrapper ends -->
