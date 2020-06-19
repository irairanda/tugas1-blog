<?php

if(isset($_POST['tlogin'])){

	$user = $_POST['iusername'];
	$pass = $_POST['ipassword'];

	$sql="SELECT * FROM tb_user WHERE user_name = :user_name AND user_pass = :user_pass";

	$stmt = $koneksi->prepare($sql);
	$stmt->bindParam(":user_name", $user);
	$stmt->bindParam(":user_pass", $pass);
	$stmt->execute();

	if($stmt->rowCount() > 0){
		header("location:index.php");
	} else{
		$error = "Login tidak ditemukan";
	}
}

?>


<h2>LOGIN SISTEM</h2>
<form action="ceklogin.php" method="POST">
	<table>
		<tr>
			<td>USERNAME</td>
			<td><input type="text" name="iusername"></td>
		</tr>

		<tr>
			<td>PASSWORD</td>
			<td><input type="text" name="ipassword"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="tlogin" value="login"></td>
		</tr>
	</table>
</form>