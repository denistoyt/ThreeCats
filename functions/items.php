<?
    function items() {
        global $pdo;
        $itemsSQL = "SELECT * FROM `items` ORDER BY `items_cost`";
        $itemsSQL_d = $pdo->query($itemsSQL);
        $itemsSQL_l = $itemsSQL_d->fetchAll();

        foreach($itemsSQL_l as $items) {
            echo
            '<div class="items-cards__item">
                <p class="items-item-title">'.$items['items_title'].'</p>
                <img src="'.$items['items_img'].'" alt="товар" class="items-item-img">
                <div class="items-item__content">
                    <p class="items-item-cost">Цена: <b>'.$items['items_cost'].' ₽</b></p>
                    <button class="button1 items-item-about" data-id="'.$items['items_id'].'">Подробнее</button>
                </div>
            </div>';
        }
    }

    function AdminItems() {
        global $pdo;
        $itemsSQL = "SELECT * FROM `items` ORDER BY `items_cost`";
        $itemsSQL_d = $pdo->query($itemsSQL);
        $itemsSQL_l = $itemsSQL_d->fetchAll();

        foreach($itemsSQL_l as $items) {
            echo
            '<!-- Карточка -->
            <div class="items-cards__item">
                <p class="items-item-title">'.$items['items_title'].'</p>
                <img src="../'.$items['items_img'].'" alt="товар" class="items-item-img">
                <div class="items-item__content">
                    <p class="items-item-cost">Цена: <b><span>'.$items['items_cost'].'</span> ₽</b></p>
                    <p class="items-item-descr--hidden" hidden>'.$items['items_descr'].'</p>
                </div>
                <div class="items-card__admin--fade">
                    <button class="admin-items--edit" data-items-id="'.$items['items_id'].'">
                        <span class="admin-edit-72"></span>
                    </button>
                </div>
            </div>';
        }
    }
?>