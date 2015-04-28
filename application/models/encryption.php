<?php

class Encryption extends CI_Model
{
    
    function encode($str="")
    {
        return strtr(
                base64_encode($str),
                array(
                    '+' => '.',
                    '=' => '-',
                    '/' => '~'
                )
            );
    }
    function decode($str="")
    {
        return base64_decode(strtr(
                $str, 
                array(
                    '.' => '+',
                    '-' => '=',
                    '~' => '/'
                )
            ));
    }
}