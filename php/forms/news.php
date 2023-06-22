<?
    require_once("../connect.php");
    global $pdo;
    $newsSQL = "INSERT INTO `news_users` SET `news_users_theme` = ?, `news_users_message` = ?, `news_users_name` = ?, `news_users_tel` =?";
    $newsSQL_d = $pdo->prepare($newsSQL);
    $newsSQL_d->execute(array("$_POST[theme]", "$_POST[text]", "$_POST[name]", "$_POST[tel]"));
?>