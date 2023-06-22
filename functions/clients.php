<?
    function clients() {
        global $pdo;
        $clientsSQL = "SELECT * FROM `clients`";
        $clientsSQL_d = $pdo->query($clientsSQL);
        $clientsSQL_l = $clientsSQL_d->fetchAll();

        foreach($clientsSQL_l as $clients) {
            echo
            '<div class="swiper-slide">
                <a href="'.$clients['clients_img'].'" data-fancybox="patients-gallery">
                    <img src="'.$clients['clients_img'].'" alt="пациент">
                </a>
            </div>';
        }
    }
    function AdminClients() {
        global $pdo;
        $clientsSQL = "SELECT * FROM `clients`";
        $clientsSQL_d = $pdo->query($clientsSQL);
        $clientsSQL_l = $clientsSQL_d->fetchAll();

        foreach($clientsSQL_l as $clients) {
            echo
            '<!-- картинка -->
            <div class="admin-about-clients-content__item">
                <img src="../'.$clients['clients_img'].'" alt="">
                <div class="admin-about-clients-content__item--fade">
                    <button class="admin-about-clients--delete" data-clients-id="'.$clients['clients_id'].'" type="button">
                        <span class="admin-delete-72"></span>
                    </button>
                </div>
            </div>';
        }
    }
?>