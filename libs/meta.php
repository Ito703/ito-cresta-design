<?php
$protocol = empty($_SERVER['HTTPS']) ? 'http://' : 'https://';
$APP_URL = $protocol . $_SERVER['HTTP_HOST'] . '/ito-cresta-design/';
define('APP_URL', $APP_URL);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creasta Design</title>

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Noto+Serif+JP&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo APP_URL;?>style/style.css">
