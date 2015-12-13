<?php
namespace App\Controller;

use App\Controller\AppController;

class LeanCenterController extends AppController {

	public function index() {
		$this->redirect('http://lean-center.ru');
	}
}
?>