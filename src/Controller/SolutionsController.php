<?php
namespace App\Controller;

use App\Controller\AppController;

class SolutionsController extends AppController {

	public function index() {
		$title = 'Решения';
		$this->set(compact('title'));
	}
}
?>