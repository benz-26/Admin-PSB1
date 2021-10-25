
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cetak Bukti Pendaftaran</title>
	<style>
		* {
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
		}

		h1 {
			text-align: center;
			margin: 18px;
		}
		h3{
			text-align: center;
		}
		h5 {
			text-align: center;
			line-height: 30px;
		}
		.signature{
			padding-top: 10rem;
			text-align:right ;
			align-items: right;
		}
		p {
			margin: 10px 10px
		}

		#member-card {
			margin: 0 auto;
			width: 450px;
		}

		#member-photo {
			float: left;
			width: 150px;
			margin: 60px 20px 10px 10px;
			padding-top: 70px;
		}

		#member-data {
			float: left;
			width: 300px;
			padding-top: 50px;
		}

		#member-data p {
			line-height: 30px;
		}
	</style>
</head>

<body>
	<?php
	foreach ($useracc->result_array() as $data) {
	} ?>

	<section id="member-card">
	<h1>STATUS PENDAFTARAN</h1>
	<h3>PENERIMAAN SISWA BARU</h3>
	<HR></HR>
	<h5>DATA DIRI</h5>
		<div id="member-photo">		
			<img src="<?php echo base_url() ?>/images/foto-default.jpg ?>" width="120">
		</div>

		<div id="member-data">

			<p><strong>ID Pendaftaran</strong>: <?php echo $data['id_account']; ?></p>
			<p><strong>NIK</strong>: <?php echo $data['nik']; ?></p>
			<p><strong>Nama</strong>: <?php echo $data['nama']; ?></p>
			<p><strong>Asal Sekolah</strong>: <?php echo $data['asal_sekolah']; ?></p>
			<p><strong>Status Pendaftaran</strong><?php echo $data['status_pendaftaran']; ?></p>
			<div class="signature">
			<p>KEPALA YAYASAN</p>
			<br>
			<img src="<?php echo base_url() ?>/images/signature.png ?>" width="180">
			<p>SUTANTO,S.pd</p>
			</div>






		</div>
	</section>
	<script type="text/javascript">
		window.print();
	</script>
</body>