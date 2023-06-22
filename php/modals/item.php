<?
    require_once("../connect.php");
    global $pdo;
    $itemsSQL = "SELECT * FROM `items` WHERE `items_id` = ?";
    $itemsSQL_d = $pdo->prepare($itemsSQL);
    $itemsSQL_d->execute(array("$_POST[item_id]"));
    $itemsSQL_l = $itemsSQL_d->fetchAll();
    foreach($itemsSQL_l as $item) {
        echo
        '<h3 class="modal-item-title">'.$item['items_title'].'</h3>
        <div class="modal-item-content">
            <img src="'.$item['items_img'].'" alt="товар" class="modal-item__img">
            <p class="modal-item__cost">
                Цена: <b>'.$item['items_cost'].' ₽</b>
            </p>
            <p class="modal-item__description">'.$item['items_descr'].'</p>
        </div>';
    }
?>