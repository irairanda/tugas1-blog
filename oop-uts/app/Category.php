<?php


class Category extends Controller {

	public function __construct() {
		parent::__construct(); 
	}

	public function input() {
		$nama = $_POST['category_name'];
		$ket = $_POST['category_text'];

		$sql = "INSERT INTO tb_category (category_name, category_text) VALUES
										(:category_name, :category_text)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":category_name", $nama);
		$stmt->bindParam(":category_text", $ket);
		$stmt->execute();

		return false;
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_category";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM tb_category WHERE category_id=:category_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":category_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function  update()
	{
		$nama = $_POST['category_name'];
		$ket = $_POST['category_text'];
		$id = $_POST['category_id'];

		$sql = "UPDATE tb_category SET category_name=:category_name, category_text=:category_text WHERE category_id=:category_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":category_name", $nama);
		$stmt->bindParam(":category_text", $ket);
		$stmt->bindParam(":category_id", $id);

		$stmt->execute();

		return false; 
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_category WHERE category_id=:category_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam("category_id", $id);
		$stmt->execute();

		return false;
	} 
}