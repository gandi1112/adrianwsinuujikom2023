
<h3 class="blue-text">Pemberitahuan</h3>

	<div class="row">
		<div class="col s4">
		  <div class="card red">
		    <div class="card-content white-text">
			<?php 
				$query = mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE status='proses'");
				$jlmmember = mysqli_num_rows($query);
				if($jlmmember<1){
					$jlmmember=0;
				}
			 ?>
		      <h4><span class="orange-text">Laporan Status Proses<b class="right"><?php echo $jlmmember; ?></b></span></h4>
		      <p></p>
		    </div>
		  </div>
		</div>	

		<div class="col s4">
		    <div class="card teal">
		    <div class="card-content white-text">
			<?php 
				$query = mysqli_query($koneksi,"SELECT * FROM tanggapan WHERE id_petugas='".$_SESSION['data']['id_petugas']."'");
				$jlmmember = mysqli_num_rows($query);
				if($jlmmember<1){
					$jlmmember=0;
				}
			 ?>
		     <h4> <span class="orange-text">Laporan Ditanggapi <b class="right"><?php echo $jlmmember; ?></b></span></h4>
		      <p></p>
		    </div>
		  </div>
		</div>
	</div>