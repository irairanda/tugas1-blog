<h2>Daftar Photo</h2>
<a href="index.php?page=album_input">Tambah</a>

<?php

include "app/Album.php";

$kat = new Album();
$rows = $kat->tampil();

?>

<table class="table1">
	<tr>
		<td>No</td>
		<td>Album Name</td>
		<td>Album Text</td>
		<td>Kode Photo</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['album_id']; ?></td>
			<td><?php echo $row['album_name']; ?></td>
			<td><?php echo $row['album_text']; ?></td>
			<td><?php echo $row['photo_id']; ?></td>
			<td><a href="index.php?page=album_edit&id=<?php echo $row['album_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=album_proses&delete-id=<?php echo $row['album_id']; ?>">Delete</a></td>
		</tr>
	<?php } ?>
</table>