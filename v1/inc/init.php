<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (strpos(getcwd(), "jt000297")) {
    // PROD ENVIRONMENT /home/jt000297/public_html/ttriage/ar/v1
    define ( 'ALLOWED_HOSTS', 'ttriage.com');
} else {
    // DEV ENVIRONMENT
    define ( 'ROOT_WEB',   '/ar-taller/objects/');
    define ( 'ALLOWED_HOSTS','localhost,127.0.0.1,ttriage.com');
}
define ( 'ROOT_FOLDER',   '../objects/');
define ( 'ROOT_TYPES',   ROOT_FOLDER . 'types.json');

function logit($text) {
    // return;
    if (is_array($text)){
        var_export($text);
    } else {
        if (is_object($text)) {
            var_dump($text);
        } else {
            echo $text;
        }
    }
    echo "<br />";
}

function getItem($folder) {
    $item_json = file_get_contents(ROOT_FOLDER . $folder . "/item.json");
    $item = json_decode($item_json, false);

    return $item;
}

function setReferer() {
    $_SESSION[ 'user_info' ] = TRUE;
}
function checkReferer() {
    if (!isset($_SESSION[ 'user_info' ] )) {
        exit(1);
    }
}

?>