#!/usr/bin/env php

<?php
echo "Введение имя: \n> ";
$a = mb_ucfirst(trim(fgets(STDIN)));
echo "Введение фамилию: \n> ";
$b = mb_ucfirst(trim(fgets(STDIN)));
echo "Введение отчество: \n> ";
$c = mb_ucfirst(trim(fgets(STDIN)));

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