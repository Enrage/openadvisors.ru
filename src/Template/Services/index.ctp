<div id="content" class="clearfix">
	<?php if (isset($service_id[0]) && $service_id[0]->parent_id != 0): ?>
	<?= $services[0]->text ?>
	<?php else: ?>
	<h2>Услуги</h2>
	<ul class="services">
		<?php foreach ($services as $service): ?>
			<li><?= $this->Html->link($service->title, "service/{$service->alias}") ?></li>
			<?php if (count($service->id) > 3 && $service->id % 2 != 0) echo '<br>'; ?>
		<?php endforeach ?>
	</ul> <!-- .services -->
	<?php endif ?>
</div> <!-- #content -->