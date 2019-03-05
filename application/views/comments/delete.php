<?php foreach ($films_array as $value): ?>
	<p><?php echo $result ?> <a href="/movies/view/<?php echo $value['slug']?>">Вернуться назад</a></p>
<?php endforeach ?>
