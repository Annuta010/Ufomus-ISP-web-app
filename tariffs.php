<?php
    require_once("assets/libs/api.php");
    require_once("assets/libs/data.php");
    require_once("assets/libs/usertype.php");
    session_start();
    
    $data = new Data();
    $api = new Api();

    $data->header = "all from tariffs";
    $tariffs = $api->request($data);
    $data->header = "all from tariff services";
    $tariff_services = $api->request($data);
    $found = false;

    if(!empty($_POST["service-des1"])) {
        $data->header = "new tariff";
        $data->par3 = $data->genRandomString(32);
        $data->par1 = $_POST["cost"];
        $api->request($data);

        $data->header = "get tariff_id";
        $res = $api->request($data);
        $data->par3 = $res["items"][0]["ID тарифа"];

        $data->header = "insert tariff services";
        for($i = 0; $i < (count($_POST) - 1); $i++) {
            $data->par1 = $_POST["service-des".($i+1)];
            $arr = explode(" ",$_POST["service-des".($i+1)]);
            $data->par2 = $arr[0];
            $api->request($data);
        }
        

    }
    //Задание заголовка для страницы:
    $title = "Ufomus - тарифы";
    //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
    ob_start();
    //Подключение целевой страницы для дальнейшего отображения в основной структуре:
    include("assets/templates/pages/main_tariffs.php");
    //Конец буферизации посредством записи полученной информации в переменную структуры:
    $main = ob_get_clean();
    //Подключение структурного описания скелета страницы:
    include("assets/templates/html.php"); 

?>
