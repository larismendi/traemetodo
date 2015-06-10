<?php
echo date('r', $_SERVER['REQUEST_TIME']) .'<br>';

date_default_timezone_set('America/New_York');

if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
}

if (ini_get('date.timezone')) {
    echo 'date.timezone: ' . ini_get('date.timezone') . '<br />';
}

echo date('r', $_SERVER['REQUEST_TIME']) .'<br>';

echo date('Y-m-d H:m:s'); 

?>