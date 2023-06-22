<?
    function discounts() {
        global $pdo;
        $discountsSQL = "SELECT * FROM `discounts` ORDER BY `discounts_date` DESC";
        $discountsSQL_d = $pdo->query($discountsSQL);
        $discountsSQL_l = $discountsSQL_d->fetchAll();

        foreach($discountsSQL_l as $discounts) {
            echo
            '<div class="discounts-cards__item">
                <!-- Шапка -->
                <div class="discounts-item-header">
                    <span class="icn icn-sale"></span>
                    <p class="discounts-item-title">'.$discounts['discounts_title'].'</p>
                    <span class="icn icn-sale"></span>
                </div>
                <!-- Контент -->
                <div class="discounts-item-content">'?>
                    <?if($discounts['discounts_img']) {
                        echo '<!-- Картинка -->
                        <div class="discounts-item-img">
                            <img src="'.$discounts['discounts_img'].'" alt="акция">
                        </div>';
                    }
                    else {

                    }?> <? echo'
                    <!-- Текст -->
                    <div class="discounts-item-text">
                        '.$discounts['discounts_text'].'
                    </div>
                    <p class="discounts-item-date">Акция действует до <span>'.$discounts['discounts_date'].'</span></p>
                </div>
            </div>';
        }
    }
    function AdminDiscounts() {
        global $pdo;
        $discountsSQL = "SELECT * FROM `discounts` ORDER BY `discounts_date`";
        $discountsSQL_d = $pdo->query($discountsSQL);
        $discountsSQL_l = $discountsSQL_d->fetchAll();

        foreach($discountsSQL_l as $discounts) {
            echo
            '<!-- Карточка -->
            <div class="discounts-cards__item">
                <!-- Шапка -->
                <div class="discounts-item-header">
                    <span class="icn icn-sale"></span>
                    <p class="discounts-item-title">'.$discounts['discounts_title'].'</p>
                    <span class="icn icn-sale"></span>
                </div>
                <!-- Контент -->
                <div class="discounts-item-content">
                    <!-- Картинка -->
                    ';if($discounts['discounts_img'] != "") {
                        echo '<div class="discounts-item-img">
                                <img src="../'.$discounts['discounts_img'].'" alt="акция">
                              </div>';
                    }
                    else {

                    } echo'
                    
                    <!-- Текст -->
                    <div class="discounts-item-text">'.$discounts['discounts_text'].'</div>
                    <p class="discounts-item-date">Акция действует до <span>'.$discounts['discounts_date'].'</span></p>
                </div>
                <!-- редактирование -->
                <div class="discounts__item-edit--fade">
                    <button class="admin-discounts--edit" data-discounts-id="'.$discounts['discounts_id'].'">
                        <span class="admin-edit-72"></span>
                    </button>
                </div>
            </div>';
        }
    }
?>