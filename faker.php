<?php

require 'utility.php';

$inFile = fopen('input_fake.txt', 'r');
$outFile = fopen('output_fake.csv', 'w');

while(!feof($inFile)){
    $lineIn = trim(fgets($inFile));
    //$lineIn = str_replace("135", '', $lineIn);
    
    $code = '135' . Utility::getDatetime($lineIn);
   
    $lineOut = $lineIn . "," . $code . "\n";
    
    fputs($outFile, $lineOut);
}
?>
