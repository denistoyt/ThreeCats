<?php
    require_once("../../php/connect.php");
    // vars
    $id_del = $_POST['id_del'];
    $id_upd = $_POST['id_upd'];
    $title_add = $_POST['title_add'];
    $text_add = $_POST['text_add'];
    $date_add = $_POST['date_add'];
    $img_add = $_POST['img_add'];
    $title_update = $_POST['title_update'];
    $text_update = $_POST['text_update'];
    $date_update = $_POST['date_update'];
    $img_update = $_POST['img_upd'];
    // add
    function add($title, $text, $date, $img) {
        global $pdo;
        $add = "INSERT INTO `discounts` SET `discounts_title` = ?, `discounts_text` = ?, `discounts_date` = ?, `discounts_img` = ?";
        $add_d = $pdo->prepare($add);
        $add_d->execute(array("$title", "$text", "$date", "$img"));
    }
    // delete
    function delete($id) {
        global $pdo;
        $delete = "DELETE FROM `discounts` WHERE `discounts_id` = ?";
        $delete_d = $pdo->prepare($delete);
        $delete_d->execute(array("$id"));
    }
    // update
    function update($title, $text, $date, $img, $id) {
        global $pdo;
        $update = "UPDATE `discounts` SET `discounts_title` = ?, `discounts_text` = ?, `discounts_date` = ?, `discounts_img` = ? WHERE `discounts_id` = ?";
        $update_d = $pdo->prepare($update);
        $update_d->execute(array("$title", "$text", "$date", "$img", "$id"));
    }
    // 
    if($title_add != "" && $text_add != "" && $date_add != "") {
        add($title_add, $text_add, $date_add, $img_add);
    }
    if($id_del != "") {
        delete($id_del);
    }
    if($title_update != "" && $text_update != "" && $date_update != "" && $id_upd != "") {
        update($title_update, $text_update, $date_update, $img_update, $id_upd);
    }
?>