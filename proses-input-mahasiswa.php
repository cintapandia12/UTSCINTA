<?php

$id_tamu=$_POST['id_tamu'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$jam_kedatangan=$_POST['jam_kedatangan'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];



include "koneksi.php";

$simpan=$koneksi->query("insert into tamu(id_tamu,nama,email,jam_kedatangan,alamat,jenis_kelamin,agama) values 
	('$id_tamu','$nama','$email','$jam_kedatangan','$alamat','$jenis_kelamin','$agama')");

if($simpan==true){

	header("location:tampil-mahasiswa2.php?pesan=inputBerhasil");
} else{
	echo "Error";
}

?>