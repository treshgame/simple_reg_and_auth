<?php
  require "libs/rb-mysql.php";    //Подключение ReadBeanPHP
  //Подключение к БД через библиотеку
  R::setup( 'mysql:host=127.0.0.1;dbname=first_exp', 'root', 'root' );
  //Проверка поключения
  if(!R::testConnection()) die('No DB connaction');
  //Старт сесси для авторизации
  session_start();

?>