<h2>Post / Upload</h2>
<a href="index.php?page=post_input">Tambah</a>
<?php
include "app/Post.php";

$kat = new Post();
$rows = $kat->tampil();

?>

<table class="table1">
	<tr>
		<td>NO</td>
		<td>Tanggal</td>
		<td>Slug</td>
		<td>title</td>
		<td>Keterangan</td>
		<td>category</td>
	</tr>
	<?php foreach ($rows as $row) { ?>
		<tr>
			<td><?php echo $row['post_id']; ?></td>
			<td><?php echo $row['post_date']; ?></td>
			<td><?php echo $row['post_slug']; ?></td>
			<td><?php echo $row['post_title']; ?></td>
			<td><?php echo $row['post_txt']; ?></td>
			<td><?php echo $row['category_id']; ?></td>
			<td><a href="index.php?page=post_edit&id=<?php echo $row['post_id']; ?>">Edit</a></td>
			<td><a href="index.php?page=post_proses&delete-id=<?php echo $row['post_id']; ?>">Delete</a></td>
		</tr>
	<?php } ?>
</table>