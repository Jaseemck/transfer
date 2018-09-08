<!DOCTYPE html>
<html lang="en">  
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top ">
		<a class="navbar-brand" href="#">Palakkad Police Transfer</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ml-md-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/users/login">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">General Transfer</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="#">Request Transfer</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="<?php echo base_url(); ?>index.php/users/vacancy">Available Vacancies</a>
				</li>
				<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown link
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li> -->
				<li class="nav-item ">
					<a class="nav-link" href="<?php echo base_url();?>index.php/users/logout">Logout</a>
				</li>
			</ul>
		</div>
	</nav>
	
	<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
	<div class="container">
		<form>
			<div class="form-group">
				<label for="exampleFormControlSelect1">Select Station 1</label>
				<select class="form-control" id="exampleFormControlSelect1">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleFormControlSelect2">Example multiple select</label>
				<select multiple class="form-control" id="exampleFormControlSelect2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1">Example textarea</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
		</form>
		
	</div>
</div>
<div class="col-sm-3"></div></div>
	<br/><br/><!-- container end -->
	<!-- Button trigger modal -->

</body>
</html>