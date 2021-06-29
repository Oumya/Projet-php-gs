<?php
use ism\lib\Session;
use ism\config\helper;

//verification des erreur de session
$array_error = [];
if (Session::keyExist("array_error")) {
    //recuperation des erreur de la session dans la variable local

    $array_error = Session::getSession("array_error");
    //dd($array_error);
    //suppression des erreur dans la session

    Session::destroyKey("array_error");
}
?>

<div class="container mt-5 ">
    <h4>Sign In </h4>
    <?php if (isset($array_error["error_login"])) : ?>
    <div class="alert alert-danger my-1 " role="alert">
        <strong><?= $array_error["error_login"] ?></strong>
    </div>
    <?php endif ?>
    <form action=" <?php path("security/login") ?>"  method="post">
        <div class="mb-1 mt-1">
            <label for="exampleInputEmail1" class="form-label">Login </label>
            <label class="pl-1">
                <input type="text" class="form-control" name="login">
            </label>
            <?php if (isset($array_error["login"])) : ?>
            <div id="emailHelp" class="form-text text-danger ">
                <?= $array_error["login"]; ?></div>
            <?php endif; ?>
        </div>
        <div class="mb-1">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <label class="pl-1">
                <input type="password" class="form-control" name="password">
            </label>
            <?php if (isset($array_error["password"])) : ?>
            <div id="emailHelp" class="form-text text-danger ">
                <?= $array_error["password"]; ?></div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="pl-1">
                <button type="submit" class="btn btn-outline-primary"><h4>Sign</h4></button>
            </div>
        </div>

    </form>

</div>
