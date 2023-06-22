<?php
    require_once("../../php/connect.php");
    // vars
    $id_del = $_POST['id_del'];
    $img_add = $_POST['img_add'];
    $par_1 = $_POST['par_1'];
    $par_2 = $_POST['par_2'];
    $par_3 = $_POST['par_3'];
    $par_4 = $_POST['par_4'];
    // удаление картинок с пациентами
    function patients_delete($id) {
        global $pdo;
        $delete = "DELETE FROM `clients` WHERE `clients_id` = ?";
        $delete_d = $pdo->prepare($delete);
        $delete_d->execute(array("$id"));
    }
    function patients_add($imgs) {
        global $pdo;
        foreach($imgs as $arr) {
            $add = "INSERT INTO `clients` SET `clients_img` = ?";
            $add_d = $pdo->prepare($add);
            $add_d->execute(array("$arr"));
        }
    }
    function about_update($par_1, $par_2, $par_3, $par_4) {
        global $pdo;
        $update = "UPDATE `about` SET `about_1_par` = ?, `about_2_par` = ?, `about_3_par` = ?, `about_4_par` = ? WHERE `about_id` = 2";
        $update_d = $pdo->prepare($update);
        $update_d->execute(array("$par_1", "$par_2", "$par_3", "$par_4"));
    }
    if($img_add != "") {
        patients_add($img_add);
    }
    if($par_1 != "" && $par_2 !="" && $par_3 != "" && $par_4 != "") {
        about_update($par_1, $par_2, $par_3, $par_4);
    }
    if ($id_del != "") {
        patients_delete($id_del);
    }