<?php 

include_once "app/Controller.php";
include_once "app/Photo.php";

$photo = new Photo();
if (isset($_POST['btn-simpan'])) {

	$date = $_POST["photo_date"];
	$title = $_POST["photo_title"];
	$text = $_POST["photo_text"];

	$file = $_FILES["file"]["name"];
	$tmp_name = $_FILES["file"]["tmp_name"];

	$id = $_POST["post_id"];

	move_uploaded_file($tmp_name, "gambar".$file);
	$kat->input();
	header("location:index.php?page=photo_tampil");
}

if ($_POST['btn-edit']) {
	$kat->update();
	header("location:index.php?page=photo_tampil");
}

if ($_GET['delete-id']) {
	$kat->delete($_GET['delete-id']);
	header("location:index.php?page=photo_tampil");
}