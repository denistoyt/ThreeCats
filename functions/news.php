<?
    function news() {
        global $pdo;
        $newsSQL = "SELECT * FROM `news` ORDER BY `news_date` DESC";
        $newsSQL_d = $pdo->query($newsSQL);
        $newsSQL_l = $newsSQL_d->fetchAll();
        
        foreach($newsSQL_l as $news) {
            if ($news['news_img'] != "") {
                echo
                '<div class="news-card">
                    <!-- Шапка -->
                    <div class="news-card__header">
                        <p class="news-card-title">'.$news['news_title'].'</p>
                        <span class="news-card-date">'.$news['news_date'].'</span>
                    </div>
                    <!-- Контент -->
                    <div class="news-card__content">
                        <img src="'.$news['news_img'].'" alt="новость" class="news-card-image">
                        <p class="news-card-info">'.$news['news_text'].'</p>
                    </div>
                </div>';
            }
            else {
                echo
                '<div class="news-card">
                    <!-- Шапка -->
                    <div class="news-card__header">
                        <p class="news-card-title">'.$news['news_title'].'</p>
                        <span class="news-card-date">'.$news['news_date'].'</span>
                    </div>
                    <!-- Контент -->
                    <div class="news-card__content">
                        <p class="news-card-info">'.$news['news_text'].'</p>
                    </div>
                </div>';
            }
        }
    }
    function AdminNews() {
        global $pdo;
        $newsSQL = "SELECT * FROM `news` ORDER BY `news_date` DESC";
        $newsSQL_d = $pdo->query($newsSQL);
        $newsSQL_l = $newsSQL_d->fetchAll();

        foreach($newsSQL_l as $news) {
            if ($news['news_img'] != "") {
                echo 
                '<!-- Карточка -->
                <div class="news-card">
                    <!-- Шапка -->
                    <div class="news-card__header">
                        <p class="news-card-title">'.$news['news_title'].'</p>
                        <span class="news-card-date">'.$news['news_date'].'</span>
                    </div>
                    <!-- Контент -->
                    <div class="news-card__content">
                        <img src="../'.$news['news_img'].'" alt="новость" class="news-card-image">
                        <p class="news-card-info">'.$news['news_text'].'</p>
                    </div>
                    <div class="admin-edit--fade">
                        <button data-news-id="'.$news['news_id'].'" class="admin-news-item--edit">
                            <span class="admin-edit-72"></span>
                        </button>
                    </div>
                </div>';
            }
            else {
                echo 
                '<!-- Карточка -->
                <div class="news-card">
                    <!-- Шапка -->
                    <div class="news-card__header">
                        <p class="news-card-title">'.$news['news_title'].'</p>
                        <span class="news-card-date">'.$news['news_date'].'</span>
                    </div>
                    <!-- Контент -->
                    <div class="news-card__content">
                        <p class="news-card-info">'.$news['news_text'].'</p>
                    </div>
                    <div class="admin-edit--fade">
                        <button data-news-id="'.$news['news_id'].'" class="admin-news-item--edit">
                            <span class="admin-edit-72"></span>
                        </button>
                    </div>
                </div>';
            }
        }
    }
    function UsersNews() {
        global $pdo;
        $usersSQL = "SELECT * FROM `news_users`";
        $usersSQL_d = $pdo->query($usersSQL);
        $usersSQL_l = $usersSQL_d->fetchAll();

        foreach($usersSQL_l as $news) {
            echo 
            '<!-- карточка -->
            <div class="news-users__item">
                <!-- текст -->
                <div class="user-news__content">
                    <!-- тема -->
                    <p class="text22">
                        Тема:
                        <span id="userTheme">'.$news['news_users_theme'].'</span>
                    </p>
                    <!-- текст -->
                    <p class="text22">
                        Текст новости:
                        <span id="userText">'.$news['news_users_message'].'</span>
                    </p>
                    <!-- имя -->
                    <p class="text22">
                        Имя:
                        <span id="userName">'.$news['news_users_name'].'</span>
                    </p>
                    <!-- почта -->
                    <p class="text22">
                        Телефон:
                        <span id="userTel">'.$news['news_users_tel'].'</span>
                    </p>
                </div>
                <!-- управление -->
                <div class="user-news__controls">
                    <button class="user-news_allow-btn" data-news-id="'.$news['news_users_id'].'">Опубликовать</button>
                    <button class="user-news_deny-btn" data-news-id="'.$news['news_users_id'].'">Отклонить</button>
                </div>
            </div>';
        }
    }
?>