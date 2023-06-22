<?php
    require_once("../../php/connect.php");
    // vars
    $name_add = $_POST['name_add'];
    $img_add = $_POST['img_add'];
    $respons_add = $_POST['respons_add'];
    $requires_add = $_POST['requires_add'];
    $schedule_add = $_POST['schedule_add'];
    $pay_add = $_POST['pay_add'];
    $name_upd = $_POST['name_upd'];
    $img_upd = $_POST['img_upd'];
    $respons_upd = $_POST['respons_upd'];
    $requires_upd = $_POST['requires_upd'];
    $schedule_upd = $_POST['schedule_upd'];
    $pay_upd = $_POST['pay_upd'];
    $id_del = $_POST['id_del'];
    $id_upd = $_POST['id_upd'];
    // добавление
    function add($name, $img, $respons, $requires, $schedule, $pay) {
        global $pdo;
        $add = "INSERT INTO `vacancies` SET `vacancies_type` = ?, `vacancies_img` = ?, `vacancies_response` = ?, `vacancies_requires` = ?, `vacancies_schedule` = ?, `vacancies_pay` = ?";
        $add_d = $pdo->prepare($add);
        $add_d->execute(array("$name", "$img", "$respons", "$requires", "$schedule", "$pay"));
    }
    // обновление
    function update($name, $img, $respons, $requires, $schedule, $pay, $id) {
        global $pdo;
        $update = "UPDATE `vacancies` SET `vacancies_type` = ?, `vacancies_img` = ?, `vacancies_response` = ?, `vacancies_requires` = ?, `vacancies_schedule` = ?, `vacancies_pay` = ? WHERE `vacancies_id` = ?";
        $update_d = $pdo->prepare($update);
        $update_d->execute(array("$name", "$img", "$respons", "$requires", "$schedule", "$pay", "$id"));
    }
    // удаление
    function delete($id) {
        global $pdo;
        $delete = "DELETE FROM `vacancies` WHERE `vacancies_id` = ?";
        $delete_d = $pdo->prepare($delete);
        $delete_d->execute(array("$id"));
    }

    // добавление
    if($name_add != "" && $respons_add != "" && $requires_add != "" && $schedule_add != "" && $pay_add != "") {
        add($name_add, $img_add, $requires_add, $requires_add, $schedule_add, $pay_add);
    }
    // удаление
    if($id_del != "") {
        delete($id_del);
    }
    // обновление
    if($name_upd != "" && $respons_upd != "" && $requires_upd != "" && $schedule_upd != "" && $pay_upd != "" && $id_upd != "") {
        update($name_upd, $img_upd, $respons_upd, $requires_upd, $schedule_upd, $pay_upd, $id_upd);
    }
?>