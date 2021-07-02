<?php
    require_once("assets/libs/api.php");
    require_once("assets/libs/data.php");
    require_once("assets/libs/usertype.php");
    session_start();
    
    //Задание заголовка для страницы:
    $title = "Ufomus - документация";
    $data = new Data();
    $api = new Api();
    $data->header = "all from documents";
    $res = $api->request($data);
    $data->header = "all from document cat";
    $res2 = $api->request($data);
    //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
    ob_start();
    //Подключение целевой страницы для дальнейшего отображения в основной структуре:
    include("assets/templates/pages/main_documents.php");
    //Конец буферизации посредством записи полученной информации в переменную структуры:
    $main = ob_get_clean();
    //Подключение структурного описания скелета страницы:
    include("assets/templates/html.php"); 
?>