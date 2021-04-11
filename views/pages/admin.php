<?php

use App\Services\Page;
/*echo "<pre>";
var_dump($_SESSION);*/
if(!$_SESSION['user'] && $_SESSION['user']['group'] !== 2) {
	\App\Services\Router::redirect('/profile');
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
	    <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
		    <div class="card-header">Hello, ADMIN!</div>
		    <div class="card-body">
			    <h4 class="card-title"><? echo $_SESSION['user']['full_name']?></h4>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    </div>
	    </div>
    </div>

</div>
<? Page::part('footer'); ?>


</body>
</html>