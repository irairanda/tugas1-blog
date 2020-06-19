<?php

include_once "app/Controller.php";
include_once "app/Album.php";

$kat = new Album();

if ($_POST['btn-simpan']) {
	$kat->input();
	header("location:index.php?page=album_tampil");
}

if ($_POST['btn-edit']) {
	$kat->update();
	header("location:index.php?page=album_tampil");
}

if ($_GET['delete-id']) {
	$kat->delete($_GET['delete-id']);
	header("location:index.php?page=album_tampil");
}