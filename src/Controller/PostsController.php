<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;

class PostsController extends AppController {

	public function index($alias = null) {
		$this->loadModel('Menu');
		if (is_null($alias)) {
			$posts = $this->Posts->find('all', [
				'order' => ['id' => 'DESC'],
				'recursive' => -1
			])->toArray();
		}
		$main_alias = substr($_SERVER['REQUEST_URI'], 1);
		$menu = $this->Menu->find('all', [
			'conditions' => ['alias' => $main_alias],
		])->toArray();

		$title = $menu[0]->title;
		$meta['keywords'] = $menu[0]->keywords;
		$meta['description'] = $menu[0]->description;

		$this->set(compact('posts', 'title', 'meta'));
		return;
	}
}
?>