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

		<p>500: Произошла ошибка на сервере</p>
	</div>

</div>
<? Page::part('footer'); ?>


</body>
</html>

