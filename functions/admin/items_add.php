<?php
    require_once("../../php/connect.php");
    $img = $_POST['add_img'];
    if($img == "img/items/undefined") {
        $img = "img/empty-image.jpg";
    }
    else {
        $img = $_POST['add_img'];
    }
    $add = "INSERT INTO `items` SET `items_title` = ?, `items_img` = ?, `items_cost` = ?, `items_descr` = ?";
    $add_d = $pdo->prepare($add);
    $add_d->execute(array("$_POST[add_title]", "$img", "$_POST[add_cost]", "$_POST[add_descr]"));
?>