<?php 
function tampilkan(){
	global $koneksi;
	
	$query = "SELECT * FROM blog";
	$hasil = mysqli_query($koneksi, $query)or die('gagal menampilkan data');
	
	return $hasil;
}
?>