<?php

//phpinfo();

$link = mysqli_connect('mysql', 'root', 'root');

if (!$link) {
    die('Ошибка соединения: ' );
}
echo 'Успешно соединились';
mysqli_select_db($link, 'camagru');
// mysqli_close($link);

