<?php

// Получаем данные
$subscEmail = $_POST['subscEmail'];

// allEmail.txt

$myfile = fopen("allEmail.txt", "w") or die("Unable to open file!");
$txt = $subscEmail.", ";
fwrite($myfile, $txt);
fclose($myfile);