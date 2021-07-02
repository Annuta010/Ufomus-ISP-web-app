<?php 
    global $usertype;
    $usertype = "Частным лицам";
    if(!empty($_POST["type"])) {
        $usertype = $_POST["type"];
    }

?>