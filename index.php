<?php
    require_once("assets/libs/api.php");
    require_once("assets/libs/data.php");
    require_once("assets/libs/usertype.php");
    session_start();
    
    $data = new Data();
    $api = new Api();

    $data->header = "all from promos";
    $promos = $api->request($data);
    $data->header = "all from tariffs";
    $tariffs = $api->request($data);

    if((!empty($_POST["form-type"])) && ($_POST["form-type"] == "new_request")) {
        $data->header = "new request";
        $data->par1 = $_POST["region"];
        $data->par2 = $_POST["street"];
        $data->par3 = $_POST["house"];
        $data->par4 = $_POST["building"];
        $data->par5 = $_POST["flat"];
        $data->par6 = $_POST["name"];
        $data->par7 = $_POST["phone"];
        $data->par8 = $_POST["tariff"];
        $req_res = $api->request($data);
    }

    if((!empty($_POST["form-type"])) && ($_POST["form-type"] == "check_av")) {
        $data->header = "check availability";
        $data->par1 = $_POST["region"];
        $data->par2 = $_POST["street"];
        $data->par3 = $_POST["house"];
        $check_res = $api->request($data);
        $check_res_val = false;
        if(!empty($check_res["items"])) {
            $check_res_val = true;
        }
    }
    

    //Задание заголовка для страницы:
    $title = "Ufomus - интернет провайдер";
    //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
    ob_start();
    //Подключение целевой страницы для дальнейшего отображения в основной структуре:
    include("assets/templates/pages/main_index.php");
    //Конец буферизации посредством записи полученной информации в переменную структуры:
    $main = ob_get_clean();
    //Подключение структурного описания скелета страницы:
    include("assets/templates/html.php");  
?>


