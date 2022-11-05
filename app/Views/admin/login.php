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
	<main class="tampilan-login">
		<div class="img-login">
			<img src="<?= base_url(); ?>/assets/gambar/login.png" alt="">
		</div>
		<section>
			<div class="card-login">
				<!-- cek pesan notifikasi -->
				<?php
				if (session()->getFlashdata('pesan')) {
				?>
					<div class="alert sukses">
						<span class="closebtn">&times;</span>
						<?= session()->getFlashdata('pesan'); ?>
					</div>
				<?php } ?>
				<h1>Login</h1>
				<img src="<?= base_url(); ?>/assets/gambar/user.png" alt="">
				<form action="<?= base_url(); ?>/Admin/Login/cek_login" method="POST">
					<img src="<?= base_url(); ?>/assets/gambar/atribut/admin.png" alt="">
					<div class="input-group">
						<label for="username">Username</label>
						<input id="username" type="text" name="username" autocomplete="off" required autofocus />
					</div>
					<div class="input-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" autocomplete="off" required>
					</div>
					<!-- cek pesan notifikasi -->
					<?php
					if (!empty(session()->getFlashdata('gagal'))) { ?>
						<div class="error">
							<?= session()->getFlashdata('gagal'); ?>
						</div>
					<?php } ?>
					<div class="input-group">
						<input type="submit" value="Login">
					</div>
				</form>
			</div>
		</section>
	</main>
	<script src="<?= base_url(); ?>/assets/js/lihat password.js"></script>
</body>

</html>