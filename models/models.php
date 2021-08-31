<?php
	require_once("dbh.php");

	class Model extends Dbh {
		public function getLogin($username, $password) {
			
			$sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?";
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$username, $password]);
			$results = $stmt->fetchAll();

			if(count($results) > 0) {
				return 'login';
			}
			else {
				return 'invalid user';
			}
			
		}
	}
?>