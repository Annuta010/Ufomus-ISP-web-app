<?php
    require_once("api.php");
    require_once("data.php");
    session_start();
    $data = new Data();

    $data->par2 = session_id();
    $api = new Api();

    $data->header = "checkauth token";
    $data->par1 = @$_SESSION["token"];
    $data->par2 = session_id();
    $res = $api->request($data);
    $data->header = "create question";
    $data->par1 = @$_POST["question_text"];
    $data->par3 = @$_POST["contact"];
    if ($res["header"] == "checkauth user") {
        $data->par2 = "NULL";
    } else {
        $data->par2 = $res["items"][0]["ID Пользователя"];
    }
    $api->request($data);
    header('Location: ../../help.php');
 
?>
