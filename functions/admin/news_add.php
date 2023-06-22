<?php
    require_once("../../php/connect.php");
    $add = "INSERT INTO `news` SET `news_title` = ?, `news_text` = ?, `news_date` = ?, `news_img` = ?";
    $add_d = $pdo->prepare($add);
    $add_d->execute(array("$_POST[add_theme]", "$_POST[add_text]", "$_POST[add_date]", "$_POST[add_img]"));
?>