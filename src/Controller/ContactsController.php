<?php
namespace App\Controller;

use App\Controller\AppController;

class ContactsController extends AppController {

	public function index() {
		$this->loadModel('Menu');
		$contacts = $this->Menu->find('all', [
			'fields' => ['id', 'title', 'alias', 'text'],
			'conditions' => ['alias' => 'contacts'],
			'recursive' => -1
		])->toArray();
		$this->set(compact('contacts'));
		return;
	}
}
?>