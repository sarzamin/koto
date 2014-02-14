

<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	
	
	<style type="text/css">
	
	
	* {
	margin: 0;
	padding: 0;
}

body {
	font-size: 62.5%;
	font-family: Helvetica, sans-serif;
}

p {
	font-size: 1.3em;
	margin-bottom: 15px;
}

#page-wrap {
	width: 660px;
	background: white;
	padding: 20px 50px 20px 50px;
	margin: 20px auto;
	min-height: 500px;
	height: auto !important;
	height: 500px;
}

#contact-area {
	width: 600px;
	margin-top: 25px;
}

#contact-area input, #contact-area textarea {
	padding: 5px;
	width: 200px;
	font-family: Helvetica, sans-serif;
	font-size: 1.4em;
	margin: 0px 0px 10px 0px;
	border: 2px solid #ccc;
}

#contact-area textarea {
	height: 90px;
}

#contact-area textarea:focus, #contact-area input:focus {
	border: 2px solid #900;
}

#contact-area input.submit-button {
	width: 100px;
	float: center;
}

label {
	float: left;
	text-align: right;
	margin-right: 15px;
	width: 100px;
	padding-top: 5px;
	font-size: 1.4em;
}
	
	</style>
</head>

<body>

	<div id="page-wrap">
				
		<div id="contact-area">
			
			<?php
				if($error==1){
					echo "your username/password did not match!<br>";
				}
			?>
			
			<?php
			$this->load->helper('form');
			echo form_open('users/login');
			?>
				<label for="Name">username:</label>
				<input type="text" name="username" id="Name" required/><br>

				<label for="Name">password:</label>
				<input type="password" name="Name" id="Name" required/><br>
				

				<label for=""></label>
				<input type="submit" name="submit" value="login" class="submit-button" />
			<?php
			echo form_close();
			?>
			
			<div style="clear: both;"></div>
			
				
		</div>
	
	</div>

</body>

</html>
