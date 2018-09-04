<!DOCTYPE html>
<html lang="en">  
<head>
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>
	<div class="container">
		<h2>User Account</h2>
		<h3>Welcome <?php echo $user['name']; ?> as Super Admin!</h3>
		<div class="account-info">
			<p><b>Name: </b><?php echo $user['name']; ?></p>
			<p><b>Email: </b><?php echo $user['email']; ?></p>
			<p><b>Phone: </b><?php echo $user['phone']; ?></p>
		</div>
		<a href="<?php echo base_url();?>index.php/users/logout">Logout</a>
	</div>
</body>
</html>