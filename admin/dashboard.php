
<h2 class="white-text">Dahsboard</h2>

	<div class="row">
		<div class="col s4">
		  <div class="card red">
		    <div class="card-content white-text">
			<?php 
				$query = mysqli_query($koneksi,"SELECT * FROM pengaduan");
				$jlmmember = mysqli_num_rows($query);
				if($jlmmember<1){
					$jlmmember=0;
				}
			 ?>
		      <h4><span class="white-text">Laporan Masuk</a><b class="right"><?php echo $jlmmember; ?></b></span></h4>
		      <p></p>
		    </div>
		  </div>
		</div>	

		<div class="col s4">
		    <div class="card teal">
		    <div class="card-content white-text">
			<?php 
				$query = mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE status='selesai'");
				$jlmmember = mysqli_num_rows($query);
				if($jlmmember<1){
					$jlmmember=0;
				}
			 ?>
		    <h4> <span class="white-text">Laporan Selesai</a><b class="right"><?php echo $jlmmember; ?></b></span></h4>
		      <p></p>
		    </div>
		  </div>
		</div>
	</div>