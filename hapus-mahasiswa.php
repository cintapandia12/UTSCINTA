<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from tamu where id_tamu='$id'");

if($hapus==true){

	header("location:tampil-mahasiswa2.php?pesan=hapusBerhasil");

} else{
	echo "Error";
}

?>