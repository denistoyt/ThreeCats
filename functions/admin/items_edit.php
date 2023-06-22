<?php
    require_once("../../php/connect.php");
    $img = $_POST['add_img'];
    if($img == "img/items/undefined") {
        $img = "img/empty-image.jpg";
    }
    else {
        $img = $_POST['add_img'];
    }
    $update = "UPDATE `items` SET `items_title` = ?, `items_img` = ?, `items_cost` = ?, `items_descr` = ? WHERE `items_id` = ?";
    $update_d = $pdo->prepare($update);
    $update_d->execute(array("$_POST[title]", "$img", "$_POST[cost]", "$_POST[descr]", "$_POST[id]"));
?>