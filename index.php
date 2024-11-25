#!/usr/bin/env php

<?php
echo "Введите имя" . PHP_EOL;
$a = ucfirst(trim(fgets(STDIN)));
echo "Введите фамилию" . PHP_EOL;
$b = ucfirst(trim(fgets(STDIN)));
echo "Введите отчество" . PHP_EOL;
$c = ucfirst(trim(fgets(STDIN)));

$fullName = "$b " . "$a " . "$c";
echo "\n" . 'Полное имя: ' . "$fullName" . PHP_EOL;

$rest1 = substr("$a", 0, 1);
$rest2 = substr("$b", 0, 1);
$rest3 = substr("$c", 0, 1);
$surnameAndInitials = "$b " . "$rest1. " . "$rest3." . PHP_EOL;
echo 'Фамилия и инициалы: ' . "$surnameAndInitials";

$fio = "$rest2" . "$rest1" . "$rest3";
echo "Аббревиатура: " . "$fio" . PHP_EOL;
?>