<?php
session_start();

$validLanguages = ["en", "da", "no", "sv"];

if (isset($_GET['lang']) && in_array($_GET['lang'], $validLanguages)) {
    $_SESSION['locale'] = $_GET['lang'];
}

$locale = $_SESSION['locale'] ?? 'en';
$lang = $locale;

include('locale/' . $lang . '/message.php');
