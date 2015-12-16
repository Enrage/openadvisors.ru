<?php
namespace App\Controller;

use App\Controller\AppController;

class RecommendationsController extends AppController {
	public function index() {
		$title = 'Рекомендации';
		$this->set(compact('title'));
	}
}
?>