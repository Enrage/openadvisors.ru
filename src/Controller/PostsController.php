<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;

class PostsController extends AppController {

	public function index($alias = null) {

		if (is_null($alias)) {
			$posts = $this->Posts->find('all', [
				'order' => ['id' => 'DESC'],
				'recursive' => -1
			])->toArray();
			$this->set(compact('posts'));
			return;
		}
	}
}
?>