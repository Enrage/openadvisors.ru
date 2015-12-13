<?php
namespace App\Controller;

use App\Controller\AppController;

class AboutUsController extends AppController {

	public function index() {
		$this->loadModel('Menu');
		$about_us = $this->Menu->find('all', [
			'fields' => ['id', 'title', 'alias', 'text'],
			'conditions' => ['alias' => 'about_us'],
			'recursive' => -1
		])->toArray();
		$this->set(compact('about_us'));
		return;
	}
}
?>