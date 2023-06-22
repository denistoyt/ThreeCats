<?php
    session_start();
    require_once("../php/connect.php");

    if($_GET['login'] != "" and $_GET['passw'] != "") {
        $login = $_GET['login'];
        $passw = md5($_GET['passw']);
        $login_SQL = "SELECT * FROM `admins` WHERE `admin_login` = ? and `admin_password` = ?";
        $login_SQL_d = $pdo->prepare($login_SQL);
        $login_SQL_d->execute(array("$login", "$passw"));
        $login_SQL_l = $login_SQL_d->fetchAll();
        foreach($login_SQL_l as $admin) {
            $adminNick = $admin['admin_nickname'];
        }
        $count = count($login_SQL_l);
        if($count > 0) {
            $_SESSION['autorized'] = true;
            $_SESSION['admin_nick'] = $adminNick;
            echo '<script type="text/javascript">location.href="../admin/admin-panel.php"</script>';
        }
        else {
            echo '<script type="text/javascript">location.href="../admin/admin_login.php"</script>';
        }
    }
    
?>