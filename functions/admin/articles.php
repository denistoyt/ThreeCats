<?php
    require_once("../../php/connect.php");
    // vars
    $title_add = $_POST['title_add'];
    $img_add = $_POST['img_add'];
    $link_add = $_POST['link_add'];
    $id_del = $_POST['id_del'];
    $title_upd = $_POST['title_upd'];
    $img_upd = $_POST['img_upd'];
    $link_upd = $_POST['link_upd'];
    $id_upd = $_POST['id_upd'];
    // добавление
    function add($title, $img, $link) {
        global $pdo;
        $add = "INSERT INTO `articles` SET `articles_title` = ?, `articles_img` = ?, `articles_link` = ?";
        $add_d = $pdo->prepare($add);
        $add_d->execute(array("$title", "$img", "$link"));
    }
    // удаление
    function delete($id) {
        global $pdo;
        $delete = "DELETE FROM `articles` WHERE `articles_id` = ?";
        $delete_d = $pdo->prepare($delete);
        $delete_d->execute(array("$id"));
    }
    // обновление
    function update($title, $img, $link, $id) {
        global $pdo;
        $update = "UPDATE `articles` SET `articles_title` = ?, `articles_img` = ?, `articles_link` = ? WHERE `articles_id` = ?";
        $update_d = $pdo->prepare($update);
        $update_d->execute(array("$title", "$img", "$link", "$id"));
    }

    if($title_add != "" && $img_add != "" && $link_add != "") {
        add($title_add, $img_add, $link_add);
    }
    if($id_del != "") {
        delete($id_del);
    }
    if($title_upd != "" && $img_upd != "" && $link_upd != "" && $id_upd != "") {
        update($title_upd, $img_upd, $link_upd, $id_upd);
    }
?>