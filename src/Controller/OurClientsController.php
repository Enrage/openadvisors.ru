<?php
namespace App\Controller;

use App\Controller\AppController;

class OurClientsController extends AppController {

	public function index() {
		$this->loadModel('Menu');
		$clients = $this->Menu->find('all', [
			'fields' => ['id', 'title', 'alias', 'text'],
			'conditions' => ['alias' => 'our_clients'],
			'recursive' => -1
		])->toArray();
		$this->set(compact('clients'));
		return;
	}
}
?>