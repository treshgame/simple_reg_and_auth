<?php
    require 'connect.php';
    if(isset($_POST['regist'])){
        //Массив для ошибок
        $errors = array();
        if(trim($_POST['login'])==""){
            $errors[] = "Введите логин";
        }
        if(trim($_POST['password']) == ""){
            $errors[] = "Введите пароль";
        }

        if($_POST['password2'] != $_POST['password']){
            $errors[] = "Пароли несовпадают";
        }
        //Если логин уже существует (Считает в такбли)
        if(R::count( 'regist', "login = ?", array($_POST['login']))>0){
            $errors[] = "Такой логин уже существует";
        }
        //Если ошибок нет, то 
        if(empty($errors)){
            //Создаем таблицу 'users'
            $user = R::dispense('regist');
            //Добавляем в таблицу логин
            $user->login = $_POST['login'];
            //Хэшируем пароль
            $user->password = md5($_POST['password']);
            R::store($user); //Сохраняем таблицу
            echo '<div style="color: green;">Вы успешно зарегестрировались</div>';
        }else{
            //Выводим первую ошибку из массива и удадяем его от туда
            echo '<div style="color:red;">'. array_shift($errors).'</div>';
        }
    }