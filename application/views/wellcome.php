<!DOCTYPE HTML>

<html>
	<head>
	  <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	  <title>wellcome</title>
	  
	</head>
	
	<body>
		<?php if($this->session->userdata('userID')){?>
		<p>You are logged in!</p>
		<p><a href="<?=base_url()?>index.php/users/logout">logout</a></p>
		<?php }else{?>
		<p><a href="<?=base_url()?>index.php/users/login">login</a></p>
		<?php } ?>
	</body>
</html>