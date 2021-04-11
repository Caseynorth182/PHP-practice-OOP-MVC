<?php

use App\Services\Page;

?>

<!doctype html>
<html lang="en">
<? Page::part('head'); ?>
<body>
<? Page::part('navbar'); ?>


<div class="container">
    <h2 class="mt-4 col-md-6">Sign UP</h2>
    <form class="mt-4 col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email"
                   class="form-control"
                   id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="userName">User text</label>
            <input type="text"
                   class="form-control"
                   id="userName"
                   placeholder="user text">
        </div>
        <div class="form-group">
            <label for="fullName">Full name</label>
            <input type="text"
                   class="form-control"
                   id="fullName"
                   placeholder="enter full name">
        </div>

        <div class="form-group">
            <label for="userAvatar">User avatar</label>
            <input type="file"
                   class="form-control"
                   id="userAvatar"
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password"
                   class="form-control"
                   id="exampleInputPassword1"
                   placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Password confirm</label>
            <input type="password"
                   class="form-control"
                   id="exampleInputPassword2"
                   placeholder="Password confirm">
        </div>

        <button type="submit"
                class="btn btn-primary">Submit
        </button>
    </form>

</div>
<? Page::part('footer'); ?>


</body>
</html>