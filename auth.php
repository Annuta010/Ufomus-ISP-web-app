<?php
    require_once("assets/libs/api.php");
    require_once("assets/libs/data.php");
    session_start();
    $data = new Data();
    $api = new Api();


    if (!empty($_SESSION["token"])) {
        $data->header = "checkauth token";
        $data->par1 = $_SESSION["token"];
        $data->par2 = session_id();
        $res = $api->request($data);
        if ($res["header"] == "success") {
            $_SESSION["id_user"] = $res["items"]["ID Пользователя"];
            $_SESSION["user_group"] = $res["items"]["Уровень администрации"];
            $data->header = "update token";
            $data->par1 = session_id();
            $res = $api->request($data);
            header('Location: lk.php');
        } else {
            $_SESSION["token"] = "";
            $_SESSION["id_user"] = "";
            $_SESSION["user_group"] = "";
        }
    }

    if( (!empty($_POST)) && ($_POST["form-type"] =="auth")  ) {
         
        $data->header = "checkauth user";
        $data->par1 = $_POST["login"];
        $data->par2 = $_POST["password"];
        $res = $api->request($data);
        if ($res["header"] == "success") {
            $_SESSION["id_user"] = $res["items"]["ID пользователя"];
            $_SESSION["user_group"] = $res["items"]["Уровень администрации"];
            $data->header = "create token";
            $data->par1 = $res["items"]["ID пользователя"]; 
            $data->par2 = $data->genRandomString(32);
            $res = $api->request($data);
            $_SESSION["token"] = $data->par2;
            header('Location: lk.php');
            
        } else {
            $_SESSION["token"] = "";
            $_SESSION["id_user"] = "";
            $_SESSION["user_group"] = "";
            $autherror = "При авторизации произошла ошибка. Проверьте подключение к интернету и введенные данные";
        }
    }

        //Задание заголовка для страницы:
        $title = "Ufomus - вход";
        //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
        ob_start();
        //Подключение целевой страницы для дальнейшего отображения в основной структуре:
        include("assets/templates/forms/form_auth.php");
        //Конец буферизации посредством записи полученной информации в переменную структуры:
        $main = ob_get_clean();
        //Подключение структурного описания скелета страницы:
        include("assets/templates/form_html.php"); 

?>