<?php

class Utility {   
    
    public static function getShortcode ($integer)
    {
        $base = 'abcdefghjkmnpqrstwxz23456789';
        $length = strlen($base);
        $out1='';
        while($integer > $length - 1)
        {
            $out1 = $base[fmod($integer, $length)] . $out1;
            $integer = floor( $integer / $length );
        }
        $shorturl=$base[$integer] . $out1;
        
        return $shorturl;
    }

    
    public static function getPlaintext($string)
    {
        $base = 'abcdefghjkmnpqrstwxz23456789';
        $length = strlen($base);
        $size = strlen($string) - 1;
        $string = str_split($string);
        $out = strpos($base, array_pop($string));
        foreach($string as $i => $char)
        {
            $out += strpos($base, $char) * pow($length, $size - $i);
        }
        return $out;
    }    
}

?>
