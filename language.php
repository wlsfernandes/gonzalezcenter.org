<?php
// language.php
session_start();

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = 'en'; // default language
}

// Load language file
$lang_file = "lang_{$lang}.php";
if (file_exists($lang_file)) {
    include_once $lang_file;
} else {
    include_once "lang_en.php"; // fallback to English if language file is missing
}

