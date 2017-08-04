<?php 
require_once "core/init.php";
require_once "view/header.php";

$articles = tampilkan();

//die(print_r($articles));
?>

<?php while($row= mysqli_fetch_assoc($articles)):?>
<div class="tiap_artikel">
	<h3><a href="single.php?id=<?= $row['id']; ?>"><?= $row['judul'];?></a></h3>
    <p>
    	<?= excerpt($row['isi']);?>
    </p>
    <p class="waktu"> <?= $row['waktu']; ?></p>
    <p class="tag"><?= $row['tag']; ?></p>
    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
</div>
<?php endwhile;?>

<?php require_once "view/footer.php"?>



<?php 
require_once "view/footer.php";
?>