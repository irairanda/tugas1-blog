<?php

include "app/Category.php";

$id = $_GET['id'];

$kat = new Category();
$row = $kat->edit($id);
?>
<h2>Edit Kategori</h2>
<form method="POST" action="category_proses.php">
	<input type="hidden" name="category_id" value="<?php echo $id; ?>">
	<table class="table1">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="category_name" value="<?php echo $row['category_name']; ?>"></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td><textarea name="category_text"><?php echo $row['category_text']; ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
</form>