<h1>Все посты</h1><br>

<?php if($this->dx_auth->is_admin()) { ?>
	<p><a href="create" title="Добавить пост"><button type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button></a></p><br>
<?php   } ?>

<?php foreach ($posts as $key => $value): ?>
	<p><a class="view" href="view/<?php echo $value['slug']; ?>"><?php echo $value['title']; ?></a>
	<?php if($this->dx_auth->is_admin()) { ?>
	 | <a href="edit/<?php echo $value['slug']; ?>" title = "Редактировать пост"><button type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button> </a> | <a href="delete/<?php echo $value['slug']; ?>" title="Удалить пост"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></a></p>
	<?php   } ?>
<?php endforeach ?>