<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;

class PostController extends AppController {

	public function index($alias) {
		$this->loadModel('Posts');
		$post = $this->Posts->find('all', [
			'conditions' => ['alias' => $alias],
			'recursive' => -1
		])->toArray();
		$title = $post[0]->title;
		$meta['keywords'] = $post[0]->keywords;
		$meta['description'] = $post[0]->description;

    if (!$post) {
      throw new NotFoundException('Такой страницы нет');
    }
    $this->set(compact('post', 'title', 'meta'));
    return;

		if (!$this->Posts->exists($alias)) {
			throw new NotFoundException('Такой страницы нет');
		}
	}
}
?>