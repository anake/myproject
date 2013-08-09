<html>
<head><title>Login</title></head>
<body>
	<?php		
		echo form_open('login/check_login');
		$uname = array('id'=>'username', 'name'=>'username');
		$pword = array('id'=>'password', 'name'=>'password', 'type'=>'password');
	?>
	<div><?php echo form_input($uname);?></div>
	<?php echo form_error('username');?>
	<div><?php echo form_input($pword);?></div>
	<?php echo form_error('password');?>
	<div>
	<?php	
		echo form_submit('login', 'Login');
		echo form_close();
		echo $this->session->flashdata('error');
	?>
	</div>
</body>
</html>