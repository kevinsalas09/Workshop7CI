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
		<h1 class="display-4">Add User</h1>
		<p class="lead">Add a new user</p>
		<hr class="my-4">
	</div>
    <form class="in-line" action="<?php echo site_url('user/insert'); ?>" method="POST" role="form">
        <div class="form-group">
            <label for="username">Username/Email</label>
            <input type="text" class="form-control" name="username">
        </div>
        <br>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <br>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <br>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Add</button>
        <br>
    </form>
</div>
</body>
</html>