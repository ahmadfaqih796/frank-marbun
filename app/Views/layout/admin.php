<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="icon" href="<?= base_url() ?>/assets/gambar/atribut/icon.ico">
	<link rel="stylesheet" href="<?php base_url() ?>/assets/css/admin.css">
	<link rel="stylesheet" href="<?php base_url() ?>/assets/css/root.css">
	<script src="https://kit.fontawesome.com/8484f65b47.js" crossorigin="anonymous"></script>
	<title><?= $judul; ?></title>
</head>

<body>
	<?php
	if (session()->get('username') == '') {
		session()->setFlashdata('gagal', 'anda belum login sayang !!!');
		return redirect()->to(base_url('Admin/login'));
	}
	if (!empty(session()->getFlashdata('gagal'))) {
	?>
		<script>
			alert("anda masih dimenu home !!!, jangan pindah ke halaman login itu haram");
		</script>
	<?php
	}
	if (session()->getFlashdata('pesan')) {
	?>
		<script>
			alert("<?= session()->getFlashdata('pesan'); ?>");
		</script>
	<?php } ?>

	<nav class="nav-admin">
		<ul>
			<li><a href="<?php base_url() ?>/admin/ppdb"><i class="fas fa-house-user"></i> Beranda</a></li>
			<li><a href="<?php base_url() ?>/admin/ppdb/santri"><i class="fas fa-id-card"></i> Santri</a></li>
			<li><a href="<?php base_url() ?>/admin/ppdb/pembayaran"><i class="fas fa-money-bill"></i> Pembayaran</a></li>
			<li><a href="<?php base_url() ?>/admin/laporan"><i class="fas fa-file"></i> Laporan</a></li>
			<li><a href="<?php base_url() ?>/admin/berita"><i class="fas fa-newspaper"></i> Berita</a></li>
			<li><a href="<?php base_url() ?>/Admin/Login/logout"><i class="fas fa-arrow-left"></i> Logout</a></li>
		</ul>
		<div class="menu-toggle">
			<input type="checkbox">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="logo">
			<h4>Admin</h4>
		</div>
	</nav>


	<div class="konten">
		<?= $this->renderSection('konten'); ?>
	</div>


	<script src="<?php base_url() ?>/assets/js/navigasi.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>/assets/js/santri/navigasi.js"></script>
	<script type="text/javascript" src="<?php base_url() ?>/assets/js/ppdb/gambar-slider.js"></script>
	<script src="<?= base_url(); ?>/assets/js/lihat password.js"></script>
	<script>
		var close = document.getElementsByClassName("closebtn");
		var i;
		for (i = 0; i < close.length; i++) {
			close[i].onclick = function() {
				var div = this.parentElement;
				div.style.opacity = "0";
				setTimeout(function() {
					div.style.display = "none";
				}, 600);
			}
		}

		function tampilGambar() {
			const gambar = document.querySelector('#gambar');
			const imgTampil = document.querySelector('.tampil-gambar');

			const fileGambar = new FileReader();
			fileGambar.readAsDataURL(gambar.files[0]);

			fileGambar.onload = function(e) {
				imgTampil.src = e.target.result;
			}
		}
	</script>
</body>

</html>