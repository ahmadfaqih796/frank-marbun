<?php $this->extend('layout/admin');
$this->section('konten');
?>
<legend>Beranda</legend>
<h1><?= session()->get('username') ?></h1>
<?php $this->endSection(); ?>