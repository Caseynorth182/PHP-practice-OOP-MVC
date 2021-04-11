<?php

use App\Services\Page;

if($_SESSION['user']) {
	\App\Services\Router::redirect('/profile');
}

?>

<!doctype html>
<html lang="en">
<? Page::part('head'); ?>
<body>
<? Page::part('navbar'); ?>


<div class="container">
	<h2 class="mt-4 col-md-6">Sign in</h2>
	<form class="mt-4 col-md-6" method="post" action="/auth/login">
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email"
			       class="form-control"
			       id="exampleInputEmail1"
			      name="email"
			       placeholder="Enter email">
			<small id="emailHelp"
			       class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password"
			       class="form-control"
			       id="exampleInputPassword1"
			       placeholder="Password"
			name="password">
		</div>

		<button type="submit"
		        class="btn btn-primary">Submit
		</button>
	</form>

</div>
<? Page::part('footer'); ?>


</body>
</html>