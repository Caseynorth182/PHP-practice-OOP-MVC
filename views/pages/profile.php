<?php

use App\Services\Page;
session_start();
/*echo "<pre>";
var_dump($_SESSION['user']['full_name']);*/
if(!$_SESSION['user']) {
	\App\Services\Router::redirect('/login');
}
?>

<!doctype html>
<html lang="en">
<? Page::part('head'); ?>
<body>
<? Page::part('navbar'); ?>


<div class="container">
    <h2 class="mt-4 col-md-6">Home</h2>

    <div class="jumbotron mt-4">
        <h1 class="display-3">Hello, <?= $_SESSION['user']['full_name']?></h1>
	    <img src="<? echo $_SESSION['user']['avatar']?>"
	         alt="" width="200" style="padding: 20px">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="/login" role="button">sign in</a>
        </p>
    </div>

</div>
<? Page::part('footer'); ?>


</body>
</html>