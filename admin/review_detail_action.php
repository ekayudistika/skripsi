<?php
 // Check If form submitted, insert form data into users table.
 if(!empty($_POST))
{
     
     $idreg = $_POST['idreg'];
     $status = $_POST['status'];
     $keterangan = $_POST['keterangan'];
     
 
     // include database connection file
     include '../koneksi.php';
    
     // Insert user data into table
     
     $sql = "UPDATE status_review SET status ='$status', keterangan = '$keterangan' where id_siswa_baru = '$idreg' ";
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