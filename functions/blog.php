<?php 
function tampilkan(){
	global $koneksi;
	
	$query = "SELECT * FROM blog";
	$hasil = mysqli_query($koneksi, $query)or die('gagal menampilkan data');
	
	return $hasil;
}
	function tambah_data($judul, $konten, $tag){
		$query = "INSERT INTO blog(judul, isi, tag) VALUES('$judul','$isi','$tag')";
		return run($query);
	}
	
	function run($query){
		global $koneksi;
		
		if(mysqli_query($koneksi, $query)) return true;
		else return false;
	}
	
?>