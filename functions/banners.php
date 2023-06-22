<?
    function showBanners() {
        global $pdo;

        $bannerSQL = "SELECT * FROM `banners`";
        $bannerSQL_d = $pdo->query($bannerSQL);
        $bannerSQL_l = $bannerSQL_d->fetchAll();

        foreach($bannerSQL_l as $banners) {
            echo 
            '<div class="swiper-slide">
                <a href="'.$banners['banners_page'].'">
                    <img src="'.$banners['banners_img'].'" alt="баннер">
                </a>
            </div>';
        }
    }
?>