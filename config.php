<?php

session_start();

$supported_lang=['es','en'];
$default_lang='en';

$current_lang=$default_lang;

if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_lang)) {
    $current_lang = $_GET['lang'];
}else{
    if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
        $browser_lang=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
        if(in_array($browser_lang, $supported_lang)){
            $current_lang=$browser_lang;
        }
    }
}

$lang_file=__DIR__ . '/lang/' . $current_lang . '/messages.php';

if (file_exists($lang_file)) {
    $translations = require $lang_file;
} else {
    // Si el archivo del idioma actual no existe, cargar el idioma por defecto
    $translations = require __DIR__ . '/lang/' . $default_language . '/messages.php';
    $current_lang = $default_language; // Ajustar el idioma actual si se cayó al por defecto
}

function __($key) {
    global $translations;
    return isset($translations[$key]) ? $translations[$key] : $key;
}
?>