<?php

require 'utility.php';

$inFile = fopen('input.txt', 'r');
$outFile = fopen('output.csv', 'w');

while(!feof($inFile)){
    $lineIn = trim(fgets($inFile));
    $lineIn = substr($lineIn, 3);
    
    echo (int)$lineIn;
    echo "\n";
    
    $code = Utility::getShortcode((int)$lineIn);
   
    $lineOut = '135' . $lineIn . "," . $code . "\n";
    
    fputs($outFile, $lineOut);
}
?>
