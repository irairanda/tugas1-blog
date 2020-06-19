<h2>Tambah Photo</h2>
<form method="POST" action="photo_proses.php" enctype="multipart/form-date">
<table class="table1">
	<tr>
		<td>Tanggal</td>
		<td><input type="date" name="photo_date"></td>
	</tr>
	<tr>
		<td>Title Photo</td>
		<td><input type="text" name="photo_title"></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><textarea name="photo_text"></textarea></td>
	</tr>
	<tr>
		<td>Pilih Photo</td>
		<td><input type="file" name="photo_upload" id="gambar" required=""></td>
	</tr>
	<tr>
		<td>Post Kode</td>
		<td><input type="number" name="post_id"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
	</tr>
</table>
</form>