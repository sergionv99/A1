<?php

//con $_SERVER[HTTP_HOST] nos muestra el nombre del host y el puerto y [REQUEST_URI] nos muestra la ruta del fichero php
echo $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

