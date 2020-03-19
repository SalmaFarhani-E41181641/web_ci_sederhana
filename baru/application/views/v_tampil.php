<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bank Sampah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <center>Data Sampah</center>
  <center><?php echo anchor('crud/tambah','Tambah Data'); ?></center> 
  <a href="<?php echo base_url('login/logout'); ?>">Logout</a>           
  <table class="table table-bordered">
    <thead>
      <tr>
	  	<th>No.</th>
        <th>Nama Sampah</th>
        <th>Banyaknya (Ton)</th>
        <th>Lokasi</th>
		<th>Handphone</th>
      </tr>
    </thead>
    <tbody>
	<?php 
		$no = 1;
		foreach($sampah as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama_sampah ?></td>
			<td><?php echo $u->jumlah_sampah ?></td>
			<td><?php echo $u->lokasi ?></td>
			<td><?php echo $u->hp ?></td>
		</tr>
		<?php } ?>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
