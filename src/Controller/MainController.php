<?php
namespace App\Controller;

use App\Controller\AppController;

class MainController extends AppController {

	public function index() {
		$title = 'Главная страница';
		$meta['keywords'] = 'Открытые инновации, openadvisors, open innovation, консалтинговая лаборатория';
		$meta['description'] = 'Мы разрабатываем и реализуем комплексные решения в области стратегического, финансового и инвестиционного управления, управления персоналом и организационного развития.';
		$this->set(compact('title', 'meta'));
	}
}
?>