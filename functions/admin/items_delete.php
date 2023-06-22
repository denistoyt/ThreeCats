<?php
    require_once("../../php/connect.php");
    $delete = "DELETE FROM `items` WHERE `items_id` = ?";
    $delete_d = $pdo->prepare($delete);
    $delete_d->execute(array("$_POST[id]"));
?>