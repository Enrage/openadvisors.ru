<?php
namespace App\Controller;

use App\Controller\AppController;

class OurSoftwareController extends AppController {

	public function index() {
		$this->loadModel('Menu');
		$software = $this->Menu->find('all', [
			'fields' => ['id', 'title', 'alias', 'text'],
			'conditions' => ['alias' => 'our_software'],
			'recursive' => -1
		])->toArray();
		$title = 'Наше программное обеспечение';
		$this->set(compact('software', 'title'));
		return;
	}
}
?>