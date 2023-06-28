<?php
 // Check If form submitted, insert form data into users table.
 if (isset($_POST['search'])) 
{
     
     $search = $_POST['search'];

 
     // include database connection file
     include '../koneksi.php';
    
     // Insert user data into table
     
     $sql = "INSERT INTO status_review VALUES(1,'$idreg','$keterangan','$status')";
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