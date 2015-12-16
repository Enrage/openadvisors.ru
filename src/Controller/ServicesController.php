<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;

class ServicesController extends AppController {

	public function index($alias = null) {

		if (is_null($alias)) {
			// Все услуги
			$services = $this->Services->find('all', [
				'fields' => ['id', 'title', 'alias'],
				'conditions' => ['parent_id !=' => 0],
				'recursive' => -1
			])->toArray();
			$title = 'Услуги';
			$this->set(compact('services', 'title'));
			return;
		} else {
			$service_id = $this->Services->find('all', [
				'fields' => ['id', 'alias', 'text', 'parent_id'],
				'conditions' => ['alias' => $alias],
			])->toArray();

			$this->set(compact('service_id'));

			if ($service_id[0]->parent_id == 0) {
				// Если это подкатегрия услуг
				$services = $this->Services->find('all', [
					'fields' => ['id', 'title', 'alias', 'parent_id', 'keywords', 'description'],
					'conditions' => ['Services.parent_id' => $service_id[0]->id],
					'recursive' => -1
				])->toArray();

				$meta_service = $this->Services->find('all', [
					'fields' => ['title', 'keywords', 'description'],
					'conditions' => ['alias' => $alias]
				])->toArray();
				$title = $meta_service[0]->title;

			} else {
				// Если это сама услуга
				$services = $this->Services->find('all', [
					'fields' => ['id', 'title', 'alias', 'text', 'keywords', 'description'],
					'conditions' => ['alias' => $alias],
					'recursive' => -1
				])->toArray();
				$title = $services[0]->title;
			}

			if (!$services) {
				throw new NotFoundException('Такой страницы нет');
			}
			$this->set(compact('services', 'title'));
			return;
		}

		if (!$this->Services->exists($alias)) {
			throw new NotFoundException('Такой страницы нет');
		}
	}
}
?>