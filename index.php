<?php 
require_once "core/init.php";
require_once "view/header.php";

$articles = tampilkan();

//die(print_r($articles));
?>

<?php while($row= mysqli_fetch_assoc($articles)):?>
<div class="tiap_artikel">
	<h3><?= $row['judul'];?></h3>
    <p>
    	<?= $row['isi'];?>
    </p>
    <p class="waktu"> <?= $row['waktu']; ?></p>
    <p class="tag"><?= $row['tag']; ?></p>
</div>
<?php endwhile;?>




<?php 
require_once "view/footer.php";
?>