<?php 
require_once "core/init.php";


$error = '';

if(isset($_POST['submit'])){
	$user = $_POST['user'];
	$pass = $_POST['password'];
	
	if(!empty(trim($user)) && !empty(trim($pass))){
		
		if(cek_data($user, $pass)){
			header('Location: index.php');
		}else{
			$error ='Login Error. Silahkan periksa kembali Username & Password.';
		}
	}else{
		$error ='Username & Password Wajib Diisi.';
	}
}

require_once "view/header.php";

?>

<form action="" method="post">

	<label for="user">Username</label>
    <input type="text" name="user" value=""><br><br>
    
    <label for="password">password</label>
    <input type="password" name="password" value=""><br><br>
    
    <div id="error"><?=$error ?></div><br>
    
    <input type="submit" name="submit" value="submit">
</form>

<?php require_once "view/footer.php"?>

