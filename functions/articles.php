<?
    function articles() {
        global $pdo;
        $articlesSQL = "SELECT * FROM `articles`";
        $articlesSQL_d = $pdo->query($articlesSQL);
        $articlesSQL_l = $articlesSQL_d->fetchAll();

        foreach($articlesSQL_l as $articles) {
            echo
            '<!-- Карточка -->
            <div class="articles__item">
                <a href="'.$articles['articles_link'].'" class="articles__item-title">'.$articles['articles_title'].'</a>
                <img src="'.$articles['articles_img'].'" alt="статья" class="articles__item-img">
            </div>';
        }
    }
    function AdminArticles() {
        global $pdo;
        $articlesSQL = "SELECT * FROM `articles`";
        $articlesSQL_d = $pdo->query($articlesSQL);
        $articlesSQL_l = $articlesSQL_d->fetchAll();

        foreach($articlesSQL_l as $articles) {
            echo
            '<!-- Карточка -->
            <div class="articles__item">
                <a href="'.$articles['articles_link'].'" class="articles__item-title">'.$articles['articles_title'].'</a>
                <img src="../'.$articles['articles_img'].'" alt="статья" class="articles__item-img">
                <!-- редактирование -->
                <div class="aricles-item--fade">
                    <button class="admin-articles--edit" data-articles-id="'.$articles['articles_id'].'">
                        <span class="admin-edit-72"></span>
                    </button>
                </div>
            </div>';
        }
    }
?>