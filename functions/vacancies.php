<?
    function vacancies() {
        global $pdo;

        $vacanciesSQL = "SELECT * FROM `vacancies`";
        $vacanciesSQL_d = $pdo->query($vacanciesSQL);
        $vacanciesSQL_l = $vacanciesSQL_d->fetchAll();

        foreach($vacanciesSQL_l as $vacancies) {
            echo
            '<div class="vacancies-cards__item">
                
                <div class="vacancies-item-header">
                    <h3>'.$vacancies['vacancies_type'].'</h3>
                </div>
               
                <div class="vacancies-item-img">
                    <img src="'.$vacancies['vacancies_img'].'" alt="вакансии">
                </div>
                
                <div class="vacancies-item-content">
                    <p class="vacancies-text"><b>Обязянности:</b> '.$vacancies['vacancies_response'].'</p>
                    <p class="vacancies-text"><b>Требования:</b> '.$vacancies['vacancies_requires'].'</p>
                    <p class="vacancies-text"><b>График:</b> '.$vacancies['vacancies_schedule'].'</p>
                    <p class="vacancies-text"><b>Оплата:</b> '.$vacancies['vacancies_pay'].'</p>
                </div>
            </div>';
        }
    }
    function AdminVacancies() {
        global $pdo;
        $vacanciesSQL = "SELECT * FROM `vacancies`";
        $vacanciesSQL_d = $pdo->query($vacanciesSQL);
        $vacanciesSQL_l = $vacanciesSQL_d->fetchAll();
        foreach($vacanciesSQL_l as $vacancies) {
            echo
            '<!-- Карточка -->
            <div class="vacancies-cards__item">
                <!-- Шапка -->
                <div class="vacancies-item-header">
                    <h3>'.$vacancies['vacancies_type'].'</h3>
                </div>
                <!-- картинка -->';
                if($vacancies['vacancies_img'] != "img/vacancies/undefined") {
                    echo '<div class="vacancies-item-img">
                        <img src="../'.$vacancies['vacancies_img'].'" alt="вакансии">
                    </div>';
                } else {

                } echo'
                <!-- Контент -->
                <div class="vacancies-item-content">
                    <p class="vacancies-text vacancies-response"><b>Обязянности:</b> <span>'.$vacancies['vacancies_response'].'</span></p>
                    <p class="vacancies-text vacancies-requires"><b>Требования:</b> <span>'.$vacancies['vacancies_requires'].'</span></p>
                    <p class="vacancies-text vacancies-schedule"><b>График:</b> <span>'.$vacancies['vacancies_schedule'].'</span></p>
                    <p class="vacancies-text vacancies-pay"><b>Оплата:</b> <span>'.$vacancies['vacancies_pay'].'</span></p>
                </div>
                <!-- редактирование -->
                <div class="vacancies-item--fade">
                    <button class="admin-vacancy--edit" data-vacancies-id="'.$vacancies['vacancies_id'].'">
                        <span class="admin-edit-72"></span>
                    </button>
                </div>
            </div>';
        }
    }
?>