<h3><?php echo $title; ?>
	<?php if($this->dx_auth->is_admin()) { ?>
        <a href="/news/edit/<?php echo $slug; ?> Редактировать новость"><button type="button" class="btn btn-default">
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
	<?php   } ?>
</h3>
<div class="well">
	<p class="lead"><?php echo $content; ?></p>
</div>
<br><br><br><a href="/news/">Все новости</a>