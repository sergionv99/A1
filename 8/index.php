<?php

//Dentro de esta variable ponemos la Url
$url = 'http://sergio.cesnuria.com/php/php-basic-exercises.php';
//parse_url analiza la el url y nos devuelve sus componentes
$url=parse_url($url);
//con $url[''] especificamos los datos que queramos sacar
echo 'Scheme: '.$url['scheme']."\n <br>";
echo 'Host: '.$url['host']."\n <br>";
echo 'Path: '.$url['path']."\n";

    
   