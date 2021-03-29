<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>	
<div class="container-fluid">
	<div class="jumbotron">
		<h1 class="display-4">Edit User</h1>
		<p class="lead">Edit an user</p>
		<hr class="my-4">
	</div>
    <?php
    $log = $user[0];
	?>
    <form class="in-line" action="<?php echo site_url('user/update'); ?>" method="POST" role="form">
        <input type="hidden" name="id" value="<?php echo set_value('username', $log['id']); ?>">
        <div class="form-group">
            <label for="username">Username/Email</label>
            <input type="text" class="form-control" name="username" value="<?php echo set_value('username', $log['username']); ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo set_value('name', $log['name']); ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" name="lastname" value="<?php echo set_value('lastname', $log['lastname']); ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" value="<?php echo set_value('password', $log['password']); ?>">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Edit</button>
        <br>
    </form>
</div>
</body>
</html>