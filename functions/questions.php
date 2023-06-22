<?php
    function questions() {
        global $pdo;
        $questionsSQL = "SELECT * FROM `questions`";
        $questionsSQL_d = $pdo->query($questionsSQL);
        $questionsSQL_l = $questionsSQL_d->fetchAll();

        foreach ($questionsSQL_l as $questions) {
            echo
            '<!-- Карточка -->
            <div class="admin-questions__content-item">
                <!-- От кого -->
                <div class="questions__content-row">
                    <h3>От кого вопрос:</h3>
                    <p>'.$questions['questions_name'].'</p>
                </div>
                <!-- Вопрос -->
                <div class="questions__content-row">
                    <h3>Вопрос:</h3>
                    <p>'.$questions['questions_message'].'</p>
                </div>
                <!-- Способы связи -->
                <div class="questions__content-row">
                    <h3>Способы связи:</h3>
                    <div>';
                    if($questions['questions_mail'] != "") {
                        echo '<a href="mailto:'.$questions['questions_mail'].'">'.$questions['questions_mail'].'</a>';
                    };echo' 
                        <a href="tel:'.$questions['questions_tel'].'">'.$questions['questions_tel'].'</a>
                    </div>
                </div>
                <!-- Закрыть вопрос -->
                <button class="button1 question-close-btn" data-questions-id="'.$questions['questions_id'].'">Закрыть вопрос</button>
            </div>';
        }
    }
    // DELETE
    require_once("../php/connect.php");
    $questionsSQL = "DELETE FROM `questions` WHERE `questions_id` = ?";
    $questionsSQL_d = $pdo->prepare($questionsSQL);
    $questionsSQL_d->execute(array("$_POST[id]"));
?>