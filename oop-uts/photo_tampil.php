<h2>Daftar Photo</h2>
<a href="index.php?page=photo_input">Tambah</a>
<?php
include "app/Photo.php";

$kat = new Photo();
$rows = $kat->photo_tampil();

?>
<table class="table1">
	<tr>
		<td>No</td>
		<td>Tanggal</td>
		<td>Title Photo</td>
		<td>Keterangan</td>
		<td>photo</td>
		<td>kode Post</td>
	</tr>

	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['photo_id']; ?></td>
			<td><?php echo $row['photo_date']; ?></td>
			<td><?php echo $row['photo_title']; ?></td>
			<td><?php echo $row['photo_text']; ?></td>
			<td><img src="gambar/<?php echo $row['photo_upload']?>" width="100"></td>
			<td><?php echo $row['post_id']; ?></td>
			<td><a href="index.php?page=photo_edit&id=<?php echo $row['photo_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=photo_proses&delete-id=<?php echo $row['photo_id']; ?>">Delete</a></td>
		</tr>
	<?php } ?>
</table>