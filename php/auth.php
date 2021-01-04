<?php
    require_once "connect.php";
    if (isset($_POST['do_login'])){
        $errors = array();
        //Ищем пользователя в таблице
        $user = R::findOne('regist', 'login = ?', $_POST['login']);
        if($user){
            if(password_verify(md5($_POST['password']), $user->password)){
                $_SESSION['logger_user'] = $user;
                header('Location: index.php');
            }else{
                $errors[] = "Неверный пароль";
            }
        }else{
            $errors[] = "Такой пользователь не найден";
        }
        if(!empty($errors)){
            echo '<div style="color:red; ">'. array_shift($errors).'</div>';
        }else{
            echo '<div style="color:green; ">Авторизация прошла успешно</div>';
        }
    }