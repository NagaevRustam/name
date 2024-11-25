#!/usr/bin/env php

<?php
echo "Введите имя" . PHP_EOL;
$a = trim(fgets(STDIN));
echo "Введите фамилию" . PHP_EOL;
$b = trim(fgets(STDIN));
// echo "Введите отчество" . PHP_EOL;
// $c = trim(fgets(STDIN));
$pos = mb_strpos($a, $b);
//$str = str_replace("р", "Р", "рустам");
var_dump($pos) . PHP_EOL;

//var_dump(mb_strpos($a, 'руст'));


$fullName = fwrite(STDOUT, "$a") . PHP_EOL;
// echo "$fullName";

//$fio = 'ИИИ';
//$surnameAndInitials = 'Иванов И.И.';

?>