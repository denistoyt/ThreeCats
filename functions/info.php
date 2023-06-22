<?
    function info(){
        global $pdo;
        $infoSQL = "SELECT * FROM `info`";
        $infoSQL_d = $pdo->query($infoSQL);
        $infoSQL_l = $infoSQL_d->fetchAll();

        // vars
        $tels[] = [];
        $schedule[] = [];
        $address = '';
        $name = "";

        foreach($infoSQL_l as $info) {
            $tels = explode(';', $info['info_tels']);
            $schedule = explode(";", $info['info_schedule']);
            $address = $info['info_address'];
            $name = $info['info_company'];
        }
        return $name.';'.$address.";".$tels[0].";".$tels[1].";".$schedule[0].";".$schedule[1];
    }

    $data = explode(";", info());
    $name = $data[0];
    $address = $data[1];
    $tel = [$data[2], $data[3]];
    $schedule = [$data[4], $data[5]];

    function footerTel($arr) {
        foreach($arr as $tel) {
            echo
            '<a href="tel:'.$tel.'" class="text18">'.$tel.'</a>';
        }
    }

    function footerSchedule($from, $to) {
        echo
        'с <b>'.$from.'</b> до <b>'.$to.'</b>';
    }
?>