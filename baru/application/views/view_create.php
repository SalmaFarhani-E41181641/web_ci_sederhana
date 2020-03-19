<!DOCTYPE html>
<html>
<head>
	<title>Data Sampah</title>
</head>
<body>
	<center>
		<h1>Data Sampah</h1>
		<h3>Tambah data baru</h3>
	
	<form action="<?php echo base_url(). "crud/tambah_aksi"; ?>" method="post">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Sampah</label>
            <div class="col-sm-10">
                <input type="text" id="nama_sampah" name="nama_sampah" class="form-control" required>
				<?= form_error('nama_sampah', ' <small class="text-danger">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Banyaknya (Ton)</label>
            <div class="col-sm-10">
                <input type="text" id= "jumlah_sampah" name="jumlah_sampah" class="form-control" required>
				<?= form_error('jumlah_sampah', ' <small class="text-danger">', '</small>'); ?>
            </div>
			<div class="form-group row">
            <label class="col-sm-2 col-form-label">Lokasi</label>
            <div class="col-sm-10">
                <input type="text" id="lokasi" name="lokasi" class="form-control" required>
				<?= form_error('lokasi', ' <small class="text-danger">', '</small>'); ?>
            </div>
			<div class="form-group row">
            <label class="col-sm-2 col-form-label">Nomer Handphone</label>
            <div class="col-sm-10">
                <input type="text" id="hp" name="hp" class="form-control" required>
				<?= form_error('hp', ' <small class="text-danger">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">&nbsp;</label>
            <div class="col-sm-10">
                <input type="submit" name="submit" class="btn btn-primary" value="Tambah">
                <a href="<?php echo base_url(). "crud/utama"; ?>" class="btn btn-warning">KEMBALI</a>
            </div>
        </div>
    </form>
	</center>
	