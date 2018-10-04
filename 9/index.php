<?php

//hacemos un if para comprobar si es HTTPS usando $_SERVER['HTTPS'] en caso de no serlo, sera http

if (!empty($_SERVER['HTTPS'])) 
{
  echo 'ES HTTPS';
}
else
{
echo 'ES HTTP';
}

