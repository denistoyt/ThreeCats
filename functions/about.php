<?
    function about() {
        global $pdo;
        $aboutSQL = "SELECT * FROM `about`";
        $aboutSQL_d = $pdo->query($aboutSQL);
        $aboutSQL_l = $aboutSQL_d->fetchAll();
        foreach($aboutSQL_l as $about) {
            echo 
            '<!-- Элементы -->
            <div class="about-us__item">
                <img src="img/ThreeCats_Logo-image.png" alt="Логотип">
                <p class="about-us-text">'.$about['about_1_par'].'</p>
            </div>
            <div class="about-us__item">
                <p class="about-us-text">'.$about['about_2_par'].'</p>
            </div>
            <div class="about-us__item">
                <p class="about-us-text">'.$about['about_3_par'].'</p>
            </div>
            <div class="about-us__item">
                '.$about['about_4_par'].'
            </div>';
        }
    }
    function AdminAbout() {
        global $pdo;
        $aboutSQL = "SELECT * FROM `about`";
        $aboutSQL_d = $pdo->query($aboutSQL);
        $aboutSQL_l = $aboutSQL_d->fetchAll();
        foreach($aboutSQL_l as $about) {
            echo 
            '<!-- Первый абзац -->
            <label for="aboutFirst" class="input-label">
                Первый абзац
                <input type="text" name="about-first" id="aboutFirst" value="'.$about['about_1_par'].'">
            </label>
            <!-- Второй абзац -->
            <label for="aboutSecond" class="input-label">
                Второй абзац
                <input type="text" name="about-second" id="aboutSecond" value="'.$about['about_2_par'].'">
            </label>
            <!-- Третий абзац -->
            <label for="aboutThird" class="input-label">
                Третий абзац
                <input type="text" name="about-third" id="aboutThird" value="'.$about['about_3_par'].'">
            </label>
            <!-- разделитель -->
            <div class="splitter"></div>
            <!-- Четрвертый абзац -->
            <div class="admin-about-fourth">
                <!-- кнопка -->
                <button class="button1 admin-about-add_list" type="button">Список</button>
                <!-- Инпут -->
                <label for="aboutFourth" class="input-label">
                    Четвертый абзац
                    <textarea name="about-fourth" id="aboutFourth" cols="30" rows="10">'.$about['about_4_par'].'</textarea>
                </label>
            </div>';
        } 
    }
?>