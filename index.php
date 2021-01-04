<?php
    $title="Форма регистрации";
    require 'header.php';
    require "php/connect.php";
?>

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h2>Форма регистрации</h2>
            <form action="php/regist.php" method="post">
                <input type="text" class="form-control" name="login" placeholder="Введите логин">
                <input type="password" class="form-control" name="password" placeholder="Введите пароль">
                <input type="password" class="form-control" name="password2" placeholder="Повторите пароль">
                <button class="btn btn-success" name="regist" type="submit">Зарегистрироваться</button>
            </form>
            <br/>
            <p>Если вы уже зарегистрированы, то нажмите <a href="login_page.php">сюда</a></p>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>
