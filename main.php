<?php

$fname = $_POST["fname"];
$emailadd = $_POST["email"];
$text = $_POST["message"];
$numbers = fopen("num.txt", "r") or die("Unable to open file!");
$num = fread($numbers,filesize("num.txt"));
fclose($numbers);
$numbers = fopen("num.txt", "w") or die("Unable to open file!");
fwrite($numbers, $num + 1);
$message = fopen("{$num}.txt", "w") or die("Unable to open file!");
fwrite($message, $fname);
fwrite($message, "\n");
fwrite($message, $emailadd);
fwrite($message, "\n");
fwrite($message, $text);
fclose($numbers);
fclose($message);

