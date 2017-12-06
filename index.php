<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'Hello World!';
//делаем из страницы сайта свежайший "клон" Яндекса
 //$str = file_get_contents ('http://parsing.valemak.com/ru/php/import/file-get-contents/');
 //

$text = file_get_contents( 'http://mentor.su/prostoy-parser-na-php/' );
$newText = preg_replace( '/strong/' ,"i", $text); 
    
    echo $newText;
