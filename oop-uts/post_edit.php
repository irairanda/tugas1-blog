<?php

include "app/Post.php";

$id = $_GET['id'];

$kat = new Post();
$row = $kat->photo_edit($id);
?>
<h2>Edit Post</h2>
<form method="Post" action="post_proses.php">
	<input type="hidden" name="post_id" value="<?php echo $id; ?>">
	<table class="table1">
		<tr>
			<td>Nama</td>
			<td><input type="date" name="post_date" value="<?php echo $row['post_date']; ?>"></td>
		</tr>
		<tr>
			<td>post Slug</td>
			<td><input type="text" name="post_slug" value="<?php echo $row['post_slug']; ?>"></td>
		</tr>
		<tr>
			<td>Post Title</td>
			<td><input type="text" name="post_title" value="<?php echo $row['post_title']; ?>"></td>
		</tr>
		<tr>
			<td>Post Text</td>
			<td><textarea name="post_txt"><?php echo $row['post_txt']; ?></textarea></td>
		</tr>
		<tr>
			<td>Ketegory</td>
			<td><input type="number" name="category_id" value="<?php echo $row['category_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
</form>