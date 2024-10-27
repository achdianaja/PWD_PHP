<?php
$title = 'Login';
include 'components/head.php';
?>

<div class="content-center">
    <div class="container" style="width: 50%; padding: 100px;">
        <div class="card">
            <h4 style="margin-bottom: 10px;">Login</h4>
            <hr>
            <div class="card-body" style="padding: 60px;">
                <form action="contents/home.php">
                    <div>
                        <input type="text" name="" id="name" required placeholder="Nama" class="form-control">
                    </div>
                    <div>
                        <input type="submit" onclick="btnSubmit()" class="btn btn-violet">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

