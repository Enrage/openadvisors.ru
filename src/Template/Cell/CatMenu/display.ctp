<nav id="second_top_menu">
	<ul>
		<?php foreach ($services as $service): ?>
		<li><?= $this->Html->link($service->title, "services/{$service->alias}") ?>
			<ul>
			<?php foreach ($service->children as $item): ?>
				<li><?= $this->Html->link($item->title, "service/{$item->alias}") ?></li>
			<?php endforeach ?>
			</ul>
		</li>
		<?php endforeach ?>
	</ul>
</nav> <!-- #second_top_menu -->