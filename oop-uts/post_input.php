<h2>Tambah Post</h2>
<form method="POST" action="post_proses.php">
<table class="table1">
	<tr>
		<td>Tanggal</td>
		<td><input type="date" name="post_date"></td>
	</tr>
	<tr>
		<td>Slug</td>
		<td><input type="text" name="post_slug"></td>
	</tr>
	<tr>
		<td>Title</td>
		<td><input type="text" name="post_title"></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><textarea name="post_txt"></textarea></td>
	</tr>
	<tr>
		<td>Category</td>
		<td><input type="number" name="category_id"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
	</tr>
</table>
</form>
