<?
    require_once('../connect.php');
    $questionSQL = "INSERT INTO `questions` SET `questions_name` = ?, `questions_tel` = ?, `questions_mail` = ?, `questions_message` = ?";
    $questionSQL_d = $pdo->prepare($questionSQL);
    $questionSQL_d->execute(array("$_POST[name]", "$_POST[tel]", "$_POST[email]", "$_POST[message]"));
?>