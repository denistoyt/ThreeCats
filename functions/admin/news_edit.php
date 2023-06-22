<?php
    require_once("../../php/connect.php");
    $update = "UPDATE `news` SET `news_title` = ?, `news_date` = ?, `news_text` = ?, `news_img` = ? WHERE `news_id` = ?";
    $update_d = $pdo->prepare($update);
    $update_d->execute(array("$_POST[title]", "$_POST[date]", "$_POST[text]", "$_POST[img]", "$_POST[id]"));
?>