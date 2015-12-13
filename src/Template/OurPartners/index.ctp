<div id="content">
	<h2>Наши партнеры</h2>
	<table class="partners">
		<?php foreach ($partners as $partner): ?>
		<tr>
			<td><?= $this->Html->image("/userfiles/partners/{$partner->img}", ['alt' => $partner->title, 'title' => $partner->title]) ?></td>
			<td><?= $this->Html->link($partner->title, $partner->link, ['target' => '_blank', 'escape' => false]) ?></td>
		</tr>
		<?php endforeach ?>
	</table> <!-- .partners -->
</div> <!-- #content -->