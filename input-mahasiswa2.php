<!doctype HTML>
<html>
<head>
	<title>menampilkan hasil input form</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="proses-input-mahasiswa.php" method="POST">
					<div class="form-group">
						<label for="id_tamu">ID Tamu</label>
						<input type="number" name="id_tamu" class="form-control">
					</div>

	
	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" name="nama" class="form-control">
	</div>

	<div class="form-group">
		<label for="email">Email</label>
	<input type="text" name="email" class="form-control">
	</div>

	<div class="form-group">
		<label for="jam_kedatangan">Jam kedatangan</label>
	<input type="time" name="jam_kedatangan" class="form-control">
	</div>

	<div class="form-group">
		<label for="alamat">alamat</label>
	<input type="text" name="alamat" class="form-control">
	</div>

	<div class="form-group">
			<label for="jenis_kelamin">Jenis kelamin</label>
			<select name="jenis_kelamin" class="form-control">
			<option value="Laki-Laki">Laki-Laki</option>
			<option value="Perempuan">Perempuan</option></select>
			</div>

			<div class="form-group">
			<label for="agama">agama</label>
			<select name="agama" class="form-control">
			<option value="Islam">Islam</option>
			<option value="Kristen">Kristen</option>
			<option value="hindu">hindu</option>
			<option value="budha">budha</option></select>
			</div>

	

<input type="submit" name="kirim" value="simpan" class="btn btn-info">
<input type="reset" name="kirim" value="kosongkan" class="btn btn-danger">
</form>

<script src="bootstrap/js/jQuery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</div>
</div>
</body>
</html>