<?php

class Controller {

	protected object $db;

	public function __construct() {

		try {

			$this->db = new PDO ("mysql:host=localhost;dbname=db5", "root", "");
		} catch (Exception $e) {
			die ("erorr! " . $e->getMessage());
		}
	}
}