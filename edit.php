<?php 
require_once "core/init.php";
require_once "view/header.php";

$error = '';
$id = $_GET['id'];

if(isset($_GET['id'])){
	$article = tampilkan_per_id($id);
	while($row= mysqli_fetch_assoc($article)){
		$judul_awal = $row['judul'];
		$isi_awal = $row['isi'];
		$tag_awal = $row['tag'];
	}
}

if(isset($_POST['submit'])){
	$judul = $_POST['judul'];
	$isi= $_POST['isi'];
	$tag = $_POST['tag'];
	
	if(!empty(trim($judul)) && !empty(trim($isi))){
		
		if(edit_data($judul, $isi, $tag, $id)){
			header('Location: index.php');
		}else{
			$error ='Ups ! ada masalah saat update data berita. Silahkan periksa kembali.';
		}
	}else{
		$error ='judul dan konten berita wajib diisi';
	}
}

?>

<form action="" method="post">
	<label for="judul">Judul</label>
    <input type="text" name="judul" value="<?=$judul_awal;?>"><br><br>
    
    <label for="isi">Isi</label>
    <textarea name="isi" rows="8" cols="40"><?=$isi_awal;?></textarea><br><br>
    
    <label for="tag">Tag</label>
    <input type="text" name="tag" value="<?=$tag_awal;?>"><br><br>
    
    <div id="error"><?=$error ?></div><br>
    
    <input type="submit" name="submit" value="submit">
</form>

<?php require_once "view/footer.php"?>

