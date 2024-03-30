<?php
session_start(); // para que funcione $_SESSION

function printR2($name, $variables) {
    echo "<h2>$name</h2>";
    echo "<pre>";
    print_r($variables);
    echo "<pre>";
    echo "<br><hr><br>";
}

printR2('$GLOBALS', $GLOBALS);
printR2('$_SERVER', $_SERVER);
printR2('$_REQUEST', $_REQUEST);
printR2('$_POST', $_POST);
printR2('$_GET', $_GET);
printR2('$_FILES', $_FILES);
printR2('$_ENV', $_ENV);
printR2('$_COOKIE', $_COOKIE);
printR2('$_SESSION', $_SESSION);