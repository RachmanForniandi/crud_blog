<?php 
require_once "core/init.php";
require_once "view/header.php";

$error = '';

if(isset($_POST['submit'])){
	$judul = $_POST['judul'];
	$isi= $_POST['isi'];
	$tag = $_POST['tag'];
	
	if(!empty(trim($judul)) && !empty(trim($isi))){
		
		if(tambah_data($judul, $isi, $tag)){
			header('Location: index.php');
		}else{
			$error ='Ups ! ada masalah saat menambah data berita. Silahkan periksa kembali.';
		}
	}else{
		$error ='judul dan konten berita wajib diisi';
	}
}

?>

<form action="" method="post">
	<label for="judul">Judul</label>
    <input type="text" name="judul" value=""><br><br>
    
    <label for="isi">Isi</label>
    <textarea name="isi" rows="8" cols="40"></textarea><br><br>
    
    <label for="tag">Tag</label>
    <input type="text" name="tag" value=""><br><br>
    
    <div id="error"><?=$error ?></div><br>
    
    <input type="submit" name="submit" value="submit">
</form>

<?php require_once "view/footer.php"?>

