<?php

use App\Services\Page;

?>

<!doctype html>
<html lang="en">
<? Page::part('head'); ?>
<body>
<? Page::part('navbar'); ?>


<div class="container">
	<div class="alert alert-dismissible alert-warning col-md-6 mt-5 offset-3">

		<p>404 Page not found. Sorry....</p>
	</div>

</div>
<? Page::part('footer'); ?>


</body>
</html>

