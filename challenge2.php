<?php

$codedMessage1 = '0@sn9sirppa@#?ia’jgtvryko1';
$messageLenght1 = strlen($codedMessage1);
$keyNumber1 = $messageLenght1 / 2;

$startIndex = 5;
$subString = substr($codedMessage1, $startIndex, $keyNumber1);

$subString = str_replace('@#?', ' ', $subString);

$decryptedMessage1 = strrev($subString);


$codedMessage2 = 'q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj';
$messageLenght2 = strlen($codedMessage2);
$keyNumber2 = $messageLenght2 / 2;

$startIndex = 5;
$subString = substr($codedMessage2, $startIndex, $keyNumber2);

$subString = str_replace('@#?', ' ', $subString);

$decryptedMessage2 = strrev($subString);


$codedMessage3 = 'aopi?sgnirts@#?sedhtg+p9l!';
$messageLenght3 = strlen($codedMessage3);
$keyNumber3 = $messageLenght3 / 2;

$startIndex = 5;
$subString = substr($codedMessage3, $startIndex, $keyNumber3);

$subString = str_replace('@#?', ' ', $subString);

$decryptedMessage3 = strrev($subString);


echo 'Message1: ' . $decryptedMessage1 . "\n" . 'Message2: ' . $decryptedMessage2 . "\n" . 'Message3: ' . $decryptedMessage3 . "\n" ;

?> 

