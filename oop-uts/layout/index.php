<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Album Photo</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="layout/assets/images/albumm.png">
		</div>

		<div class="menu">
			<a href="index.php">Home</a>
			<a href="index.php?page=category_tampil">Kategori</a>
			<a href="index.php?page=post_tampil">Post</a>
			<a href="index.php?page=photo_tampil">Photo</a>
			<a href="index.php?page=album_tampil">Album</a>
			<a href="index.php?page=album_tampil">Logout</a>
		</div>

		<div class="main">
			<?php

				if (isset($_GET['page']))  {
					include $_GET['page'] . ".php";				
				} else {
					include "main.php";
				}

			?>
		</div>

		<div class="footer">

		</div>
		<div>
			<?php include "footer.php";?>
		</div>

		<div>
			
		</div>
	</div>
</body>
</html>