<?php
    function submits() {
        global $pdo;
        $submitsSQL = "SELECT * FROM `submits` WHERE `submits_active` = 1 ORDER BY `submits_status` DESC";
        $submitsSQL_d = $pdo->query($submitsSQL);
        $submitsSQL_l = $submitsSQL_d->fetchAll();

        foreach($submitsSQL_l as $submits) {
            echo 
            '<!-- Карточка -->
            <div class="admin-submits__item">
                <!-- Статус -->
                <div class="submits__item-status_bar">
                    <p class="submit-status_bar__status">Состояние:</p>
                    ';
                switch ($submits['submits_status']) {
                    case '1':
                        echo '<span class="submit-status submit-status-good"></span>';
                        break;
                    case '2':
                        echo '<span class="submit-status submit-status-soso"></span>';
                        break;
                    case '3':
                        echo '<span class="submit-status submit-status-sad"></span>';
                        break;
                    case '4':
                        echo '<span class="submit-status submit-status-bad"></span>';
                        break;
                    case '5':
                        echo '<span class="submit-status submit-status-awful"></span>';
                        break;
                    case '':
                        echo '<span class="submit-status submit-status-neutral"></span>';
                        break;
                }echo'
                </div>
                <!-- Контент -->
                <div class="submits__item-content">
                    <!-- Строка -->
                    <div class="submits__item-content_row">
                        <h3>Заявка от:</h3>
                        <p>'.$submits['submits_name'].'</p>
                    </div>
                    <!-- Строка -->
                    <div class="submits__item-content_row">
                        <h3>Связаться:</h3>
                        <a href="tel:'.$submits['submits_tel'].'">'.$submits['submits_tel'].'</a>
                    </div>
                </div>
                <!-- Кнопки -->
                <button class="button1 admin-submits_close-btn" data-submits-id="'.$submits['submits_id'].'">Закрыть заявку</button>
            </div>';
        }
    }

    // DELETE
    require_once("../php/connect.php");
    global $pdo;
    $submitsSQL = "DELETE FROM `submits` WHERE `submits_id` = ?";
    $submits_d = $pdo->prepare($submitsSQL);
    $submits_d->execute(array("$_POST[id]"));
?>