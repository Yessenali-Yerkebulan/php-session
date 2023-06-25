<?php

error_reporting(-1);
session_start();

if(!empty($_SESSION['count'])){
    echo "Вы посетили страницу index {$_SESSION['count']} раз";
}
?>