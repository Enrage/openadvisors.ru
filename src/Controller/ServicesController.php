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
			$this->set(compact('services'));
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
					'fields' => ['id', 'title', 'alias', 'parent_id'],
					'conditions' => ['Services.parent_id' => $service_id[0]->id],
					'recursive' => -1
				])->toArray();
			} else {
				// Если это сама услуга
				$services = $this->Services->find('all', [
					'fields' => ['id', 'title', 'alias', 'text'],
					'conditions' => ['alias' => $alias],
					'recursive' => -1
				])->toArray();
			}

			if (!$services) {
				throw new NotFoundException('Такой страницы нет');
			}
			$this->set(compact('services'));
			return;
		}

		if (!$this->Services->exists($alias)) {
			throw new NotFoundException('Такой страницы нет');
		}
	}
}
?>