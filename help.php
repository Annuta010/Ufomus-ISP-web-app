<?php
    require_once("assets/libs/api.php");
    require_once("assets/libs/data.php");
    require_once("assets/libs/usertype.php");
    session_start(); 
    
    $data = new Data();
    $api = new Api();
    $data->header = "search question";
    $str = str_replace("?","",@$_GET["search"]);
    $terms = explode(" ", $str);
    $i = 0;
    
    foreach ($terms as $item) {
        if (!$item == "" ){
            $data->arr[] = $item; 
        }
    }
        
    $answer = $api->request($data);
    
    //Задание заголовка для страницы:
    $title = "Ufomus - помощь";
/*     $data = new Data();
    $api = new Api();
    $data->header = "all from questions";
    $res = $api->request($data); */
    
    //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
    ob_start();
    //Подключение целевой страницы для дальнейшего отображения в основной структуре:
    include("assets/templates/pages/main_help.php");
    //Конец буферизации посредством записи полученной информации в переменную структуры:
    $main = ob_get_clean();
    //Подключение структурного описания скелета страницы:
    include("assets/templates/html.php"); 
 
?>