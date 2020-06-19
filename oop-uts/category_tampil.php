<h2>Daftar Kategori</h2>
<a href="index.php?page=category_input">tambah</a>

<?php 

include "app/Category.php";

$kat = new Category();
$rows = $kat->tampil();

?>

<table class="table1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Keterangan</td>
		<td>Edit</td>
		<td>Delete</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['category_id']; ?></td>
			<td><?php echo $row['category_name']; ?></td>
			<td><?php echo $row['category_text']; ?></td>
			<td><a href="index.php?page=category_edit&id=<?php echo $row['category_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=category_proses&delete-id=<?php echo $row['category_id']; ?>">Delete</td>
		</tr>
	<?php } ?>
</table>