<?php 
	require_once('models/models.php');

	class Controller {
		public $model;
		public function __construct() {
			$this->model = new Model();
		}

		public function invoke() {
			$result = $this->model->getLogin($_POST['username'], $_POST['password']);
			if($result == 'login') {
				include 'views/afterlogin.php';
			}
			else{
				include 'views/login.php';
			}
		}
	}
?>