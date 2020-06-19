<?php


class Album extends Controller {

	public function __construct() {
		parent::__construct(); 
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_album";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function input() {
		$name = $_POST['album_name'];
		$text = $_POST['album_text'];
		$id = $_POST['photo_id'];

		$sql = "INSERT INTO tb_album (album_name, album_text, photo_id) VALUES
										(:album_name, :album_text, :photo_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_name", $name);
		$stmt->bindParam(":album_text", $text);
		$stmt->bindParam(":photo_id", $id);
		$stmt->execute();

		return false;
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM tb_album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function  update()
	{
		$name = $_POST['album_name'];
		$text = $_POST['album_text'];
		$id1 = $_POST['photo_id'];
		$id2 = $_POST['album_id'];

		$sql = "UPDATE tb_album SET album_name=:album_name, album_text=:album_text, photo_id=:photo_id WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_name", $name);
		$stmt->bindParam(":album_text", $text);
		$stmt->bindParam(":photo_id", $id1);
		$stmt->bindParam(":album_id", $id2);

		$stmt->execute();

		return false; 
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam("album_id", $id);
		$stmt->execute();

		return false;
	}
}