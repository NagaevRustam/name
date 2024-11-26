#!/usr/bin/env php

<?php
// Реализация с вводом ФИО в  латинице
// echo "Введите имя" . PHP_EOL;
// $a = mb_ucfirst(trim(fgets(STDIN)));
// echo "Введите фамилию" . PHP_EOL;
// $b = ucfirst(trim(fgets(STDIN)));
// echo "Введите отчество" . PHP_EOL;
// $c = ucfirst(trim(fgets(STDIN)));
$a = 'иван';
$b = 'иванов';
$c = 'иванович';

$a = mb_ucfirst($a);
$b = mb_ucfirst($b);
$c = mb_ucfirst($c);

$fullName = "$b " . "$a " . "$c";
echo "\n" . 'Полное имя: ' . "$fullName" . PHP_EOL;

$rest1 = mb_substr("$a", 0, 1);
$rest2 = mb_substr("$b", 0, 1);
$rest3 = mb_substr("$c", 0, 1);
$surnameAndInitials = "$b " . "$rest1. " . "$rest3." . PHP_EOL;
echo 'Фамилия и инициалы: ' . "$surnameAndInitials";

$fio = "$rest2" . "$rest1" . "$rest3";
echo "Аббревиатура: " . "$fio" . PHP_EOL;
?>