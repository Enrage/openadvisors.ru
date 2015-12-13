<div id="content">
	<h2>Наши публикации</h2>
	<section id="posts">
		<table>
			<tr>
				<th>Название</th>
				<th>Автор</th>
				<th>Где опубликовано</th>
				<th>&nbsp;</th>
			</tr>
			<?php foreach ($posts as $post): ?>
			<tr>
				<td class="title"><?= $post->id ?>. &nbsp;<?= $post->title ?></td>
				<td class="author"><?= $post->author ?></td>
				<td class="source"><?= $post->source ?></td>
				<td><a href="post/<?= $post->alias ?>">Читать</a></td>
			</tr>
			<?php endforeach ?>
		</table>
	</section>
</div> <!-- #content -->