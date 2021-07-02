<?php
    require_once("assets/libs/api.php");
    require_once("assets/libs/usertype.php");
    session_start();
    
    //Задание заголовка для страницы:
    $title = "Ufomus - контакты";
    //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
    ob_start();
    //Подключение целевой страницы для дальнейшего отображения в основной структуре:
    include("assets/templates/pages/main_contacts.php");
    //Конец буферизации посредством записи полученной информации в переменную структуры:
    $main = ob_get_clean();
    //Подключение структурного описания скелета страницы:
    include("assets/templates/html.php"); 

?>