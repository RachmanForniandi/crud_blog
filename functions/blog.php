<?php 
function tampilkan(){
	$query = "SELECT * FROM blog";
	return hasil($query);
}

function tampilkan_per_id($id){
	$query = "SELECT * FROM blog WHERE id= $id";
	return hasil($query);
}

function hasil_cari($cari){
	$query = "SELECT * FROM blog WHERE judul LIKE '%$cari%'";
	return hasil($query);
}

function hasil($query){
	global $koneksi;
	if ($hasil = mysqli_query($koneksi, $query)or die('gagal menampilkan data')) {
		return $hasil;
	}
}

function tambah_data($judul, $isi, $tag){
	$judul= escape($judul);
	$isi = escape($isi);

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

function escape($data){
	global $koneksi;
	return mysqli_real_escape_string($koneksi, $data);
}

?>