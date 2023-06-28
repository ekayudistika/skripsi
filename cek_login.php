<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user_login where email='$email' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$row = $data -> fetch_array(MYSQLI_NUM);
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
    $_SESSION['nohp'] = $row[1];
    if ($row[4] == 'admin'){
	    header("location:admin/index.php");
    }else {
        header("location:user/index.php");
    }

}else{
	header("location:index.php?pesan=gagal");
}
?>