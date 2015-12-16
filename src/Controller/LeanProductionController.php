<?php
namespace App\Controller;

use App\Controller\AppController;

class LeanProductionController extends AppController {

	public function index() {
		$this->loadModel('Menu');
		$lean_production = $this->Menu->find('all', [
			'fields' => ['id', 'title', 'alias', 'text'],
			'conditions' => ['alias' => 'lean_production'],
			'recursive' => -1
		])->toArray();
		$title = 'Бережливое производство';
		$this->set(compact('lean_production', 'title'));
		return;
	}
}
?>