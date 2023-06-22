<?php
    // тип инпута
    $input_type = 'file';

    // расширения, которые доступны для загрузки
    $allow = array('jpg', 'jpeg', 'png', 'tiff');
    // расширения, которые запрещены для загрузки
    $deny = array('mp3', 'mp4', 'rar', 'zip', 'html', 'exe', 'gif', 'raw', 'bmp', 'psd', 'svg', 'webp');

    // папка загрузки файлов
    $img_dir = dirname(__DIR__, 2).'/img/news/';

    // ошибки и загрузка
    $error = $success = $download = '';
    if (!isset($_FILES[$input_type])) {
        $error = "Файл не загружен.";
    } else {
        $file = $_FILES[$input_type];
        // ошибки загрузки
        if (!empty($file['error']) || empty($file['tmp_name'])) {
            $error = "Ошибка загрузки.";
        } elseif ($file['tmp_name'] == 'none' || !is_uploaded_file($file['tmp_name'])) {
            $error = "Ошибка загрузки.";
        } else {
            // оставить только название файла
            $pattern = "[^a-zа-яё0-9,~!@#%^-_\$\?\(\)\{\}\[\]\.]";
            $name = mb_eregi_replace($pattern, '-', $file['name']);
            $name = mb_ereg_replace('[-]+', '-', $name);
            $parts = pathinfo($name);
            if (empty($name) || empty($parts['extension'])) {
                $error = "Недопустимое расширение файла";
            } elseif (!empty($allow) && !in_array(strtolower($parts['extension']), $allow)) {
                $error = "Недопустимое расширение файла";
            } elseif (!empty($deny) && in_array(strtolower($parts['extension']), $deny)) {
                $error = "Недопустимое расширение файла";
            } else {
                // Добавить файл в папку
                if (move_uploaded_file($file['tmp_name'], $img_dir.$name)) {
                    $download = $name;
                    $success = "Файл: <b>".$download."</b> успешно загружен!";
                } else {
                    $error = "Не удалось загрузить файл.";
                }
            }
        }
    }
    // Вывод сообщения с результатом загрузки
    if (!empty($error)) {
        $error = "<p style=color:red>".$error."</p>";
    }
    $data = array(
        'error' => $error,
        'success' => $success,
    );
    header('Content-Type: application/json');
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit();
?>