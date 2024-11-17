<?php
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    echo "Hodnota přijatá přes GET: $number<br>";
} elseif (isset($_POST['number'])) {
    $number = $_POST['number'];
    echo "Hodnota přijatá přes POST: $number<br>";
} elseif (isset($_GET['method']) && $_GET['method'] == 'session') {
    session_start();
    if (isset($_SESSION['number'])) {
        $number = $_SESSION['number'];
        echo "Hodnota přijatá přes SESSION: $number<br>";
    }
} elseif (isset($_GET['method']) && $_GET['method'] == 'cookie') {
    if (isset($_COOKIE['number'])) {
        $number = $_COOKIE['number'];
        echo "Hodnota přijatá přes COOKIE: $number<br>";
    }
} else {
    echo "Nebyla přijata žádná hodnota.<br>";
}
?>
