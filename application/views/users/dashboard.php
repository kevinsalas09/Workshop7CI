<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	
</head>
<body>
<div id="container-fluid">
	<div class="jumbotron">
		<h1 class="display-4">Dashboard</h1>
		<p class="lead">Welcome</p>
		<hr class="my-4">
	</div>
	<div class="row">
	<div class="col"></div>
    	<div class="col-11">
			<a class="btn btn-primary" href="<?php echo site_url('user/add'); ?>" role="button">Add</a>
			<table class="table table-light">
				<tbody>
					<tr>
						<th>Name</th>
						<th>LastName</th>
						<th>Actions</th>
					</tr>
					<?php
					foreach ($usuarios as $usuario) {
						echo "<tr><td>{$usuario['name']}</td>
						<td>{$usuario['lastname']}</td>
						<td><a href=\"edit/$usuario[id]\">Edit</a> | <a href=\"delete/$usuario[id]\">Delete</a></td></tr>";
					}
					?>
				</tbody>
			</table>
    	</div>
	<div class="col"></div>
  	</div>
</div>

</body>
</html>