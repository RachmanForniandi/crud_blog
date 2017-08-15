<?php 
function tampilkan(){
	global $koneksi;
	
	$query = "SELECT * FROM blog";
	$hasil = mysqli_query($koneksi, $query)or die('gagal menampilkan data');
	
	return $hasil;
}

function tampilkan_per_id($id){
	global $koneksi;
	
	$query = "SELECT * FROM blog WHERE id= $id";
	$hasil = mysqli_query($koneksi, $query)or die('gagal menampilkan data');
	
	return $hasil;
}

function tambah_data($judul, $isi, $tag){
	$query = "INSERT INTO blog(judul, isi, tag) 
			  VALUES('$judul','$isi','$tag')";
	return run($query);
}

function edit_data($judul, $isi, $tag, $id){
	$query = "UPDATE blog SET judul='$judul', isi='$isi', tag='$tag' 
			  WHERE id=$id";
	return run($query);
}

function hapus_data($id){
	$query = "DELETE From blog WHERE id=$id";
	return run($query);
}
	
function run($query){
	global $koneksi;
		
	if(mysqli_query($koneksi, $query)) return true;
	else return false;
}	

function excerpt($string){
	$string = substr($string, 0, 10);
	return $string . "...";
}
?>