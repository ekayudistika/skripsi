<?php
 // Check If form submitted, insert form data into users table.


 function noreg(){
    include '../koneksi.php';
    $query_select = "SELECT id_siswa_baru from pendaftaran_siswa_baru limit 1";
    $result = $koneksi->query($query_select);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id = substr($row['id_siswa_baru'],5);
            $id = $id + 1;
            $digit = strlen((string)$id);
            if ($digit == 1){
                $id = "000".$id;  
            }
            elseif($digit == 2){
                $id = "00".$id;
              
            }
            elseif($digit == 3){
                $id = "0".$id;
                
            }else {
                $id = $id;
            }
            $id_siswa_baru = "ALKH-".$id;
        }
    }
    else {
        $id_siswa_baru = "ALKH-0001";
    }
    return $id_siswa_baru;
 }

 function inputdataorangtua($id_siswa_baru,$namaayah,$tempatayah,$tlayah,$pekerjaanayah,$pendidikanayah,$penghasilanayah,$kebutuhankhususayah,
 $namaibu,$tempatibu,$tlibu,$pekerjaanibu,$pendidikanibu,$penghasilanibu,$kebutuhankhususibu){
    include '../koneksi.php';
    $sql = "INSERT INTO data_orang_tua VALUES('','$id_siswa_baru','$namaayah','$tempatayah','$tlayah','$pekerjaanayah','$pendidikanayah','$penghasilanayah','$kebutuhankhususayah',
    '$namaibu','$tempatibu','$tlibu,','$pekerjaanibu','$pendidikanibu','$penghasilanibu','$kebutuhankhususibu')";
    if ($koneksi->query($sql) == TRUE) {
       echo "New record created successfully";
     } else {
         echo "Error" . $sql . "<br>" . $koneksi->error;
     }
   $koneksi->close();


 }
 if(!empty($_POST))
{
    $id_siswa_baru = noreg();
    //DATA AYAH
    $namaayah = $_POST['namaayah'];
    $tempatayah = $_POST['tempatayah'];
    $tlayah = $_POST['tlayah'];
    $pekerjaanayah = $_POST['pekerjaanayah'];
    $pendidikanayah = $_POST['pendidikanayah'];
    $penghasilanayah = $_POST['penghasilanayah'];
    $kebutuhankhususayah = $_POST['kebutuhankhusayah'];
    //DATA IBU
    $namaibu = $_POST['namaibu'];
    $tempatibu = $_POST['tempatibu'];
    $tlibu = $_POST['tlibu'];
    $pekerjaanibu = $_POST['pekerjaanibu'];
    $pendidikanibu = $_POST['pendidikanibu'];
    $penghasilanibu = $_POST['penghasilanibu'];
    $kebutuhankhususibu = $_POST['kebutuhankhusibu'];
    inputdataorangtua($id_siswa_baru,$namaayah,$tempatayah,$tlayah,$pekerjaanayah,$pendidikanayah,$penghasilanayah,$kebutuhankhususayah,
    $namaibu,$tempatibu,$tlibu,$pekerjaanibu,$pendidikanibu,$penghasilanibu,$kebutuhankhususibu);
    //DATA MURID
    
     $nikcamur = $_POST['nikcamur'];
     $namalengkapcamur = $_POST['namalengkapcamur'];
     $jeniskelamin = $_POST['jeniskelamin'];
     $tempat = $_POST['tempat'];
     $tl = $_POST['tl'];
     $alamat = $_POST['alamat'];
     $modatransportasi = $_POST['modatransportasi'];
     $nohp = $_POST['nohp'];
     $email = $_POST['email'];
     $tbanak = $_POST['tbanak'];
     $bbanak = $_POST['bbanak'];
     $goldar = $_POST['goldar'];
     $warna_kulit = $_POST['warna_kulit'];
     $bentuk_wajah = $_POST['bentuk_wajah'];
     $jenis_rambut = $_POST['jenis_rambut'];
     $jarak = $_POST['jarak'];
     $waktu_tempuh = $_POST['waktutempuh'];
     $saudara = $_POST['saudara'];
     $metode = $_POST['metode'];
     
 
     // include database connection file
     include '../koneksi.php';
    
     // Insert user data into table
     
     $sql = "INSERT INTO pendaftaran_siswa_baru VALUES('$id_siswa_baru','$nikcamur','$namalengkapcamur','$jeniskelamin','$tempat','$tl','$alamat','$modatransportasi','$nohp','$email','$tbanak','$bbanak','$goldar','$warna_kulit','$bentuk_wajah','$jenis_rambut','$jarak','$waktu_tempuh','$saudara','$metode','review','')";
     //echo $koneksi->$result;
     // Show message when user added
     //echo $sql;
 
     if ($koneksi->query($sql) == TRUE) {
        //echo "New record created successfully";
        //echo "<script>alert('Email dan Nomor Telepon.'$nohp '.' $email'. Berhasil Terdaftar ')</script>";
        header("location:index.php");
      } else {
          echo "Error" . $sql . "<br>" . $koneksi->error;
      }
 
    
    /*   if ($koneksi->$result){
        echo "eka";
        echo "<script type ='text/JavaScript'>alert('Calon Siswa .'$namalengkapcamur'. Berhasil Terdaftar ')</script>";
     }
    else {
        echo "failed";
    }*/
     
    $koneksi->close();
 }
 ?> 