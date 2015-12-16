<?php
namespace App\Controller;

use App\Controller\AppController;

class AboutCompanyController extends AppController {

	public function index() {
		$this->loadModel('Menu');
		$about_company = $this->Menu->find('all', [
			'fields' => ['id', 'title', 'alias', 'text'],
			'conditions' => ['alias' => 'about_company'],
			'recursive' => -1
		])->toArray();
		$title = 'О компании';
		$this->set(compact('about_company', 'title'));
		return;
	}
}
?>