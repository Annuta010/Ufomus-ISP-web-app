<?php
    require_once("assets/libs/api.php");
    require_once("assets/libs/usertype.php");
    require_once("assets/libs/data.php");
    session_start();
   
global $usertype;

if(!empty($_POST["form-type"]) && ($_POST["form-type"] == "new-promo") ) {
    $data = new Data();
    $data->header = "create promo";
    $data->par1 = $_POST["title"];
    $data->par2 = $_POST["description"];
    $data->par3 = $_POST["discount"];
    @$_FILES["image"]["name"] = $data->genRandomString(32).str_replace("image/", ".", $_FILES["image"]["type"]);
    $data->par4 = 'assets/img/'.@$_FILES["image"]["name"];
    $data->par5 = $_POST["start-date"];
    $data->par6 = $_POST["exp-date"];

    $api = new Api();
    $res = $api->request($data);

    if(move_uploaded_file(@$_FILES["image"]["tmp_name"], $data->par4)) {
       $filemess =  "Успешно";
    } else {
        $filemess = "Произошла ошибка при загрузке файла";
    }
}

    $title = "Панель администратора";
    //Начало буферизации вывода для получения содержимого файла с условием заданных значений:
    ob_start();
    //Подключение целевой страницы для дальнейшего отображения в основной структуре:
    include("assets/templates/pages/main_admin.php");
    //Конец буферизации посредством записи полученной информации в переменную структуры:
    $main = ob_get_clean();
    //Подключение структурного описания скелета страницы:
    include("assets/templates/html.php"); 

?>