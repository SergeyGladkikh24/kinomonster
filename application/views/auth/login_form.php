<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Войти</title>

	<!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Main Style -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<style>

    .panel-open{
	width: 31%;
	margin: 5% auto;
}
.panel-open .password{
	 margin-left: 0;
} 

.panel-open label{
	font-size: 16px;
	margin-bottom: 16px;
}

.panel-open .submit{
	font-size: 18px;
}

@media (max-width: 1024px){
	.panel-open{
		width: 45%;
	}
}

@media (max-width: 768px){
	.panel-open{
		width: 50%;
	}
}

@media (max-width: 425px){
	.panel-open{
		width: 80%;
	}
}

@media (max-width: 375px){
	.panel-open{
		width: 90%;
	}
}
</style>
<body>
	
<?php
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'size'	=> 30,
		'value' => set_value('username'),
		'class' => 'username form-control'
	);

	$password = array(
		'name'	=> 'password',
		'id'	=> 'password',
		'size'	=> 30,
		'class' => 'password form-control'
	);

	$remember = array(
		'name'	=> 'remember',
		'id'	=> 'remember',
		'value'	=> 1,
		'checked'	=> set_value('remember'),
		'style' => 'margin:0;padding:0'
	);

	$confirmation_code = array(
		'name'	=> 'captcha',
		'id'	=> 'captcha',
		'maxlength'	=> 8
	);

	$submit = array(
		'class' => 'submit pull-right'
	);

?>

	<div class="panel-open">
		<div class="panel panel-info">
            <div class="panel-heading"><div class="sidebar-header">Вход</div></div>
            <div class="panel-body">
				<?php echo form_open($this->uri->uri_string())?><br>
				<?php echo $this->dx_auth->get_auth_error(); ?><br><br>

				<?php echo form_label('Имя пользователя: ', $username['id']);?>
				<?php echo form_input($username)?><br>
				<?php echo form_error($username['name']); ?><br>

				<?php echo form_label('Пароль:', $password['id']);?>
				<?php echo form_password($password)?><br>
				<?php echo form_error($password['name']); ?><br>

				<?php echo form_checkbox($remember);?> <?php echo form_label('Запомнить меня', $remember['id']);?> <br><br>

				<?php echo anchor($this->dx_auth->forgot_password_uri, 'Восстановить пароль');?> /<?php
				if ($this->dx_auth->allow_registration) {
					echo anchor($this->dx_auth->register_uri, ' Регистрация');
				};
				?><br>

				<?php echo form_submit('Login','Вход',$submit);?>

				<?php echo form_close()?>


				<?php  
					
				$this->session->set_flashdata('general__error', $this->dx_auth->get_auth_error()); 
				$this->session->set_flashdata('username__error', form_error($username['name'])); 
				$this->session->set_flashdata('password__error', form_error($password['name'])); 

				?>

    		</div>
  		</div>
  </div>         


</body>
</html>


