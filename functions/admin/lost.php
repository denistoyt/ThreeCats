<?php
    require_once("../../php/connect.php");
    // vars
    $id_del = $_POST['id_del'];
    $id_upd = $_POST['id_upd'];
    $date_upd = $_POST['date_upd'];
    $text_upd = $_POST['text_upd'];
    // удаление
    function delete($id) {
        global $pdo;
        $delete = "DELETE FROM `lost` WHERE `lost_id` = ?";
        $delete_d = $pdo->prepare($delete);
        $delete_d->execute(array("$id"));
    }
    // обновление
    function update($date, $text, $id) {
        global $pdo;
        $update = "UPDATE `lost` SET `lost_date` = ?, `lost_text` = ? WHERE `lost_id` = ?";
        $update_d = $pdo->prepare($update);
        $update_d->execute(array("$date", "$text", "$id"));
    }
    if($id_del != "") {
        delete($id_del);
    }
    if($id_upd != "" && $date_upd != "" && $text_upd != "") {
        update($date_upd, $text_upd, $id_upd);
    }