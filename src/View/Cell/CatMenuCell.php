<?php
namespace App\View\Cell;

use Cake\View\Cell;

class CatMenuCell extends Cell {

	protected $_validCellOptions = [];

	public function display() {
		$this->loadModel('Services');
		$services = $this->Services->find('threaded');
		$services->cache('services', 'short');
		$this->set(compact('services'));
	}
}
?>