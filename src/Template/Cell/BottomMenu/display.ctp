<nav id="bottom_menu" class="clearfix">
	<ul>
		<?php foreach ($menu as $menu_item): ?>
		<li><a href="<?= $this->Url->build("/$menu_item->alias") ?>"><?= $menu_item->title ?></a>
			<ul>
			<?php foreach ($menu_item->children as $item): ?>
				<li><a href="<?= $this->Url->build("/$item->alias") ?>"><?= $item->title ?></a></li>
			<?php endforeach ?>
			</ul>
		</li>
		<?php endforeach ?>
	</ul>
</nav> <!-- #bottom_menu -->