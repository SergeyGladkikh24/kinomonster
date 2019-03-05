<h2>Все фильмы</h2>

<p><a href="create" title="Добавить фильм/сериал"><button type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button></a></p><br>

<?php foreach ($movies as $key => $value): ?>
	<p><a class="view" href="view/<?php echo $value['slug']; ?>"><?php echo $value['name']; ?></a> | <a href="edit/<?php echo $value['slug']; ?>" title="Редактировать фильм"><button type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a> | <a href="delete/<?php echo $value['slug']; ?>" title = "Удалить фильм"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a></p>
<?php endforeach ?>

<h1>Все сериалы</h1>

<?php foreach ($serials as $key => $value): ?>
	<p><a class="view" href="view/<?php echo $value['slug']; ?>"><?php echo $value['name']; ?></a> | <a href="edit/<?php echo $value['slug']; ?>" title="Редактировать сериал"><button type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a> | <a href="delete/<?php echo $value['slug']; ?>" title="Удалить сериал"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a></p>
<?php endforeach ?>