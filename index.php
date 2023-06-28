<!DOCTYPE html>  
<html>  
 <head>  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/login.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

<!------ Include the above in your HEAD tag ---------->
</head>  
 <body>  
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/al-khairaat.svg" id="icon" alt="User Icon" /> <br/>
      <h4>AL-KHAIRAAT</h4>
    </div>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! email dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
    <!-- Login Form -->
    <form method="post" action="cek_login.php">
      <input type="email" id="login" class="fadeIn second" name="email" placeholder="E-Mail"><br/>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
    <br>
    <input type="button" name="daftar" id="daftar" data-toggle="modal" value="Registrasi" data-target="#pendaftaran" class="btn-success">

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>



  </div>
</div>
</body>  
</html>  

<div id="pendaftaran" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
   <h4 class="modal-title text-center"> Registrasi</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    
   </div>
   <div class="modal-body">
   <form method="post" id="registrasi">
   <div class="form-group">
        <div class="form-group">
          <label for="exampleInputUsername1"> No Handphone</label><br>
          <input type="text" class="fadeIn second" id="nohp" name="nohp" placeholder="No Handphone"><br>
        <div class="form-group">
          <label for="exampleInputUsername1"> Email</label><br>
          <input type="email" class="fadeIn third" id="email" name="email" placeholder="E-Mail">
        </div>
        <div class="form-group">
          <label for="exampleInputUsername1">Password</label>
          <input type="password" class="fadeIn fourth" id="passwordreg" name="passwordreg" placeholder="Password">
        </div>
        <input type="submit" name="bt_registrasi" id="bt_registrasi" value="Registrasi" class="btn btn-primary me-2">
      </div>
      </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>


<script>  
$(document).ready(function(){
// Begin Aksi Insert
 $('#registrasi').on("submit", function(event){  
  event.preventDefault();  
  if($('#email').val() == "")  
  {  
   alert("Mohon Isi Email ");  
  }  
  else if($('#passwordreg').val() == '')  
  {  
   alert("Mohon Isi password");  
  } 
  else if($('#nohp').val() == '')  
  {  
   alert("Mohon Isi password");  
  } 
  else 
  {  
   $.ajax({  
    url:"registrasi.php",  
    method:"POST",  
    data:$('#registrasi').serialize(),  
    beforeSend:function(){  
     $('#bt_registrasi').val("Process ..");  
    }, 
    success:function(data){ 
     console.log(data) 
     if(data.includes("Duplicate")){
      alert("Email atau No Handphone Sudah Terdaftar")
      $('#bt_registrasi').val("Registrasi"); 
      location.reload()
     }
     else{
     $('#registrasi')[0].reset();  
     alert("Pendaftaran Berhasil")
     $('#pendaftaran').modal('hide');
     }
     
       
     
    }  
   });  
  }  
 });
}); 
 </script>