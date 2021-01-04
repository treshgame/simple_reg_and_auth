<?php
    $title = "Форма авторизации";
    require "header.php";
    require "php/connect.php";
    session_start();
?>
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h2>Форма авторизации</h2>
            <form action="php/auth.php" method="post">
                <input type="text" class="form-control" name="login" placeholder="Введите логин"><br/>
                <input type="password" class="form-control" name="password" placeholder="Введите пароль"><br/>
                <button class="btn btn-success" name="do_login">Авторизоваться</button>
            </form>
            <p>Если вы не зарегестрированны, нажмите <a href="index.php">сюда</a></p>
        </div>
    </div>
</div>

<?php require "footer.php" ?>