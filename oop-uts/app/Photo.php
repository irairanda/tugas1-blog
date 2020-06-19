<?php 


class Photo extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function photo_tampil()
	{
		$sql = "SELECT * FROM tb_photo";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function photo_input() {
		$date = $_POST['photo_date'];
		$title = $_POST['photo_title'];
		$text = $_POST['photo_text'];
		$gambar = $_POST['photo_upload'];
		$post = $_POST['post_id'];


		$sql = "INSERT INTO tb_photo (photo_date, photo_title, photo_text, photo_upload, post_id) VALUES
										(:photo_date, :photo_title, :photo_text, :photo_upload, :post_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photo_date", $date);
		$stmt->bindParam(":photo_title", $title);
		$stmt->bindParam(":photo_text", $text);
		$stmt->bindParam(":photo_upload", $gambar);
		$stmt->bindParam(":post_id", $post);
		$stmt->execute();

		return false;
	}

	public function photo_edit($id)
	{
		$sql = "SELECT * FROM tb_photo WHERE photo_id=:photo_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photo_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function  update()
	{
		$date = $_POST['photo_date'];
		$title = $_POST['photo_title'];
		$text = $_POST['photo_text'];
		$id1 = $_POST['post_id'];
		$id2 = $_POST['photo_id'];

		$sql = "UPDATE tb_photo SET photo_date=:photo_date, photo_title=:photo_title, photo_text=:photo_text, post_id=:post_id  WHERE photo_id=:photo_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photo_date", $date);
		$stmt->bindParam(":photo_title", $title);
		$stmt->bindParam(":photo_text", $text);
		$stmt->bindParam(":post_id", $id1);
		$stmt->bindParam(":photo_id", $id2);

		$stmt->execute();

		return false; 
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_photo WHERE photo_id=:photo_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam("photo_id", $id);
		$stmt->execute();

		return false;
	} 
}