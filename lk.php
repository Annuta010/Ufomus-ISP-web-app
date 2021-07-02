<?php
    require_once("assets/libs/api.php");
    require_once("assets/libs/data.php");
    require_once("assets/libs/usertype.php");
    session_start();
    $data = new Data();
    $api = new Api();
    $data->par1 = $_SESSION["id_user"];

    $data->header = "user treaty"; 
    $treaty = $api->request($data);
    
    $data->header = "user info"; 
    $user_info = $api->request($data);

    
    if((!empty($_POST["form-type"])) && ($_POST["form-type"] == "update-user-data") ) {
        $data->header = "update user info";
        $data->par1 = $_SESSION["id_user"];
        $data->par3 = $_POST["name"];
        $data->par2 = $_POST["email"];
        $data->par4 = $_POST["password"];
        $res = $api->request($data);
    }

    $data->header = "user tariffs"; 
    $user_tariffs = $api->request($data);

    $data->header = "all from tariffs";
    $tariffs = $api->request($data);

    if(!is_null(@$_POST["period"])) {
        $data->header = "user traffic";
        $data->par2 = @$_POST["period"];
        $traffic = $api->request($data);
    }
    if(!empty($_POST["exit"])) {
        $data->header = "delete token";
        $data->par1 = $_SESSION["token"];
        $data->par2 = $_SESSION["id_user"];
        $res = $api->request($data);
        $_SESSION["token"] = "";
        $_SESSION["id_user"] = "";
        $_SESSION["user_group"] = "";
        header('Location: index.php');
    }
    if(!empty($_POST["del-acc"])) {
        $data->header = "delete token";
        $data->par1 = $_SESSION["token"];
        $data->par2 = $_SESSION["id_user"];
        $res = $api->request($data);
        $data->header = "delete user";
        $data->par1 = $_SESSION["id_user"];
        $api->request($data);
        $_SESSION["token"] = "";
        $_SESSION["id_user"] = "";
        $_SESSION["user_group"] = "";
        header('Location: index.php');
    }
    

    //Задание заголовка для страницы:
    $title = "Ufomus - личный кабинет";
    //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
    ob_start();
    //Подключение целевой страницы для дальнейшего отображения в основной структуре:
    include("assets/templates/pages/main_lk.php");
    //Конец буферизации посредством записи полученной информации в переменную структуры:
    $main = ob_get_clean();
    //Подключение структурного описания скелета страницы:
    include("assets/templates/html.php"); 

?>