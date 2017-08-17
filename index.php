<?php 
require_once "core/init.php";
require_once "view/header.php";

$articles = tampilkan();

//die(print_r($articles));
if (isset($_GET['cari'])) {
	$cari = $_GET['cari'];
	$articles = hasil_cari($cari);
}

?>

<form action="" method="get">
	<input type="search" name="cari" placeholder="Silahkan cari berita disini...">
</form>

<?php while($row= mysqli_fetch_assoc($articles)):?>
<div class="tiap_artikel">
	<h3><a href="single.php?id=<?= $row['id']; ?>"><?= $row['judul'];?></a></h3>
    <p>
    	<?= excerpt($row['isi']);?>
    </p>
    <p class="waktu"> <?= $row['waktu']; ?></p>
    <p class="tag"><?= $row['tag']; ?></p>
    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
    <a href="delete.php?id=<?= $row['id']; ?>">Hapus</a>
</div>
<?php endwhile;?>

<?php require_once "view/footer.php"?>
