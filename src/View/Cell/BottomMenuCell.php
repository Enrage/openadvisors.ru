<?php
namespace App\View\Cell;

use Cake\View\Cell;

class BottomMenuCell extends Cell {

	protected $_validCellOptions = [];

	public function display() {
		$this->loadModel('Menu');
		$menu = $this->Menu->find('threaded');
		$menu->cache('menu', 'short');
		$this->set(compact('menu'));
	}
}
?>