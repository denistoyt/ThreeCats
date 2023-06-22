<?php
    require_once("../../php/connect.php");
    global $pdo;
    if($_POST['theme'] == "" and $_POST['text'] == "") {
        $delete = "DELETE FROM `news_users` WHERE `news_users_id` = ?";
        $delete_d = $pdo->prepare($delete);
        $delete_d->execute(array("$_POST[id]"));
    }
    else {
        $curr_date = date("d.m.y");
        $add_new = "INSERT INTO `news` SET `news_title` = ?, `news_text` = ?, `news_date` = ?";
        $add_new_d = $pdo->prepare($add_new);
        $add_new_d->execute(array("$_POST[theme]", "$_POST[text]", "$curr_date"));

        $delete = "DELETE FROM `news_users` WHERE `news_users_id` = ?";
        $delete_d = $pdo->prepare($delete);
        $delete_d->execute(array("$_POST[id]"));
    }
?>