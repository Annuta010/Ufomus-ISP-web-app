<?php
    require_once("assets/libs/api.php");
    require_once("assets/libs/data.php");
    session_start();
    $data = new Data();
    $api = new Api();

    if((!empty($_POST)) && ($_POST["form-type"] =="reg") ) {
        if($_POST["password"] == $_POST["conf-pass"]) {
            $data->header = "new user";
            $data->par1 = $_POST["login"];
            $data->par2 = $_POST["password"];
            $data->par3 = $_POST["user-name"];
            $res = $api->request($data);
            header('Location: auth.php');
        } else {
            $regerror = "Пароль и повторный пароль не совпадают";
        } 
    }

        //Задание заголовка для страницы:
        $title = "Ufomus - регистрация";
        //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
        ob_start();
        //Подключение целевой страницы для дальнейшего отображения в основной структуре:
        include("assets/templates/forms/form_reg.php");
        //Конец буферизации посредством записи полученной информации в переменную структуры:
        $main = ob_get_clean();
        //Подключение структурного описания скелета страницы:
        include("assets/templates/form_html.php"); 

?>