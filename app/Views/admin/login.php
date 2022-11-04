<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php base_url() ?>/assets/css/root.css">
	<link rel="stylesheet" href="<?php base_url() ?>/assets/css/login.css">
	<title><?= $judul; ?></title>
</head>

<body>
	<!-- particles.js container -->
	<main class="tampilan-login">
		<!-- cek pesan notifikasi -->
		<?php
		if (!empty(session()->getFlashdata('gagal'))) {
			echo session()->getFlashdata('gagal');
		}
		if (session()->getFlashdata('pesan')) {
		?>
			<div class="alert sukses">
				<span class="closebtn">&times;</span>
				<?= session()->getFlashdata('pesan'); ?>
			</div>
		<?php } ?>
		<form action="login/cek_login" method="POST" class="card-login">
			<h1>Login</h1>
			<img src="<?= base_url(); ?>/assets/gambar/atribut/admin.png" alt="">
			<div class="input-group">
				<label for="username">Username</label>
				<input id="username" type="text" name="username" autocomplete="off" required autofocus />
			</div>
			<div class="input-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" autocomplete="off" required>
			</div>
			<div class="input-group">
				<input type="submit" value="Login">
			</div>
		</form>
	</main>
	<script src="<?= base_url(); ?>/assets/js/lihat password.js"></script>
	<!-- particles.js lib - https://github.com/VincentGarreau/particles.js -->
</body>

</html>