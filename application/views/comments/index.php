<h2>Все комментарии</h2><br>

<?php foreach ($comments as $key => $value): ?>
	<p><a href="view/<?php echo $value['id']; ?>">Комментарий <?php echo $value['id']; ?></a> | <a href="/comments/delete/<?php echo $value['id'] ?>">delete</a>
<?php endforeach ?>