<!doctype html>
<html>
<head>
	<title>buku tamu</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
</head>	
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
<h1> Buku Tamu</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){
?>

<div class="alert alert-success">
	penyimpanan berhasil
</div>

<?php

}

?>


<?php

if(@$_GET['pesan']=="hapusBerhasil"){
?>

<div class="alert alert-success">
	data berhasil dihapus!
</div>

<?php

}

?>

<?php

if(@$_GET['pesan']=="editBerhasil"){
?>

<div class="alert alert-success">
	perubahan berhasil!
</div>

<?php

}

?>

	<table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
		<thead>
		<tr>
			<td>id_tamu</td><td>NAMA</td><td>Email</td><td>Jam kedatangan</td>
			<td>Alamat</td><td>Jenis kelamin</td><td>agama</td>
			<td>
                <a href="input-mahasiswa2.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"> </button></a>
			
		</tr>
		</thead>
		<tbody>
		<?php

		include"koneksi.php";
$sql=$koneksi->query("select * from tamu order by id_tamu ASC");

while($row= $sql->fetch_assoc()){
	?>

	<tr>
			<td><?php echo $row['id_tamu']?></td>
			<td><?php echo $row['nama']?></td>
			<td><?php echo $row['email']?></td>
			<td><?php echo $row['jam_kedatangan']?></td>
			<td><?php echo $row['alamat']?></td>
			<td><?php echo $row['jenis_kelamin']?></td>
			<td><?php echo $row['agama']?></td>
			<td>

			

             <a href="edit-mahasiswa.php?id=<?php echo $row['id_tamu']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"> </button>

                </a>

                 <a href="hapus-mahasiswa.php?id=<?php echo $row['id_tamu']?>" onclick="return confirm('anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"> </button>

                </a>

			</td>
		</tr>

	<?php
	}
	?>
	</tbody>

	</table>
</div>
</div>
</div>

	<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
	<script type="text/javascript">
		<$(document).ready(function(){
			$('#dataTables').DataTable();
		});
	</script>
	
</body>
</html>
