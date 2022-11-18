<?php

include "koneksi.php";


$id_tamu=$_POST['id_tamu'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$jam_kedatangan=$_POST['jam_kedatangan'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$agama=$_POST['agama'];



$ubah=$koneksi->query("update ruangan set id_tamu='$id_tamu', nama='$nama', email='$email', jam_kedatangan='$jam_kedatangan', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama' where id_tamu='$id'");

if($ubah==true){

	header("location:tampil-mahasiswa2.php?pesan=editBerhasil");
} else{

	echo "error";
}

?>