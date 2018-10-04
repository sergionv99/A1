<?php

function convertidor($palabra) {
    //explode divide un string en varios string http://php.net/manual/es/function.explode.php
    //explode divide el string hasta el demilitador indicado en etse caso |
  $boom= explode('|',$palabra);
  $resultado = '';
  //abrimos un bucle foreach para ir comprobando los valores de $boom
    //$boom as $value para que $value actue como $boom
    foreach($boom as $value){
        //abriremos un switch para comprobar el $value y guardarlo en 
        switch(trim($value)){
            case 'cero':
                $result .= '0';
                break;
            case 'uno':
                $result .= '1';
                break;
            case 'dos':
                $result .= '2';
                break;
            case 'res':
                $result .= '3';
                break;
            case 'cuatro':
                $result .= '4';
                break;
            case 'cinco':
                $result .= '5';
                break;
            case 'seis':
                $result .= '6';
                break;
            case 'siete':
                $result .= '7';
                break;
            case 'ocho':
                $result .= '8';
                break;
            case 'nueve':
                $result .= '9';
                break;    
        }
    }          
    //el return es los que la funcion una vez terminada devolvera
    return $result;
}echo convertidor("cero|tres|cinco|seis|ocho|uno");
