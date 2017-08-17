<?php 

function cek_data($user, $pass){
	$user= escape($user);
	$pass= escape($pass);

	$query = "SELECT * FROM user WHERE username='$user' AND password='$pass'";

	global $koneksi;

	if ($hasil=mysqli_query($koneksi, $query)) {
		//print_r($hasil);
		if (mysqli_num_rows($hasil) !=0)return true;
		else return false;
	}
}

?>