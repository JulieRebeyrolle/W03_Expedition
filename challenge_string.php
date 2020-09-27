<?php
$firstMessage = '0@sn9sirppa@#?ia\'jgtvryko1';
$secondMessage = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$thirdMessage = 'aopi?sgnirts@#?sedhtg+p9l!';

$message = $firstMessage;
// $message = $secondMessage;
// $message = $thirdMessage;

$stringDecoder = strrev(str_replace('@#?', ' ', substr($message, 5, strlen($message) / 2)));
echo $stringDecoder;

/* VERSION LONGUE :
$keyNumber = strlen($stringToDecode) / 2;
$subString = substr($stringToDecode, 5, $keyNumber);
$replace = str_replace('@#?', ' ', $subString);
$answer = strrev($replace);
echo $answer;*/

