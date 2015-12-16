<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;

class OurPartnersController extends AppController {
	public function index() {
		$this->loadModel('Partners');
		$partners = $this->Partners->find('all', [
			'fields' => ['id', 'title', 'img', 'link'],
			'order' => ['id' => 'DESC'],
			'recursive' => -1
		]);
		$title = 'Наши партнеры';
		$this->set(compact('partners', 'title'));
		return;
	}
}
?>