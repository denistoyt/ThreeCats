<?
    require_once("../connect.php");
    $submitSQL = "INSERT INTO `submits` SET `submits_status` = ?, `submits_name` = ?, `submits_tel` = ?, `submits_active` = 1";
    $submitSQL_d = $pdo->prepare($submitSQL);
    $submitSQL_d->execute(array("$_POST[status]", "$_POST[name]", "$_POST[tel]"));
?>