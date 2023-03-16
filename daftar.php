<?php 
	session_start();
	include 'conn/koneksi.php';
 ?>
 <body style="background: url(img/bg5.JPG); background-size: cover;">
 <!doctype html>
    <html lang="en">
    <head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    	<title>REGISTER</title>
    </head>
    <body>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4 offset-md-4 mt-5">
    				<div class="card ">
    					<div class="card-title text-center">
    						<h1>FORM REGISTER</h1>
    					</div>
    					<div class="card-body">
    						<form action="" method="post">
    							<div class="form-group">
    								<label for="username">NIK</label>
    								<input type="text" name="nik" class="form-control" id="name" aria-describedby="name" placeholder="NO NIK" autocomplete="off">
    							</div>
								<div class="form-group">
    								<label for="username">Nama</label>
    								<input type="text" name="nama" class="form-control" id="name" aria-describedby="name" placeholder="Nama lengkap" autocomplete="off">
    							</div>
    							<div class="form-group">
    								<label for="username">Username</label>
    								<input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="username" autocomplete="off">
    							</div>
    							<div class="form-group">
    								<label for="password">Password</label>
    								<input type="password" name="password" class="form-control" id="password" placeholder="Password">
    							</div>
    							<div class="form-group">
    								<label for="username">Telp</label>
    								<input type="text" name="telp" class="form-control" id="telp" aria-describedby="name" placeholder="NO TELP" autocomplete="off">
    							</div>
    							<center><a href="index.php">Kembali</a>
								<button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Register</button></center>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </body>
			<?php 
				if(isset($_POST['simpan'])){
					$password = md5($_POST['password']);

					$query=mysqli_query($koneksi,"INSERT INTO masyarakat VALUES ('".$_POST['nik']."','".$_POST['nama']."','".$_POST['username']."','".$password."','".$_POST['telp']."')");
					if($query){
						echo "<script>alert('Data Tesimpan')</script>";
						echo "<script>location='location:index.php?p=registrasi';</script>";
					}
				}
			 ?>