<?
    function lost() {
        global $pdo;
        $lostSQL = "SELECT * FROM `lost` ORDER BY `lost_date` DESC";
        $lostSQL_d = $pdo->query($lostSQL);
        $lostSQL_l = $lostSQL_d->fetchAll();

        // vars
        $img[] = [];
        foreach($lostSQL_l as $lost) {
            echo
            '<!-- Карточка -->
            <div class="lost-cards__item">
                <!-- Дата -->
                <div class="lost-card-date">'.$lost['lost_date'].'</div>
                <!-- Слайды -->
                <div class="lost-card-slides">
                    <div class="swiper lost-slider">
                        <div class="swiper-wrapper">'?>
                        <? 
                        $img = explode(';', $lost['lost_img']);
                        foreach($img as $im) {
                            if($im != "") {
                               echo'
                                <div class="swiper-slide">
                                    <a href="'.$im.'" data-fancybox="lost-slide">
                                        <img src="'.$im.'" alt="потеряшка" loading="lazy">
                                    </a>
                                </div>'; 
                            }
                            else {

                            }
                        }?> <?echo '
                        </div>
                    </div>
                </div>
                <!-- Описание -->
                <p class="lost-card-description">'.$lost['lost_text'].'</p>
            </div>';
        }
    }
    function AdminLost() {
        global $pdo;
        $lostSQL = "SELECT * FROM `lost` ORDER BY `lost_date` DESC";
        $lostSQL_d = $pdo->query($lostSQL);
        $lostSQL_l = $lostSQL_d->fetchAll();

        // vars
        $img[] = [];
        foreach($lostSQL_l as $lost) {
            echo
            '<!-- карточка -->
            <div class="admin-lost__item">
                <!-- Шапка -->
                <div class="admin-lost__item-header">
                    <button class="lost-item-delete" type="button" data-lost-id="'.$lost['lost_id'].'">
                        <span class="icn-cancel"></span>
                    </button>
                </div>
                <!-- Контент -->
                <div class="admin-lost__item-content">
                    <!-- Дата -->
                    <label for="lostDateCurr" class="check-label">
                        Дата
                        <span>
                            <input type="checkbox" name="lost-date-curr" id="lostDateCurr">
                            Сегодня
                        </span>
                    </label>
                    <input type="text" class="input input-date" name="lost-date" value="'.$lost['lost_date'].'">
                    <!-- разделитель -->
                    <div class="splitter"></div>
                    <!-- Картинки -->
                    <div class="admin-lost__images">
                        <div class="admin-lost__images-header">
                            <h3>Картинки</h3>
                            <label for="lostDownload" class="input-downloads">
                                <span class="input-downloads-btn">Добавить</span>
                                <input type="file" id="lostDownload">
                                <span id="result">
                                    <span id="resultFile"></span>
                                </span>
                            </label>
                        </div>
                        <div class="admin-lost__images-content">
                            <!-- картинка -->
                            <div class="admin-lost__images-content__item">';
                            $img = explode(';', $lost['lost_img']);
                            foreach($img as $im) {
                                if($im != "") {
                                    echo '<div class="lost-item"><img src="../'.$im.'" alt="потеряшка">
                                    <div class="admin-lost__images-content__item--fade">
                                        <button class="admin-lost-item-del" type="button">
                                            <span class="admin-delete-72"></span>
                                        </button>
                                    </div></div>';
                                } else {}
                            } echo'
                            </div>
                        </div>
                    </div>
                    <!-- Текст карточки -->
                    <label for="lostText" class="input-label">
                        Текст карточки
                        <textarea name="lost-text" id="lostText" cols="30" rows="10">'.$lost['lost_text'].'</textarea>
                    </label>
                    <!-- Сохранить -->
                    <button class="button1 admin-lost-save-btn" data-lost-id="'.$lost['lost_id'].'" type="button">Сохранить</button>
                </div>
            </div>';
        }
    }
?>